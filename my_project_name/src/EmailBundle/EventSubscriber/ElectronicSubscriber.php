<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/27/2017
 * Time: 3:17 PM
 */

namespace EmailBundle\EventSubscriber;


use EmailBundle\Events\ElectronicAddedEvent;
use Swift_Mailer;
use Swift_Message;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ElectronicSubscriber implements EventSubscriberInterface
{
    private $mailer;
    
    public function __construct(Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            ElectronicAddedEvent::NAME => 'onStoreElectronic',
        );
    }
    
    
    public function onStoreElectronic(ElectronicAddedEvent $event)
    {

        date_default_timezone_set('Europe/Bucharest');
        $date = date('m/d/Y h:i:s a', time());
        
        $electronic = $event->getElectronic();
        $message = Swift_Message::newInstance()
            ->setFrom('cevafain90@gmail.com')
            ->setTo('cristir95@gmail.com')
            ->setSubject('Test Email')
            ->setBody("Electronic: $electronic was added to the database at".$date .".", 'text/plain');
        
         $this->mailer->send($message);
        
    }
}