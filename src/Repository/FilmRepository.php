<?php

namespace App\Repository;

use App\Entity\Film;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Film|null find($id, $lockMode = null, $lockVersion = null)
 * @method Film|null findOneBy(array $criteria, array $orderBy = null)
 * @method Film[]    findAll()
 * @method Film[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Film::class);
    }

    //Requete DQL permettant de récupérer tous les films dont la date de sortie est comprise dans l'intervalle des deux dates de sortie passées en paramètre.
    public function findByDateBetweenTwo($dateInf, $dateSup)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('f')
            ->distinct(true)
            ->from('App:Film','f')
            ->Where('f.dateSortie BETWEEN :Inf AND :Sup ')
            ->setParameter('Inf', $dateInf)
            ->setParameter('Sup', $dateSup)
            ->getQuery()
            ->getResult();
    }

    //Requete DQL permettant de récupérer tous les films dont la date de sortie est anterieure à la date passée en paramètre.
    public function findByDateInfTo($date)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('f')
            ->distinct(true)
            ->from('App:Film','f')
            ->Where('f.dateSortie < :dateSortie')
            ->setParameter('dateSortie', $date)
            ->getQuery()
            ->getResult();
    }

    //Requete DQL permettant de récupérer tous les films dont les deux acteurs passés en paramètre font partie du casting.
    public function findByHaveTheseTwoActors($nomPrenom1, $nomPrenom2)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('f.titre')
            ->distinct(true)
            ->from('App:Film','f')
            ->join('f.acteurs', 'a1')
            ->join('f.acteurs', 'a2')
            ->where('a1.nomPrenom = :nomPrenom1')
            ->andWhere('a2.nomPrenom = :nomPrenom2')
            ->setParameter('nomPrenom1',$nomPrenom1)
            ->setParameter('nomPrenom2',$nomPrenom2)
            ->getQuery()
            ->getResult();
    }

    //Requete DQL permettant de récupérer tous les films dont le titre correspond au moins en partie à la chaine de caractère passé en paramètre.
    public function findByPartOfTitre($titre)
    {
        return $this->getEntityManager()->createQueryBuilder()

            ->select('f')
            ->distinct(true)
            ->from('App:Film','f')
            ->Where('f.titre LIKE :titre')
            ->setParameter('titre','%'.$titre.'%')
            ->getQuery()
            ->getResult();
    }
}
