<?php
    /**
     * Created by PhpStorm.
     * User: crus
     * Date: 11/13/2017
     * Time: 3:18 PM
     */

    namespace AppBundle\Repository;


    interface Repository
    {
        public function getById($id);
        public function getAll($filter);
        public function add($object);
        public function delete($id);
        public function update($object);
    }