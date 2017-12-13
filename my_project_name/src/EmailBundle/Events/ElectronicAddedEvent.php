<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/27/2017
 * Time: 3:04 PM
 */

namespace EmailBundle\Events;


use AppBundle\Entity\Electronic;
use Symfony\Component\EventDispatcher\Event;

class ElectronicAddedEvent extends Event
{
    const NAME = 'electronic.added';
    
    protected $electronic;
    
    public function __construct(Electronic $electronic)
    {
        $this->electronic = $electronic;
    }
    
    public function getElectronic()
    {
        return $this->electronic;
    }
}