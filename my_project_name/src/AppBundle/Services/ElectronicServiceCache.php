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

class ElectronicServiceCache
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
    
    public function getAll($filter)
    {
        
        if ($filter !== null) {
            
            $items = $this->cache->getItem($filter);
            
            if (!$items->isHit()) {//if filter is not cached , cahce filter and objets that should be in it
                echo "did not hit";
                $keyArray = array();
                foreach ($this->service->getAll($filter) as $electronic) { //add un-cached objects to cache
                    $id = (string)$electronic->getId();
                    $this->addElectronicToCahce($this->service->getById($id));
                    $keyArray[] = $id;
                }
                
                if (0 < count($keyArray)) {//if there are items with given filter save their ids to cache
                    $items->set($keyArray);
                    $this->cache->save($items);
                } else {
                    return [];
                }
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
        $cacheElectronic->set($electronic);
        $this->cache->save($cacheElectronic);
    }
    
    /**
     * @param $id
     * @return Electronic
     */
    public function getById($id)
    {
        $this->addElectronicToCahce($this->service->getById($id));
        
        return $this->cache->getItem($id)->get();
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
        $this->addKeyToFilteredCache($electronic);
        
        return $electronic->getId();
    }
    
    /**
     * @param $electronic Electronic
     */
    private function addKeyToFilteredCache(Electronic $electronic)
    {
        
        $cachedFilter = $this->cache->getItem($electronic->getBrand());
        if ($cachedFilter->isHit()) {
            
            $array = $cachedFilter->get();
            $array[] = (string)$electronic->getId();
            $cachedFilter->set($array);
            $this->cache->save($cachedFilter);
        }
    }
    
    /**
     * @param $electronic Electronic
     */
    public function updateElectronic(Electronic $electronic)
    {
        
        $this->service->updateElectronic($electronic);
        $this->updateElectronicFromCache($electronic);
        
    }
    
    /**
     * @param $electronic Electronic
     */
    private function updateElectronicFromCache(Electronic $electronic)
    {
        $item = $this->cache->getItem($electronic->getId());
        if ($item->isHit() && $item->get()->getBrand() !== $electronic->getBrand()) {
            $this->deleteKeyFromFilteredCache($item->getKey());
            $this->addKeyToFilteredCache($electronic);
            $item->set($electronic);
            $this->cache->save($item);
            
            return;
        }
        
        $this->addElectronicToCahce($electronic);
        $this->addKeyToFilteredCache($electronic);
        
    }
    
    /**
     * @param $id
     */
    private function deleteKeyFromFilteredCache($id)
    {
        $item = $this->cache->getItem($id);
        if ($item->isHit()) {
            $cachedFilter = $this->cache->getItem($item->get()->getBrand());
            $array = $cachedFilter->get();
            if (($key = array_search($item->getKey(), $array)) !== false) {
                unset($array[$key]);
            }
            $cachedFilter->set($array);
            $this->cache->save($cachedFilter);
            $this->cache->deleteItem($id);
        }
    }
    
    public function deleteElectronic($id)
    {
        $this->service->deleteElectronic($id);
        $this->deleteKeyFromFilteredCache($id);
    }
    
    
}