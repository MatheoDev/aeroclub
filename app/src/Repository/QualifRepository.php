<?php

namespace App\Repository;

use App\Entity\Qualif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Qualif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Qualif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Qualif[]    findAll()
 * @method Qualif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QualifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Qualif::class);
    }

    // /**
    //  * @return Qualif[] Returns an array of Qualif objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Qualif
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
