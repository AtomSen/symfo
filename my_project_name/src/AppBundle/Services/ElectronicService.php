<?php

namespace AppBundle\Services;

use AppBundle\Entity\Electronic;
use AppBundle\Exceptions\ObjectNotValidException;
use AppBundle\Repository\Repository;
use EmailBundle\Events\ElectronicAddedEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class ElectronicService
{
    
    private $repo;
    private $validator;
    private $eventDispatcher;
    
    
    /**
     * ElectronicService constructor.
     * @param Repository $repo
     * @param ValidatorInterface $validator
     * @param EventDispatcher $eventDispatcher
     */
    public function __construct(
        Repository $repo,
        ValidatorInterface $validator,
        EventDispatcher $eventDispatcher
    ) {
        $this->eventDispatcher = $eventDispatcher;
        $this->validator = $validator;
        $this->repo = $repo;
    }
    
    /**
     * @param $id
     * @return Electronic
     */
    public function getById($id)
    {
        return $this->repo->getById($id);
    }
    
    /**
     * @param null $filter
     * @return array
     */
    public function getAll($filter = null)
    {
        return $this->repo->getAll($filter);
    }
    
    
    /**
     * @param Electronic $electronic
     * @return int
     * validates an electronic and if it is valid the electronic is
     * passed to the ElectronicRepository and an event is dispatched
     */
    public function addElectronic(Electronic $electronic)
    {
        $errors = $this->validator->validate($electronic);
        if (count($errors) > 0) {
            $errorsString = (string)$errors;
            throw new ObjectNotValidException($errorsString);
        } else {
            
            
            /*$this->eventDispatcher->dispatch(
                ElectronicAddedEvent::NAME,
                new ElectronicAddedEvent($electronic)
            );*/
            
            return $this->repo->add($electronic);
            
        }
        
    }
    
    /**
     * @param $electronic Electronic
     */
    public function updateElectronic(Electronic $electronic)
    {
        $errors = $this->validator->validate($electronic);
        if (count($errors) > 0) {
            $errorsString = (string)$errors;
            throw new ObjectNotValidException($errorsString);
        } else {
            $this->repo->update($electronic);
        }
    }
    
    /**
     * @param $id int
     */
    public function deleteElectronic($id)
    {
        $this->repo->delete($id);
    }
    
}