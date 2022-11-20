<?php

namespace App\Repository;

use App\Entity\Meter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Meter>
 *
 * @method Meter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meter[]    findAll()
 * @method Meter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Meter::class);
    }

    public function add(Meter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Meter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Meter[] Returns an array of Meter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Meter
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
