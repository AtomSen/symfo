<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 12/15/2017
 * Time: 11:42 AM
 */

namespace AppBundle\Services;


use AppBundle\Entity\Electronic;

interface ElectronicServiceInterface
{
    /**
     * @param $id
     * @return Electronic
     */
    public function getById($id);

    
    /**
     * @param null $filter
     * @return array
     */
    public function getAll($filter = null);

    
    
    /**
     * @param Electronic $electronic
     * @return int
     * validates an electronic and if it is valid the electronic is
     * passed to the ElectronicRepository and an event is dispatched
     */
    public function addElectronic(Electronic $electronic);
    
    
    
    
    /**
     * @param $electronic Electronic
     */
    public function updateElectronic(Electronic $electronic);

    
    /**
     * @param $id int
     */
    public function deleteElectronic($id);

}