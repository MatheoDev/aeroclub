<?php

namespace App\Repository;

use App\Entity\OperationsSurComptes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OperationsSurComptes|null find($id, $lockMode = null, $lockVersion = null)
 * @method OperationsSurComptes|null findOneBy(array $criteria, array $orderBy = null)
 * @method OperationsSurComptes[]    findAll()
 * @method OperationsSurComptes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OperationsSurComptesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OperationsSurComptes::class);
    }

    // /**
    //  * @return OperationsSurComptes[] Returns an array of OperationsSurComptes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OperationsSurComptes
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
