<?php

namespace App\Repository;

use App\Entity\Acteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Acteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Acteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Acteur[]    findAll()
 * @method Acteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Acteur::class);
    }

    //Requête DQL permettant de récupérer tout les acteurs ayant au moins 3 films
    public function findByHaveCountFilmsGreaterOrEqualThanThree()
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('a')
            ->distinct(true)
            ->from('App:Acteur','a')
            ->join('a.films', 'f')
            ->groupBy('a.nomPrenom')
            ->having('COUNT(f.id) >= :nbr')
            ->setParameter('nbr', 3)
            ->getQuery()
            ->getResult();
    }

    //Requête DQL permettant de récupérer les acteurs qui ont des films (dans l'ordre croissant)
    public function findByHaveFilmOrderByDate()
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('a')
            ->distinct(true)
            ->from('App:Acteur','a')
            ->join('a.films', 'f')
            ->getQuery()
            ->getResult();
    }

    //Requête DQL permettant de récupérer les genres dans les quels un acteurs donné à deux films
    public function findGenreByActeurHaveTwoFilmIn($nomPrenom)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('g.nom')
            ->distinct(true)
            ->from('App:Acteur','a')
            ->join('a.films', 'f')
            ->join('f.genre', 'g')
            ->where('a.nomPrenom = :nomPrenom')
            ->setParameter('nomPrenom',$nomPrenom)
            ->groupBy('g.nom')
            ->having('COUNT(f.id) >= :nbr')
            ->setParameter('nbr', 2)
            ->getQuery()
            ->getResult();
    }

    //Requête DQL permettant de récupérer la sommes des durées des films d'un acteur
    public function getSumOfFilmDureeIn($nomPrenom)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('SUM(f.duree)')
            ->from('App:Acteur', 'a')
            ->join('a.films','f')
            ->where('a.nomPrenom = :nomPrenom')
            ->setParameter('nomPrenom',$nomPrenom)
            ->getQuery()
            ->getResult();
    }

    //Requête DQL permettant de récupérer les acteurs et les genres des films dans lesquels ils jouent
    public function findActeursGenresWhereActeursHaveFilmIn()
    {
        $resultFinal = array();

        $result_sub_array = $this->getEntityManager()->createQueryBuilder()

            ->select('a.nomPrenom')
            ->distinct(true)
            ->from('App:Acteur','a')
            ->join('a.films', 'f')
            ->groupBy('a.nomPrenom')
            ->having('COUNT(f.id) >= :nbr')
            ->setParameter('nbr', 1)
            ->getQuery()
            ->getResult();

        foreach ($result_sub_array as $result_sub)
        {
            $result_array = $this->getEntityManager()->createQueryBuilder()

                ->select('g.nom')
                ->distinct(true)
                ->from('App:Acteur','a')
                ->join('a.films', 'f')
                ->join('f.genre', 'g')
                ->where('a.nomPrenom = :nomPrenom')
                ->setParameter('nomPrenom',$result_sub['nomPrenom'])
                ->groupBy('g.id')
                ->having('COUNT(f.id) >= :nbr')
                ->setParameter('nbr', 1)
                ->getQuery()
                ->getResult();

            $resultFinal[] = ["nomPrenom"=>$result_sub['nomPrenom'], "genres"=>$result_array];
        }

        return $resultFinal;
    }
}