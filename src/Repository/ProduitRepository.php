<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    public function findAllOrdered()
    {

        $qb = $this->createQueryBuilder('prod')->addOrderBy('prod.id', 'ASC');

        $query = $qb->getQuery();

        return $query->execute();

        /*
        $dql = 'SELECT prod FROM App\Entity\Produit prod';

        $query = $this->getEntityManager()->createQuery($dql);

        return $query->execute();
        */
    }

    public function search($product)
    {
        print($product->getPrix());
        $qb = $this->createQueryBuilder('prod');

        $query = $qb->andWhere('prod.nom LIKE :nameTerm OR prod.ref LIKE :nameTerm')
                    ->setParameter('nameTerm', '%'.$product->getNom().'%');

        if ($product->getPrix()) {
            $qb->andWhere('prod.prix = :priceTerm')
                ->setParameter('priceTerm', $product->getPrix());
        }
        if ($product->getMarque()) {
            $qb->andWhere('mq.nom = :marqueTerm')
                ->leftJoin('prod.marque', 'mq')
                ->setParameter('marqueTerm', $product->getMarque()->getNom());
        }

        return $qb->getQuery()->getResult();
    }

    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
