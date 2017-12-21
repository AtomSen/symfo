<?php

namespace Tests\AppBundle\Controller;


use AppBundle\Entity\Electronic;
use AppBundle\Exceptions\ObjectNotFoundException;
use AppBundle\Exceptions\ObjectNotValidException;
use AppBundle\Repository\ElectronicRepository;
use AppBundle\Services\ElectronicService;


use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    private $service;
    private $repo;
    
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        
        $repo = $this->createMock(ElectronicRepository::class);
        $this->repo = $repo;
        
        
        $validator = $this->createMock(ValidatorInterface::class);
        $validator->method('validate')->will($this->onConsecutiveCalls(
            null,
            'electronic should have values')
        );
        $dispatcher = $this->createMock(EventDispatcher::class);
        
        $this->service = new ElectronicService($repo, $validator,$dispatcher);
        
    }
    
    public function testAdd()
    {
        $this->expectException(ObjectNotValidException::class);
        $this->repo->expects($this->exactly(1))
            ->method('add')
            ->withConsecutive(
                new Electronic(10, "ss", "sda", 234),
                new Electronic()
            )
            ->willReturnOnConsecutiveCalls(
                10,
                $this->throwException(new ObjectNotValidException('nu e valid'))
            );
        
        
        $this->assertEquals(10,
            $this->service->addElectronic(new Electronic(10, "ss", "sda", 234)));
        $this->assertEquals(12,
            $this->service->addElectronic(new Electronic()));
        
        
    }
    
    
    public function testGetById()
    {
        $this->expectException(ObjectNotFoundException::class);
        $this->repo
            ->method('getById')
            ->willReturnOnConsecutiveCalls(
                new Electronic(11, '11', '11', 11),
                $this->throwException(new ObjectNotFoundException('nu e valid'))
            );
        
        $this->assertEquals(new Electronic(11, '11', '11', 11), $this->service->getById(11));
        $this->service->getById(12);
        
    }
    
    public function testGetAll()
    {
        $this->repo->method('getAll')
            ->will($this->onConsecutiveCalls(
                array(1),
                array())
            );
        $this->assertEquals(1, count($this->service->getAll()));
        $this->assertEquals(0, count($this->service->getAll()));
        
    }
    
    public function testDelete()
    {
        $this->repo
            ->expects($this->once())
            ->method('delete')->with(11);
        $this->service->deleteElectronic(11);
    }
    
    public function testUpdate()
    {
        $this->repo->expects($this->once())
            ->method('update')
            ->with(new Electronic(1, '1', '1', 1));
        $this->service->updateElectronic(new Electronic(1, '1', '1', 1));
    }
}