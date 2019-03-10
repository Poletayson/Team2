<?php

namespace App\Repository;

use App\Entity\Tovar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tovar|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tovar|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tovar[]    findAll()
 * @method Tovar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TovarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tovar::class);
    }

    // /**
    //  * @return Tovar[] Returns an array of Tovar objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tovar
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
