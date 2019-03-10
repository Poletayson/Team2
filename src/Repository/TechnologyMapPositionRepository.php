<?php

namespace App\Repository;

use App\Entity\TechnologyMapPosition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TechnologyMapPosition|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechnologyMapPosition|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechnologyMapPosition[]    findAll()
 * @method TechnologyMapPosition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechnologyMapPositionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TechnologyMapPosition::class);
    }

    // /**
    //  * @return TechnologyMapPosition[] Returns an array of TechnologyMapPosition objects
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
    public function findOneBySomeField($value): ?TechnologyMapPosition
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
