<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Electronic;
use AppBundle\Exceptions\ObjectNotFoundException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AssignedGenerator;
use Doctrine\ORM\Mapping\ClassMetadata;

class ElectronicRepository implements Repository
{
    private $entityManager;

    /**
     * StudentRepo constructor.
     * @param $registry EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $registry)
    {
        $this->entityManager = $registry;
    }

    /**
     * @param null $filter
     * @return array
     */
    public function getAll($filter = null)
    {
        if ($filter === null) {
            return $this->entityManager
                ->getRepository(Electronic::class)
                ->findAll();
        } else {
            $qb = $this->entityManager->createQueryBuilder();
            $qb->select(array('u'))
                ->from(Electronic::class, 'u')
                //->where($qb->expr()->like('u.brand', $qb->expr()->literal("%$filter%")));
                ->where($qb->expr()->eq('u.brand', $qb->expr()->literal("$filter")));
            return $qb->getQuery()->execute();
        }
    }

    /**
     * @param $electronic Electronic
     * @return int
     * adds object to database
     */
    public function add($electronic)
    {
        $this->entityManager->persist($electronic);
        $this->entityManager->flush();

        return $electronic->getId();
    }

    /**
     * @param $id int
     */
    public function delete($id)
    {
        $qb = $this->entityManager->createQueryBuilder();
        $querry = $qb->delete(Electronic::class, 'u')
            ->where('u.id = :id')
            ->setParameter('id', $id);
        $querry->getQuery()->execute();
    }

    /**
     * @param $object Electronic
     * fully  replaces an electronic if all fields are given
     */
    public function update($object)
    {
        try {
            //updates object
            $electronic = $this->getById($object->getID());
            if ($object->getBrand() !== null) {
                $electronic->setBrand($object->getBrand());
            }
            if ($object->getModel() !== null) {
                $electronic->setModel($object->getModel());
            }
            if ($object->getPrice() !== null) {
                $electronic->setPrice($object->getPrice());
            }
            $this->entityManager->flush();
        } catch (ObjectNotFoundException $exception) {

            //insert with id if it does not exist
            $this->entityManager->persist($object);
            //overwrites auto_increment
            $metadata = $this->entityManager->getClassMetadata(get_class($object));
            $metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
            $metadata->setIdGenerator(new AssignedGenerator());
            $this->entityManager->flush();
        }
    }

    /**
     * @param $id int
     * @return null|object
     */
    public function getById($id)
    {
        $electronic = $this->entityManager
            ->getRepository(Electronic::class)
            ->find($id);
        if ($electronic == null) {
            throw new ObjectNotFoundException("Object does not exists!");
        }

        return $electronic;
    }

}