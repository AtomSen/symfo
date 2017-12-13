<?php
/**
 * Created by PhpStorm.
 * User: crus
 * Date: 11/27/2017
 * Time: 1:27 PM
 */

namespace EmailBundle;

use EmailBundle\Events\ElectronicAddedEvent;
use Swift_Mailer;
use Swift_Message;


class AddElectronicListener
{
    private $mailer;
    
    public function __construct(Swift_Mailer $mailer) {
        $this->mailer=$mailer;
    }
    
    public function onAddAction(ElectronicAddedEvent $event)
    {
        $message = (new Swift_Message('Hello Email'))
            ->setFrom("cevafain90@gmail.com")
            ->setTo('crus@pentalog.com')
            ->setBody(
                "Electronic:  was added to the database", 'text/plain'
            );
        $this->mailer->send($message);
    }
}