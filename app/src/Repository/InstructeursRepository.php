<?php

namespace App\Repository;

use App\Entity\Instructeurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Instructeurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Instructeurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Instructeurs[]    findAll()
 * @method Instructeurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstructeursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Instructeurs::class);
    }

    // /**
    //  * @return Instructeurs[] Returns an array of Instructeurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Instructeurs
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
