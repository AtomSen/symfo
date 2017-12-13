<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/22/2017
 * Time: 4:20 PM
 */

namespace Tests\AppBundle\Controller;


use AppBundle\Entity\Electronic;
use PHPUnit\Framework\TestCase;

class ElectronicTest extends TestCase
{
    public function testNewElectronic()
    {
        $new=new Electronic();
        $new->setId(5);
        $new->setBrand("Mercedes");
        $new->setModel("i8");
        $new->setPrice(34556);
        $this->assertEquals("Mercedes",$new->getBrand());
        $this->assertEquals("i8",$new->getModel());
        $this->assertEquals(34556,$new->getPrice());
    }
}