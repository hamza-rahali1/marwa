<?php

namespace App\Repository;

use App\Entity\OPCVM;
use App\Entity\OPCVMSearch;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method OPCVM|null find($id, $lockMode = null, $lockVersion = null)
 * @method OPCVM|null findOneBy(array $criteria, array $orderBy = null)
 * @method OPCVM[]    findAll()
 * @method OPCVM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OPCVMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OPCVM::class);
    }

    public function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
    }

    public function findAllVisibleQuery(OPCVMSearch $search)
    {
        $query = $this->findVisibleQuery();

        if ($search->getLibelle())
        {
            $query = $query
                ->andWhere('p.libelle LIKE :libelle ')
                ->setParameter('libelle', '%'.$search->getLibelle().'%');
        }

        if ($search->getSociete())
        {
            $query = $query
                ->andWhere('p.societe LIKE :societe ')
                ->setParameter('societe', '%'.$search->getSociete().'%');
        }

        if ($search->getCategorie())
        {
            $query = $query
                ->andWhere('p.categorie LIKE :categorie ')
                ->setParameter('categorie', '%'.$search->getCategorie().'%');
        }

        if ($search->getType())
        {
            $query = $query
                ->andWhere('p.type LIKE :type ')
                ->setParameter('type', '%'.$search->getType().'%');
        }

        if ($search->getOrientation())
        {
            $query = $query
                ->andWhere('p.orientation LIKE :orientation ')
                ->setParameter('orientation', '%'.$search->getOrientation().'%');
        }

        if ($search->getVlF())
        {
            $query = $query
                ->andWhere('p.vlF LIKE :vlF ')
                ->setParameter('vlF', '%'.$search->getVlF().'%');
        }

        if ($search->getVlAu())
        {
            $query = $query
                ->andWhere('p.vlAu LIKE :vlAu ')
                ->setParameter('vlAu', '%'.$search->getVlAu().'%');
        }

        if ($search->getAn())
        {
            $query = $query
                ->andWhere('p.an LIKE :an ')
                ->setParameter('an', '%'.$search->getAn().'%');
        }

        if ($search->getDivvv())
        {
            $query = $query
                ->andWhere('p.divvv LIKE :divvv ')
                ->setParameter('divvv', '%'.$search->getDivvv().'%');
        }

        if ($search->getPerf())
        {
            $query = $query
                ->andWhere('p.perf LIKE :perf ')
                ->setParameter('perf', '%'.$search->getPerf().'%');
        }

        return $query->getQuery()->getResult();
    }

    public function findAllVisible(): array
    {
        return $this->findVisibleQuery()
             ->getQuery()
             ->getResult();
    }

    public function findLatest($limit): array
    {
        return $this->findVisibleQuery()
              ->setMaxResults ($limit)
              ->getQuery()
              ->getResult();
    }
}
