<?php

namespace App\Repository;

use App\Entity\Vape;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vape>
 *
 * @method Vape|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vape|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vape[]    findAll()
 * @method Vape[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VapeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vape::class);
    }

    public function findLikeName(string $name, string $categories): array
    {
        $queryBuilder = $this->createQueryBuilder('v');

        if (!empty($name)) {
            $queryBuilder->where('v.brand LIKE :name')
                ->setParameter('name', '%' . $name . '%');
        }


        if (!empty($contract)) {
            $queryBuilder->andWhere('v.model LIKE :categories')
                ->setParameter('categories', $categories);
        }

        $queryBuilder
            ->orderBy('v.brand', 'ASC');
        $query = $queryBuilder->getQuery();
        return $query->getResult();
    }

//    /**
//     * @return Vape[] Returns an array of Vape objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vape
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
