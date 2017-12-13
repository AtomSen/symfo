<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/9/2017
 * Time: 12:47 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Validators as AcmeAssert;

/**
 * @AcmeAssert\ElectronicConstraint
 * @ORM\Entity
 */
class Electronic
{
    /** php bin/console doctrine:schema:update --force
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $brand;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $model;
    /**
     * @ORM\Column(type="float", length=10)
     */
    private $price;
    
    /**
     * Electronic constructor.
     * @param $id
     * @param $brand
     * @param $model
     * @param $price
    */
    public function __construct($id=null, $brand=null, $model=null, $price=null)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }
    
    public function __toString()
    {
        return $this->brand . ' ' . $this->model . ' ' . $this->price;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}