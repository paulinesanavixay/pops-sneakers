<?php

namespace App\Repository;

use App\Entity\SneakerSell;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SneakerSell>
 */
class SneakerSellRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SneakerSell::class);
    }

    /**
     * @return SneakerSell[] Returns an array of Sneaker objects
     */
    public function findSneakersBySearchForm($value): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.description LIKE :val')
            ->orWhere('s.name LIKE :val')
            ->orWhere('s.brand LIKE :val')
            ->setParameter('val', '%'.$value.'%')
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
            ;
    }

    //    /**
    //     * @return Sneaker[] Returns an array of Sneaker objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Sneaker
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
