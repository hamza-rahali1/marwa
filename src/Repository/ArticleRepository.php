<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\ArticleSearch;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
    }

    public function findAllVisibleQuery(ArticleSearch $search)
    {
        $query = $this->findVisibleQuery();

        if ($search->getTitre())
        {
            $query = $query
                ->andWhere('p.titre LIKE :titre ')
                ->setParameter('titre', '%'.$search->getTitre().'%');
        }

        if ($search->getCategorie())
        {
            $query = $query
                ->andWhere('p.categorie LIKE :categorie ')
                ->setParameter('categorie', '%'.$search->getCategorie().'%');
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
