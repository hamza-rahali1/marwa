<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use App\Entity\UtilisateurSearch;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

     // /**
    //  * @return User[] Returns an array of User objects
    //  */
    public function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
    }

    public function findAllVisibleQuery(UtilisateurSearch $search)
    {
        $query = $this->findVisibleQuery();

        if ($search->getNom())
        {
            $query = $query
                ->andWhere('p.nom LIKE :nom ')
                ->setParameter('nom', '%'.$search->getNom().'%');
        }

        if ($search->getPrenom())
        {
            $query = $query
                ->andWhere('p.prenom LIKE :prenom ')
                ->setParameter('prenom', '%'.$search->getPrenom().'%');
        }

        if ($search->getEmail())
        {
            $query = $query
                ->andWhere('p.email LIKE :email ')
                ->setParameter('email', '%'.$search->getEmail().'%');
        }

        if ($search->getTel())
        {
            $query = $query
                ->andWhere('p.tel LIKE :tel ')
                ->setParameter('tel', '%'.$search->getTel().'%');
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



