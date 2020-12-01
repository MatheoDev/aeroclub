<?php

namespace App\Repository;

use App\Entity\SeqVol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SeqVol|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeqVol|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeqVol[]    findAll()
 * @method SeqVol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeqVolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeqVol::class);
    }

    // /**
    //  * @return SeqVol[] Returns an array of SeqVol objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SeqVol
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
