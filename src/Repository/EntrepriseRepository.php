<?php

namespace App\Repository;

use App\Entity\Entreprise;
use App\Entity\EntrepriseSearch;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Entreprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entreprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entreprise[]    findAll()
 * @method Entreprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entreprise::class);
    }

    public function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
    }

    public function findAllVisibleQuery(EntrepriseSearch $search)
    {
        $query = $this->findVisibleQuery();

        if ($search->getLibelle())
        {
            $query = $query
                ->andWhere('p.libelle LIKE :libelle ')
                ->setParameter('libelle', '%'.$search->getLibelle().'%');
        }

        if ($search->getCodeIcbGeneral())
        {
            $query = $query
                ->andWhere('p.codeIcbGeneral LIKE :codeIcbGeneral ')
                ->setParameter('codeIcbGeneral', '%'.$search->getCodeIcbGeneral().'%');
        }

        if ($search->getSecteurGeneral())
        {
            $query = $query
                ->andWhere('p.secteurGeneral LIKE :secteurGeneral ')
                ->setParameter('secteurGeneral', '%'.$search->getSecteurGeneral().'%');
        }

        if ($search->getCodeICB())
        {
            $query = $query
                ->andWhere('p.codeICB LIKE :codeICB ')
                ->setParameter('codeICB', '%'.$search->getCodeICB().'%');
        }

        if ($search->getSecteur())
        {
            $query = $query
                ->andWhere('p.secteur LIKE :secteur ')
                ->setParameter('secteur', '%'.$search->getSecteur().'%');
        }

        if ($search->getCodeISIN())
        {
            $query = $query
                ->andWhere('p.codeISIN LIKE :codeISIN ')
                ->setParameter('codeISIN', '%'.$search->getCodeISIN().'%');
        }

        if ($search->getScore())
        {
            $query = $query
                ->andWhere('p.score LIKE :score ')
                ->setParameter('score', '%'.$search->getScore().'%');
        }

        if ($search->getCoursAu())
        {
            $query = $query
                ->andWhere('p.coursAu LIKE :coursAu ')
                ->setParameter('coursAu', '%'.$search->getCoursAu().'%');
        }

        if ($search->getCoursActuel())
        {
            $query = $query
                ->andWhere('p.coursActuel LIKE :coursActuel ')
                ->setParameter('coursActuel', '%'.$search->getCoursActuel().'%');
        }

        if ($search->getCbAdmise())
        {
            $query = $query
                ->andWhere('p.cbAdmise LIKE :cbAdmise ')
                ->setParameter('cbAdmise', '%'.$search->getCbAdmise().'%');
        }

        if ($search->getCbTotale())
        {
            $query = $query
                ->andWhere('p.cbTotale LIKE :cbTotale ')
                ->setParameter('cbTotale', '%'.$search->getCbTotale().'%');
        }

        if ($search->getPer())
        {
            $query = $query
                ->andWhere('p.per LIKE :per ')
                ->setParameter('per', '%'.$search->getPer().'%');
        }

        if ($search->getPbv())
        {
            $query = $query
                ->andWhere('p.pbv LIKE :pbv ')
                ->setParameter('pbv', '%'.$search->getPbv().'%');
        }

        if ($search->getDivYieldl())
        {
            $query = $query
                ->andWhere('p.divYield LIKE :divYield ')
                ->setParameter('divYield', '%'.$search->getDivYield().'%');
        }

        if ($search->getPerformance())
        {
            $query = $query
                ->andWhere('p.performance LIKE :performance ')
                ->setParameter('performance', '%'.$search->getPerformance().'%');
        }

        if ($search->getOption())
        {
            $query = $query
                ->andWhere('p.option LIKE :option ')
                ->setParameter('option', '%'.$search->getOption().'%');
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
