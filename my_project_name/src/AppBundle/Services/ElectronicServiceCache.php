<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 12/5/2017
 * Time: 11:37 AM
 */

namespace AppBundle\Services;


use AppBundle\Entity\Electronic;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class ElectronicServiceCache implements ElectronicServiceInterface
{
    
    protected $service;
    private $cache;
    
    public function __construct(ElectronicService $service)
    {
        
        $this->service = $service;
        $cache = new FilesystemAdapter('Electronics');
        //$cache->clear();
        
        $this->cache = $cache;
    }
    
    public function getAll($filter = null)
    {
        
        if ($filter !== null) {
            
            $items = $this->cache->getItem($filter);
            
            if (!$items->isHit()) {//if filter is not cached , cahce filter and objets that should be in it
                echo "did not hit";
                $keyArray = array();
                $electronics = $this->service->getAll($filter);
                foreach ($electronics as $electronic) { //add un-cached objects to cache
                    $id = (string)$electronic->getId();
                    $this->addElectronicToCahce($electronic);
                    $keyArray[] = $id;
                }
                
                if (0 < count($keyArray)) {//if there are items with given filter save their ids to cache
                    $items->set($keyArray);
                    $this->cache->save($items);
                }
                
                return $electronics;
            }
            $filteredElectronics = $this->cache->getItems(
                $this->cache->getItem($filter)->get()
            );
            $data = array();//put values from generator
            foreach ($filteredElectronics as $value) {
                $data[] = $value->get();
            }
            
            return $data;
            
        } else {
            
            return $this->service->getAll($filter);
        }
    }
    
    /**
     * @param $electronic Electronic
     */
    private function addElectronicToCahce(Electronic $electronic)
    {
        
        $cacheElectronic = $this->cache->getItem((string)$electronic->getId());
        if (!$cacheElectronic->isHit()) {
            $cacheElectronic->set($electronic);
            $this->cache->save($cacheElectronic);
        }
    }
    
    /**
     * @param $id
     * @return Electronic
     */
    public function getById($id)
    {
        $electronic = $this->service->getById($id);
        $this->addElectronicToCahce($electronic);
        
        return $electronic;
    }
    
    /**
     * @param $electronic Electronic
     * @return int id of added item
     */
    public function addElectronic(Electronic $electronic)
    {
        $addedElectronicId = $this->service->addElectronic($electronic);
        $electronic->setId($addedElectronicId);
        $this->addElectronicToCahce($electronic);
        $this->invalidateFilter($electronic);
        
        return $electronic->getId();
    }
    
    /**
     * @param $electronic Electronic
     */
    private function invalidateFilter(Electronic $electronic)
    {
        $this->cache->deleteItem($electronic->getBrand());
    }
    
    /**
     * @param $electronic Electronic
     */
    public function updateElectronic(Electronic $electronic)
    {
        $this->service->updateElectronic($electronic);
        $this->cache->deleteItem($electronic->getId());
        $this->invalidateFilter($electronic);
    }
    
    public function deleteElectronic($id)
    {
        $this->service->deleteElectronic($id);
        $item = $this->cache->getItem($id);
        if ($item->isHit()) {
            $this->invalidateFilter($item->get());
            $this->cache->deleteItem($id);
        }
    }
    
    
}