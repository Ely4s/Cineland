<?php

namespace App\Repository;

use App\Entity\Genre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Genre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Genre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Genre[]    findAll()
 * @method Genre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Genre::class);
    }

    //Requête DQL permettant de récupérer la moyenne des films d'un genre donné
    public function getAvgOfFilmDureeInOne($nom)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('AVG(f.duree)')
            ->from('App:Genre', 'g')
            ->join('g.films','f')
            ->where('g.nom = :genreNom')
            ->setParameter('genreNom',$nom)
            ->getResult();
    }

    //Requête DQL permettant de récupérer les films d'un genres donné
    public function getFilmIn($nom)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('f.titre')
            ->from('App:Film', 'f')
            ->join('f.genre','g')
            ->where('g.nom = :genreNom')
            ->setParameter('genreNom',$nom)
            ->getQuery()
            ->getResult();
    }
}
