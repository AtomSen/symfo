<?php

//namespace Tests\AppBundle\Controller;
//
//
//use AppBundle\Entity\Electronic;
//use AppBundle\Repository\ElectronicRepository;
//use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
//
//class RepositoryTest extends KernelTestCase
//{
//
//    /**
//     * @var ElectronicRepository
//     */
//    private $repo;
//
//    public function testAdd()
//    {
//        $this->assertNotNull($this->repo, "repo should not be null");
//        $electronic = new Electronic(null, "basesarasdDell", "latitude", 1234);
//        $this->repo->add($electronic);
//        return $electronic;
//    }
//
//    /**
//     * @depends testAdd
//     * @param $electronic Electronic
//     * @return Electronic
//     */
//    public function testFind($electronic)
//    {
//        $foundObj = $this->repo->getAll("basesarasdDell");
//        $electronic->setId($foundObj[0]->getId());
//        $this->assertEquals($electronic, $foundObj[0]);
//        return $electronic->getId();
//    }
//
//    /**
//     * @depends testFind
//     * @param $id int
//     */
//    public function testDelete($id)
//    {
//        $count = count($this->repo->getAll());
//        $this->repo->delete($id);
//        $count2 = count($this->repo->getAll());
//        $this->assertEquals($count - 1, $count2);
//    }
//
//    /**
//     * {@inheritDoc}
//     */
//    protected function setUp()
//    {
//        $kernel = self::bootKernel();
//        $this->repo = $kernel->getContainer()
//            ->get('ElectronicRepository');
//    }
//
//    /**
//     * {@inheritDoc}
//     */
//    protected function tearDown()
//    {
//        parent::tearDown();
//        $this->repo = null; // avoid memory leaks
//    }
//}