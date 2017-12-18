<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 12/18/2017
 * Time: 11:24 AM
 */

class Shelf
{
    private $priceMap = array();
    
    public function setProductPrice($product, $price)
    {
        $this->priceMap[$product] = $price;
    }
    
    public function getProductPrice($product)
    {
        return $this->priceMap[$product];
    }
}