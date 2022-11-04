<?php

namespace App\Repository;

use App\Entity\Fahrtkosten;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fahrtkosten>
 *
 * @method Fahrtkosten|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fahrtkosten|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fahrtkosten[]    findAll()
 * @method Fahrtkosten[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FahrtkostenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fahrtkosten::class);
    }

    public function save(Fahrtkosten $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Fahrtkosten $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Fahrtkosten[] Returns an array of Fahrtkosten objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Fahrtkosten
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
