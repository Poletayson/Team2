<?php

namespace App\Repository;

use App\Entity\TechnologyMap;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TechnologyMap|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechnologyMap|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechnologyMap[]    findAll()
 * @method TechnologyMap[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechnologyMapRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TechnologyMap::class);
    }

    // /**
    //  * @return TechnologyMap[] Returns an array of TechnologyMap objects
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
    public function findOneBySomeField($value): ?TechnologyMap
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
