<?php

namespace App\Controller;

use App\Entity\Acteur;
use App\Entity\Film;
use App\Entity\Genre;
use App\Factory\ContainerWithTitleFactory;
use App\Factory\LinkCardsFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CinelandController extends AbstractController
{
	public function index()
    {
        LinkCardsFactory::add($linkCards, 'Films','film-solid.png', 'filmsMenu');
        LinkCardsFactory::add($linkCards, 'Genres','theater-masks-solid.png', 'genresMenu');
        LinkCardsFactory::add($linkCards, 'Acteurs','user-tie-solid.png', 'acteursMenu');

        ContainerWithTitleFactory::new($containerWithTitle, 'Accueil');

        return $this->render('pageTemplate/menu.html.twig', array
        (
            "linkCards" => $linkCards,
            "containerWithTitle" => $containerWithTitle,
        ));
 	}

    public function init()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $actors = $entityManager->getRepository(Acteur::class)->findAll();
        foreach ( $actors as $actor) $entityManager->remove($actor);
        $entityManager->flush();

        $movies = $entityManager->getRepository(Film::class)->findAll();
        foreach ( $movies as $movie) $entityManager->remove($movie);
        $entityManager->flush();

        $genres = $entityManager->getRepository(Genre::class)->findAll();
        foreach ( $genres as $genre) $entityManager->remove($genre);
        $entityManager->flush();

        $genre1 = new Genre;
        $genre1->setNom('Animation');
        $entityManager->persist($genre1);
        $entityManager->flush();

        $genre2 = new Genre;
        $genre2->setNom('Policier');
        $entityManager->persist($genre2);
        $entityManager->flush();

        $genre3 = new Genre;
        $genre3->setNom('Drame');
        $entityManager->persist($genre3);
        $entityManager->flush();

        $genre4 = new Genre;
        $genre4->setNom('Comédie');
        $entityManager->persist($genre4);
        $entityManager->flush();

        $genre5 = new Genre;
        $genre5->setNom('X');
        $entityManager->persist($genre5);
        $entityManager->flush();

        $genre6 = new Genre;
        $genre6->setNom('Romance');
        $entityManager->persist($genre6);
        $entityManager->flush();

        $genre7 = new Genre;
        $genre7->setNom('Action');
        $entityManager->persist($genre7);
        $entityManager->flush();

        $genre8 = new Genre;
        $genre8->setNom('Aventure');
        $entityManager->persist($genre8);
        $entityManager->flush();

        $genre9 = new Genre;
        $genre9->setNom('Fantastique');
        $entityManager->persist($genre9);
        $entityManager->flush();

        $genre10 = new Genre;
        $genre10->setNom('Epouvante-horreur');
        $entityManager->persist($genre10);
        $entityManager->flush();

        $genre11 = new Genre;
        $genre11->setNom('Biopic');
        $entityManager->persist($genre11);
        $entityManager->flush();

        $genre12 = new Genre;
        $genre12->setNom('Comédie dramatique');
        $entityManager->persist($genre12);
        $entityManager->flush();

        $genre13 = new Genre;
        $genre13->setNom('Guerre');
        $entityManager->persist($genre13);
        $entityManager->flush();

        $genre14 = new Genre;
        $genre14->setNom('Historique');
        $entityManager->persist($genre14);
        $entityManager->flush();

        $genre15 = new Genre;
        $genre15->setNom('Musical');
        $entityManager->persist($genre15);
        $entityManager->flush();

        $genre16 = new Genre;
        $genre16->setNom('Science Fiction');
        $entityManager->persist($genre16);
        $entityManager->flush();

        $genre17 = new Genre;
        $genre17->setNom('Thriller');
        $entityManager->persist($genre17);
        $entityManager->flush();

        $genre18 = new Genre;
        $genre18->setNom('Western');
        $entityManager->persist($genre18);
        $entityManager->flush();

        $acteur1 = new Acteur;
        $acteur1->setNomPrenom('Galabru Michel');
        $acteur1->setDateNaissance(\DateTime::createFromFormat('d/m/Y','21/09/2009'));
        $acteur1->setNationalite('France');

        $acteur2 = new Acteur;
        $acteur2->setNomPrenom('Deneuve Catherine');
        $acteur2->setDateNaissance(\DateTime::createFromFormat('d/m/Y','22/10/1943'));
        $acteur2->setNationalite('France');

        $acteur3 = new Acteur;
        $acteur3->setNomPrenom('Depardieu Gérard');
        $acteur3->setDateNaissance(\DateTime::createFromFormat('d/m/Y','27/12/1948'));
        $acteur3->setNationalite('Russie');

        $acteur4 = new Acteur;
        $acteur4->setNomPrenom('Lanvin Gérard');
        $acteur4->setDateNaissance(\DateTime::createFromFormat('d/m/Y','21/06/1950'));
        $acteur4->setNationalite('France');

        $acteur5 = new Acteur;
        $acteur5->setNomPrenom('Désiré Dupond');
        $acteur5->setDateNaissance(\DateTime::createFromFormat('d/m/Y','23/12/2001'));
        $acteur5->setNationalite('Groland');

        $acteur6 = new Acteur;
        $acteur6->setNomPrenom('Bale Christian');
        $acteur6->setDateNaissance(\DateTime::createFromFormat('d/m/Y','30/01/1974'));
        $acteur6->setNationalite('Royaume-Uni');

        $acteur7 = new Acteur;
        $acteur7->setNomPrenom('Ledger Heath');
        $acteur7->setDateNaissance(\DateTime::createFromFormat('d/m/Y','04/04/1979'));
        $acteur7->setNationalite('Australie');

        $acteur8 = new Acteur;
        $acteur8->setNomPrenom('Eckhart Aaron');
        $acteur8->setDateNaissance(\DateTime::createFromFormat('d/m/Y','12/04/1968'));
        $acteur8->setNationalite('Amérique');

        $acteur9 = new Acteur;
        $acteur9->setNomPrenom('Downey Jr. Robert');
        $acteur9->setDateNaissance(\DateTime::createFromFormat('d/m/Y','04/04/1965'));
        $acteur9->setNationalite('Amérique');

        $acteur10 = new Acteur;
        $acteur10->setNomPrenom('Hemsworth Chris');
        $acteur10->setDateNaissance(\DateTime::createFromFormat('d/m/Y','11/08/1983'));
        $acteur10->setNationalite('Australie');

        $acteur11 = new Acteur;
        $acteur11->setNomPrenom('Johansson Scarlett');
        $acteur11->setDateNaissance(\DateTime::createFromFormat('d/m/Y','22/11/1984'));
        $acteur11->setNationalite('Amérique');

        $acteur12 = new Acteur;
        $acteur12->setNomPrenom('Hardy Tom');
        $acteur12->setDateNaissance(\DateTime::createFromFormat('d/m/Y','15/09/1977'));
        $acteur12->setNationalite('Royaume-Uni');

        $acteur13 = new Acteur;
        $acteur13->setNomPrenom('Kidman Nicole');
        $acteur13->setDateNaissance(\DateTime::createFromFormat('d/m/Y','20/06/1967'));
        $acteur13->setNationalite('Australie');

        $acteur14 = new Acteur;
        $acteur14->setNomPrenom('Craig Daniel');
        $acteur14->setDateNaissance(\DateTime::createFromFormat('d/m/Y','02/03/1968'));
        $acteur14->setNationalite('Royaume-Uni');

        $acteur15 = new Acteur;
        $acteur15->setNomPrenom('Pattinson Robert');
        $acteur15->setDateNaissance(\DateTime::createFromFormat('d/m/Y','13/05/1986'));
        $acteur15->setNationalite('Royaume-Uni');

        $acteur16 = new Acteur;
        $acteur16->setNomPrenom('DiCaprio Leonardo');
        $acteur16->setDateNaissance(\DateTime::createFromFormat('d/m/Y','11/11/1974'));
        $acteur16->setNationalite('Amérique');

        $acteur17 = new Acteur;
        $acteur17->setNomPrenom('Smith Will');
        $acteur17->setDateNaissance(\DateTime::createFromFormat('d/m/Y','25/09/1968'));
        $acteur17->setNationalite('Amérique');

        $acteur18 = new Acteur;
        $acteur18->setNomPrenom('Pitt Brad');
        $acteur18->setDateNaissance(\DateTime::createFromFormat('d/m/Y','18/12/1963'));
        $acteur18->setNationalite('Amérique');

        $acteur19 = new Acteur;
        $acteur19->setNomPrenom('Robbie Margot');
        $acteur19->setDateNaissance(\DateTime::createFromFormat('d/m/Y','02/07/1990'));
        $acteur19->setNationalite('Australie');

        $acteur20 = new Acteur;
        $acteur20->setNomPrenom('Sy Omar');
        $acteur20->setDateNaissance(\DateTime::createFromFormat('d/m/Y','20/01/1978'));
        $acteur20->setNationalite('France');

        $acteur21 = new Acteur;
        $acteur21->setNomPrenom('Cruise Tom');
        $acteur21->setDateNaissance(\DateTime::createFromFormat('d/m/Y','03/07/1962'));
        $acteur21->setNationalite('Amérique');

        $acteur22 = new Acteur;
        $acteur22->setNomPrenom('Statham Jason');
        $acteur22->setDateNaissance(\DateTime::createFromFormat('d/m/Y','26/07/1967'));
        $acteur22->setNationalite('Royaume-Uni');

        $acteur23 = new Acteur;
        $acteur23->setNomPrenom('Depp Johnny');
        $acteur23->setDateNaissance(\DateTime::createFromFormat('d/m/Y','09/06/1963'));
        $acteur23->setNationalite('Amérique');

        $acteur24 = new Acteur;
        $acteur24->setNomPrenom('Johnson Dwayne');
        $acteur24->setDateNaissance(\DateTime::createFromFormat('d/m/Y','02/05/1972'));
        $acteur24->setNationalite('Amérique');

        $acteur25 = new Acteur;
        $acteur25->setNomPrenom('Washington Denzel');
        $acteur25->setDateNaissance(\DateTime::createFromFormat('d/m/Y','28/12/1954'));
        $acteur25->setNationalite('Amérique');

        $acteur26 = new Acteur;
        $acteur26->setNomPrenom('Willis Bruce');
        $acteur26->setDateNaissance(\DateTime::createFromFormat('d/m/Y','19/03/1955'));
        $acteur26->setNationalite('Amérique');

        $acteur27 = new Acteur;
        $acteur27->setNomPrenom('Dujardin Jean');
        $acteur27->setDateNaissance(\DateTime::createFromFormat('d/m/Y','19/06/1972'));
        $acteur27->setNationalite('France');

        $acteur28 = new Acteur;
        $acteur28->setNomPrenom('Lawrence Jennifer');
        $acteur28->setDateNaissance(\DateTime::createFromFormat('d/m/Y','15/08/1990'));
        $acteur28->setNationalite('Amérique');

        $acteur29 = new Acteur;
        $acteur29->setNomPrenom('Stallone Sylvester');
        $acteur29->setDateNaissance(\DateTime::createFromFormat('d/m/Y','06/07/1946'));
        $acteur29->setNationalite('Amérique');

        $acteur30 = new Acteur;
        $acteur30->setNomPrenom('Cotillard Marion');
        $acteur30->setDateNaissance(\DateTime::createFromFormat('d/m/Y','30/08/1975'));
        $acteur30->setNationalite('France');

        $acteur31 = new Acteur;
        $acteur31->setNomPrenom('Murphy Cillian');
        $acteur31->setDateNaissance(\DateTime::createFromFormat('d/m/Y','25/05/1976'));
        $acteur31->setNationalite('Irlande');

        $acteur32 = new Acteur;
        $acteur32->setNomPrenom('Vikander Alicia');
        $acteur32->setDateNaissance(\DateTime::createFromFormat('d/m/Y','03/08/1988'));
        $acteur32->setNationalite('Suéde');

        $acteur33 = new Acteur;
        $acteur33->setNomPrenom('Watson Emma');
        $acteur33->setDateNaissance(\DateTime::createFromFormat('d/m/Y','15/04/1990'));
        $acteur33->setNationalite('Royaume-Uni');

        $acteur34 = new Acteur;
        $acteur34->setNomPrenom('McAvoy James');
        $acteur34->setDateNaissance(\DateTime::createFromFormat('d/m/Y','21/04/1979'));
        $acteur34->setNationalite('Royaume-Uni');

        $acteur35 = new Acteur;
        $acteur35->setNomPrenom('de Funès Louis');
        $acteur35->setDateNaissance(\DateTime::createFromFormat('d/m/Y','31/07/1914'));
        $acteur35->setNationalite('France');

        $acteur36 = new Acteur;
        $acteur36->setNomPrenom('Stone Emma');
        $acteur36->setDateNaissance(\DateTime::createFromFormat('d/m/Y','06/11/1988'));
        $acteur36->setNationalite('Amérique');

        $acteur37 = new Acteur;
        $acteur37->setNomPrenom('Clavier Christan');
        $acteur37->setDateNaissance(\DateTime::createFromFormat('d/m/Y','06/05/1952'));
        $acteur37->setNationalite('France');

        $acteur38 = new Acteur;
        $acteur38->setNomPrenom('Carrey Jim');
        $acteur38->setDateNaissance(\DateTime::createFromFormat('d/m/Y','17/01/1962'));
        $acteur38->setNationalite('Canada');

        $acteur39 = new Acteur;
        $acteur39->setNomPrenom('Caine Michael');
        $acteur39->setDateNaissance(\DateTime::createFromFormat('d/m/Y','14/03/1933'));
        $acteur39->setNationalite('Royaume-Uni');

        $acteur40 = new Acteur;
        $acteur40->setNomPrenom('Theron Charlize');
        $acteur40->setDateNaissance(\DateTime::createFromFormat('d/m/Y','07/08/1975'));
        $acteur40->setNationalite('Afrique du Sud');

        $acteur41 = new Acteur;
        $acteur41->setNomPrenom('Freeman Morgan');
        $acteur41->setDateNaissance(\DateTime::createFromFormat('d/m/Y','01/06/1937'));
        $acteur41->setNationalite('Amérique');

        $acteur42 = new Acteur;
        $acteur42->setNomPrenom('Diesel Vin');
        $acteur42->setDateNaissance(\DateTime::createFromFormat('d/m/Y','18/07/1967'));
        $acteur42->setNationalite('Amérique');

        $acteur43 = new Acteur;
        $acteur43->setNomPrenom('Reno Jean');
        $acteur43->setDateNaissance(\DateTime::createFromFormat('d/m/Y','30/07/1948'));
        $acteur43->setNationalite('France');

        $acteur44 = new Acteur;
        $acteur44->setNomPrenom('Van Damme Jean-Claude');
        $acteur44->setDateNaissance(\DateTime::createFromFormat('d/m/Y','18/08/1960'));
        $acteur44->setNationalite('Belge');

        $acteur45 = new Acteur;
        $acteur45->setNomPrenom('Wahlberg Mark');
        $acteur45->setDateNaissance(\DateTime::createFromFormat('d/m/Y','05/06/1971'));
        $acteur45->setNationalite('Amérique');

        $acteur46 = new Acteur;
        $acteur46->setNomPrenom('Gordon-Levitt Joseph');
        $acteur46->setDateNaissance(\DateTime::createFromFormat('d/m/Y','17/02/1981'));
        $acteur46->setNationalite('Amérique');

        $acteur47 = new Acteur;
        $acteur47->setNomPrenom('Laurent Mélanie');
        $acteur47->setDateNaissance(\DateTime::createFromFormat('d/m/Y','21/02/1983'));
        $acteur47->setNationalite('France');

        $acteur48 = new Acteur;
        $acteur48->setNomPrenom('Cumberbatch Benedict');
        $acteur48->setDateNaissance(\DateTime::createFromFormat('d/m/Y','19/07/1976'));
        $acteur48->setNationalite('Royaume-Uni');

        $acteur49 = new Acteur;
        $acteur49->setNomPrenom('Jordan Michael B.');
        $acteur49->setDateNaissance(\DateTime::createFromFormat('d/m/Y','09/02/1987'));
        $acteur49->setNationalite('Amérique');

        $acteur50 = new Acteur;
        $acteur50->setNomPrenom('Hanks Tom');
        $acteur50->setDateNaissance(\DateTime::createFromFormat('d/m/Y','09/07/1956'));
        $acteur50->setNationalite('Amérique');

        $acteur51 = new Acteur;
        $acteur51->setNomPrenom('Neeson Liam');
        $acteur51->setDateNaissance(\DateTime::createFromFormat('d/m/Y','07/06/1952'));
        $acteur51->setNationalite('Irlande');


        $film1 = new Film;
        $film1->setTitre('Astérix aux jeux olympiques');
        $film1->setDuree(117);
        $film1->setDateSortie(\DateTime::createFromFormat('d/m/Y','20/01/2008'));
        $film1->setNote(8);
        $film1->setAgeMinimal(0);
        $film1->setGenre($genre1);

        $film2 = new Film;
        $film2->setTitre('Le Dernier Métro');
        $film2->setDuree(131);
        $film2->setDateSortie(\DateTime::createFromFormat('d/m/Y','17/09/1980'));
        $film2->setNote(15);
        $film2->setAgeMinimal(12);
        $film2->setGenre($genre3);
        $film2->addActeur($acteur2);
        $film2->addActeur($acteur3);

        $film3 = new Film;
        $film3->setTitre('le choix des armes');
        $film3->setDuree(135);
        $film3->setDateSortie(\DateTime::createFromFormat('d/m/Y', '19/10/1981'));
        $film3->setNote(13);
        $film3->setAgeMinimal(18);
        $film3->setGenre($genre2);
        $film3->addActeur($acteur2);
        $film3->addActeur($acteur3);
        $film3->addActeur($acteur4);

        $film4 = new Film;
        $film4->setTitre('Les Parapluies de Cherbourg');
        $film4->setDuree(91);
        $film4->setDateSortie(\DateTime::createFromFormat('d/m/Y', '19/02/1964'));
        $film4->setNote(9);
        $film4->setAgeMinimal(0);
        $film4->setGenre($genre3);
        $film4->addActeur($acteur2);

        $film5 = new Film;
        $film5->setTitre('La Guerre des boutons');
        $film5->setDuree(90);
        $film5->setDateSortie(\DateTime::createFromFormat('d/m/Y', '18/04/1962'));
        $film5->setNote(7);
        $film5->setAgeMinimal(0);
        $film5->setGenre($genre4);
        $film5->addActeur($acteur1);








        $film6 = new Film;
        $film6->setTitre('Batman Begins');
        $film6->setDuree(140);
        $film6->setDateSortie(\DateTime::createFromFormat('d/m/Y', '15/06/2005'));
        $film6->setNote(16);
        $film6->setAgeMinimal(10);
        $film6->setGenre($genre7);
        $film6->addActeur($acteur6);
        $film6->addActeur($acteur31);
        $film6->addActeur($acteur39);
        $film6->addActeur($acteur41);


        $film7 = new Film;
        $film7->setTitre('The Dark Knight, Le Chevalier Noir');
        $film7->setDuree(152);
        $film7->setDateSortie(\DateTime::createFromFormat('d/m/Y', '13/08/2008'));
        $film7->setNote(18);
        $film7->setAgeMinimal(10);
        $film7->setGenre($genre7);
        $film7->addActeur($acteur6);
        $film7->addActeur($acteur7);
        $film7->addActeur($acteur8);
        $film7->addActeur($acteur31);
        $film7->addActeur($acteur39);
        $film7->addActeur($acteur41);


        $film8 = new Film;
        $film8->setTitre('The Dark Knight Rises');
        $film8->setDuree(164);
        $film8->setDateSortie(\DateTime::createFromFormat('d/m/Y', '20/07/2012'));
        $film8->setNote(17);
        $film8->setAgeMinimal(10);
        $film8->setGenre($genre7);
        $film8->addActeur($acteur6);
        $film8->addActeur($acteur12);
        $film8->addActeur($acteur30);
        $film8->addActeur($acteur31);
        $film8->addActeur($acteur39);
        $film8->addActeur($acteur41);
        $film8->addActeur($acteur46);


        $film9 = new Film;
        $film9->setTitre('Le Prestige');
        $film9->setDuree(128);
        $film9->setDateSortie(\DateTime::createFromFormat('d/m/Y', '15/11/2006'));
        $film9->setNote(17);
        $film9->setAgeMinimal(10);
        $film9->setGenre($genre17);
        $film9->addActeur($acteur6);
        $film9->addActeur($acteur11);
        $film9->addActeur($acteur39);


        $film10 = new Film;
        $film10->setTitre('Avengers : Endgame');
        $film10->setDuree(181);
        $film10->setDateSortie(\DateTime::createFromFormat('d/m/Y', '24/04/2019'));
        $film10->setNote(17);
        $film10->setAgeMinimal(10);
        $film10->setGenre($genre9);
        $film10->addActeur($acteur9);
        $film10->addActeur($acteur10);
        $film10->addActeur($acteur11);


        $film11 = new Film;
        $film11->setTitre('Avengers : Infinity War');
        $film11->setDuree(156);
        $film11->setDateSortie(\DateTime::createFromFormat('d/m/Y', '25/04/2018'));
        $film11->setNote(17);
        $film11->setAgeMinimal(10);
        $film11->setGenre($genre9);
        $film11->addActeur($acteur9);
        $film11->addActeur($acteur10);
        $film11->addActeur($acteur11);
        $film11->addActeur($acteur48);


        $film12 = new Film;
        $film12->setTitre('Avengers : L\'ère d\'Ultron');
        $film12->setDuree(141);
        $film12->setDateSortie(\DateTime::createFromFormat('d/m/Y', '22/04/2015'));
        $film12->setNote(15);
        $film12->setAgeMinimal(10);
        $film12->setGenre($genre16);
        $film12->addActeur($acteur9);
        $film12->addActeur($acteur10);
        $film12->addActeur($acteur11);


        $film13 = new Film;
        $film13->setTitre('Avengers');
        $film13->setDuree(143);
        $film13->setDateSortie(\DateTime::createFromFormat('d/m/Y', '20/04/2012'));
        $film13->setNote(16);
        $film13->setAgeMinimal(0);
        $film13->setGenre($genre16);
        $film13->addActeur($acteur9);
        $film13->addActeur($acteur10);
        $film13->addActeur($acteur11);


        $film14 = new Film;
        $film14->setTitre('The Revenant');
        $film14->setDuree(156);
        $film14->setDateSortie(\DateTime::createFromFormat('d/m/Y', '24/04/2016'));
        $film14->setNote(16);
        $film14->setAgeMinimal(10);
        $film14->setGenre($genre18);
        $film14->addActeur($acteur12);
        $film14->addActeur($acteur16);


        $film15 = new Film;
        $film15->setTitre('Warrior');
        $film15->setDuree(140);
        $film15->setDateSortie(\DateTime::createFromFormat('d/m/Y', '14/09/2011'));
        $film15->setNote(16);
        $film15->setAgeMinimal(10);
        $film15->setGenre($genre7);
        $film15->addActeur($acteur12);


        $film16 = new Film;
        $film16->setTitre('Dunkerque');
        $film16->setDuree(107);
        $film16->setDateSortie(\DateTime::createFromFormat('d/m/Y', '19/07/2017'));
        $film16->setNote(15);
        $film16->setAgeMinimal(10);
        $film16->setGenre($genre13);
        $film16->addActeur($acteur12);
        $film16->addActeur($acteur31);


        $film17 = new Film;
        $film17->setTitre('Scandale');
        $film17->setDuree(109);
        $film17->setDateSortie(\DateTime::createFromFormat('d/m/Y', '22/01/2020'));
        $film17->setNote(14);
        $film17->setAgeMinimal(10);
        $film17->setGenre($genre11);
        $film17->addActeur($acteur13);
        $film17->addActeur($acteur19);
        $film17->addActeur($acteur40);


        $film18 = new Film;
        $film18->setTitre('Skyfall');
        $film18->setDuree(143);
        $film18->setDateSortie(\DateTime::createFromFormat('d/m/Y', '26/10/2012'));
        $film18->setNote(16);
        $film18->setAgeMinimal(10);
        $film18->setGenre($genre7);
        $film18->addActeur($acteur14);


        $film19 = new Film;
        $film19->setTitre('Casino Royale');
        $film19->setDuree(138);
        $film19->setDateSortie(\DateTime::createFromFormat('d/m/Y', '22/11/2006'));
        $film19->setNote(16);
        $film19->setAgeMinimal(10);
        $film19->setGenre($genre7);
        $film19->addActeur($acteur14);


        $film20 = new Film;
        $film20->setTitre('Tenet');
        $film20->setDuree(150);
        $film20->setDateSortie(\DateTime::createFromFormat('d/m/Y', '26/08/2020'));
        $film20->setNote(15);
        $film20->setAgeMinimal(10);
        $film20->setGenre($genre16);
        $film20->addActeur($acteur15);


        $film21 = new Film;
        $film21->setTitre('Le Loup de Wall Street');
        $film21->setDuree(179);
        $film21->setDateSortie(\DateTime::createFromFormat('d/m/Y', '25/12/2013'));
        $film21->setNote(16);
        $film21->setAgeMinimal(10);
        $film21->setGenre($genre3);
        $film21->addActeur($acteur16);
        $film21->addActeur($acteur19);


        $film22 = new Film;
        $film22->setTitre('Titanic');
        $film22->setDuree(194);
        $film22->setDateSortie(\DateTime::createFromFormat('d/m/Y', '07/01/1998'));
        $film22->setNote(16);
        $film22->setAgeMinimal(10);
        $film22->setGenre($genre6);
        $film22->addActeur($acteur16);


        $film23 = new Film;
        $film23->setTitre('Inception');
        $film23->setDuree(148);
        $film23->setDateSortie(\DateTime::createFromFormat('d/m/Y', '21/07/2010'));
        $film23->setNote(18);
        $film23->setAgeMinimal(10);
        $film23->setGenre($genre17);
        $film23->addActeur($acteur12);
        $film23->addActeur($acteur16);
        $film23->addActeur($acteur30);
        $film23->addActeur($acteur31);
        $film23->addActeur($acteur39);
        $film23->addActeur($acteur46);


        $film24 = new Film;
        $film24->setTitre('Django Unchained');
        $film24->setDuree(164);
        $film24->setDateSortie(\DateTime::createFromFormat('d/m/Y', '16/01/2013'));
        $film24->setNote(18);
        $film24->setAgeMinimal(10);
        $film24->setGenre($genre18);
        $film24->addActeur($acteur16);


        $film25 = new Film;
        $film25->setTitre('À la recherche du bonheur');
        $film25->setDuree(118);
        $film25->setDateSortie(\DateTime::createFromFormat('d/m/Y', '31/01/2007'));
        $film25->setNote(16);
        $film25->setAgeMinimal(10);
        $film25->setGenre($genre11);
        $film25->addActeur($acteur17);


        $film26 = new Film;
        $film26->setTitre('I, Robot');
        $film26->setDuree(115);
        $film26->setDateSortie(\DateTime::createFromFormat('d/m/Y', '28/07/2004'));
        $film26->setNote(15);
        $film26->setAgeMinimal(10);
        $film26->setGenre($genre16);
        $film26->addActeur($acteur17);


        $film27 = new Film;
        $film27->setTitre('Ali');
        $film27->setDuree(158);
        $film27->setDateSortie(\DateTime::createFromFormat('d/m/Y', '27/02/2002'));
        $film27->setNote(14);
        $film27->setAgeMinimal(10);
        $film27->setGenre($genre11);
        $film27->addActeur($acteur17);


        $film28 = new Film;
        $film28->setTitre('Seul contre tous');
        $film28->setDuree(123);
        $film28->setDateSortie(\DateTime::createFromFormat('d/m/Y', '09/03/2016'));
        $film28->setNote(15);
        $film28->setAgeMinimal(10);
        $film28->setGenre($genre3);
        $film28->addActeur($acteur17);


        $film29 = new Film;
        $film29->setTitre('Bad Boys');
        $film29->setDuree(119);
        $film29->setDateSortie(\DateTime::createFromFormat('d/m/Y', '05/07/1995'));
        $film29->setNote(13);
        $film29->setAgeMinimal(10);
        $film29->setGenre($genre2);
        $film29->addActeur($acteur17);


        $film30 = new Film;
        $film30->setTitre('Diversion');
        $film30->setDuree(105);
        $film30->setDateSortie(\DateTime::createFromFormat('d/m/Y', '25/03/2015'));
        $film30->setNote(13);
        $film30->setAgeMinimal(10);
        $film30->setGenre($genre17);
        $film30->addActeur($acteur17);
        $film30->addActeur($acteur19);


        $film31 = new Film;
        $film31->setTitre('Intouchables');
        $film31->setDuree(112);
        $film31->setDateSortie(\DateTime::createFromFormat('d/m/Y', '02/11/2011'));
        $film31->setNote(17);
        $film31->setAgeMinimal(10);
        $film31->setGenre($genre3);
        $film31->addActeur($acteur20);


        $film32 = new Film;
        $film32->setTitre('Le Chant du Loup');
        $film32->setDuree(116);
        $film32->setDateSortie(\DateTime::createFromFormat('d/m/Y', '20/02/2019'));
        $film32->setNote(17);
        $film32->setAgeMinimal(10);
        $film32->setGenre($genre13);
        $film32->addActeur($acteur20);


        $film33 = new Film;
        $film33->setTitre('Le Dernier samouraï');
        $film33->setDuree(144);
        $film33->setDateSortie(\DateTime::createFromFormat('d/m/Y', '14/01/2004'));
        $film33->setNote(15);
        $film33->setAgeMinimal(10);
        $film33->setGenre($genre14);
        $film33->addActeur($acteur21);


        $film34 = new Film;
        $film34->setTitre('Mission impossible');
        $film34->setDuree(110);
        $film34->setDateSortie(\DateTime::createFromFormat('d/m/Y', '23/10/1996'));
        $film34->setNote(13);
        $film34->setAgeMinimal(10);
        $film34->setGenre($genre7);
        $film34->addActeur($acteur21);


        $film35 = new Film;
        $film35->setTitre('Braquage à l\'italienne');
        $film35->setDuree(111);
        $film35->setDateSortie(\DateTime::createFromFormat('d/m/Y', '17/09/2003'));
        $film35->setNote(14);
        $film35->setAgeMinimal(10);
        $film35->setGenre($genre7);
        $film35->addActeur($acteur22);
        $film35->addActeur($acteur40);
        $film35->addActeur($acteur45);


        $film36 = new Film;
        $film36->setTitre('Homefront');
        $film36->setDuree(100);
        $film36->setDateSortie(\DateTime::createFromFormat('d/m/Y', '08/01/2014'));
        $film36->setNote(14);
        $film36->setAgeMinimal(10);
        $film36->setGenre($genre7);
        $film36->addActeur($acteur22);


        $film37 = new Film;
        $film37->setTitre('Le Transporteur');
        $film37->setDuree(92);
        $film37->setDateSortie(\DateTime::createFromFormat('d/m/Y', '23/10/2002'));
        $film37->setNote(12);
        $film37->setAgeMinimal(10);
        $film37->setGenre($genre7);
        $film37->addActeur($acteur22);


        $film38 = new Film;
        $film38->setTitre('Expendables : unité spéciale');
        $film38->setDuree(105);
        $film38->setDateSortie(\DateTime::createFromFormat('d/m/Y', '18/10/2010'));
        $film38->setNote(12);
        $film38->setAgeMinimal(10);
        $film38->setGenre($genre7);
        $film38->addActeur($acteur22);
        $film38->addActeur($acteur26);
        $film38->addActeur($acteur29);


        $film39 = new Film;
        $film39->setTitre('Pirates des Caraïbes : la Malédiction du Black Pearl');
        $film39->setDuree(143);
        $film39->setDateSortie(\DateTime::createFromFormat('d/m/Y', '13/08/2003'));
        $film39->setNote(16);
        $film39->setAgeMinimal(0);
        $film39->setGenre($genre9);
        $film39->addActeur($acteur23);


        $film40 = new Film;
        $film40->setTitre('Charlie et la chocolaterie');
        $film40->setDuree(105);
        $film40->setDateSortie(\DateTime::createFromFormat('d/m/Y', '13/08/2005'));
        $film40->setNote(15);
        $film40->setAgeMinimal(0);
        $film40->setGenre($genre9);
        $film40->addActeur($acteur23);


        $film41 = new Film;
        $film41->setTitre('Alice au Pays des Merveilles');
        $film41->setDuree(108);
        $film41->setDateSortie(\DateTime::createFromFormat('d/m/Y', '15/02/2003'));
        $film41->setNote(13);
        $film41->setAgeMinimal(0);
        $film41->setGenre($genre9);
        $film41->addActeur($acteur23);


        $film42 = new Film;
        $film42->setTitre('Fast & Furious : Hobbs & Shaw');
        $film42->setDuree(136);
        $film42->setDateSortie(\DateTime::createFromFormat('d/m/Y', '07/08/2019'));
        $film42->setNote(12);
        $film42->setAgeMinimal(10);
        $film42->setGenre($genre7);
        $film42->addActeur($acteur22);
        $film42->addActeur($acteur24);


        $film43 = new Film;
        $film43->setTitre('Fast and Furious 5');
        $film43->setDuree(120);
        $film43->setDateSortie(\DateTime::createFromFormat('d/m/Y', '04/05/2011'));
        $film43->setNote(15);
        $film43->setAgeMinimal(10);
        $film43->setGenre($genre7);
        $film43->addActeur($acteur24);
        $film43->addActeur($acteur42);


        $film44 = new Film;
        $film44->setTitre('Equalizer');
        $film44->setDuree(132);
        $film44->setDateSortie(\DateTime::createFromFormat('d/m/Y', '01/10/2014'));
        $film44->setNote(16);
        $film44->setAgeMinimal(10);
        $film44->setGenre($genre7);
        $film44->addActeur($acteur25);


        $film45 = new Film;
        $film45->setTitre('2 Guns');
        $film45->setDuree(109);
        $film45->setDateSortie(\DateTime::createFromFormat('d/m/Y', '25/09/2013'));
        $film45->setNote(13);
        $film45->setAgeMinimal(10);
        $film45->setGenre($genre7);
        $film45->addActeur($acteur25);
        $film45->addActeur($acteur45);


        $film46 = new Film;
        $film46->setTitre('Le Cinquième élément');
        $film46->setDuree(126);
        $film46->setDateSortie(\DateTime::createFromFormat('d/m/Y', '07/05/1997'));
        $film46->setNote(16);
        $film46->setAgeMinimal(10);
        $film46->setGenre($genre16);
        $film46->addActeur($acteur26);


        $film47 = new Film;
        $film47->setTitre('Piège de cristal');
        $film47->setDuree(126);
        $film47->setDateSortie(\DateTime::createFromFormat('d/m/Y', '21/09/1988'));
        $film47->setNote(16);
        $film47->setAgeMinimal(10);
        $film47->setGenre($genre7);
        $film47->addActeur($acteur26);


        $film48 = new Film;
        $film48->setTitre('The Artist');
        $film48->setDuree(114);
        $film48->setDateSortie(\DateTime::createFromFormat('d/m/Y', '12/10/2011'));
        $film48->setNote(15);
        $film48->setAgeMinimal(0);
        $film48->setGenre($genre6);
        $film48->addActeur($acteur27);


        $film49 = new Film;
        $film49->setTitre('Hunger Games');
        $film49->setDuree(142);
        $film49->setDateSortie(\DateTime::createFromFormat('d/m/Y', '21/03/2012'));
        $film49->setNote(15);
        $film49->setAgeMinimal(10);
        $film49->setGenre($genre7);
        $film49->addActeur($acteur28);


        $film50 = new Film;
        $film50->setTitre('Rambo');
        $film50->setDuree(97);
        $film50->setDateSortie(\DateTime::createFromFormat('d/m/Y', '02/03/1983'));
        $film50->setNote(14);
        $film50->setAgeMinimal(10);
        $film50->setGenre($genre7);
        $film50->addActeur($acteur29);


        $film51 = new Film;
        $film51->setTitre('Rocky');
        $film51->setDuree(119);
        $film51->setDateSortie(\DateTime::createFromFormat('d/m/Y', '23/03/1977'));
        $film51->setNote(16);
        $film51->setAgeMinimal(10);
        $film51->setGenre($genre7);
        $film51->addActeur($acteur29);


        $film52 = new Film;
        $film52->setTitre('Creed');
        $film52->setDuree(134);
        $film52->setDateSortie(\DateTime::createFromFormat('d/m/Y', '13/01/2016'));
        $film52->setNote(16);
        $film52->setAgeMinimal(10);
        $film52->setGenre($genre7);
        $film52->addActeur($acteur29);
        $film52->addActeur($acteur49);


        $film53 = new Film;
        $film53->setTitre('Ex Machina');
        $film53->setDuree(108);
        $film53->setDateSortie(\DateTime::createFromFormat('d/m/Y', '03/06/2015'));
        $film53->setNote(15);
        $film53->setAgeMinimal(10);
        $film53->setGenre($genre16);
        $film53->addActeur($acteur32);


        $film54 = new Film;
        $film54->setTitre('Harry Potter à l\'école des sorciers');
        $film54->setDuree(152);
        $film54->setDateSortie(\DateTime::createFromFormat('d/m/Y', '05/12/2001'));
        $film54->setNote(16);
        $film54->setAgeMinimal(10);
        $film54->setGenre($genre9);
        $film54->addActeur($acteur33);


        $film55 = new Film;
        $film55->setTitre('Split');
        $film55->setDuree(117);
        $film55->setDateSortie(\DateTime::createFromFormat('d/m/Y', '22/02/2017'));
        $film55->setNote(16);
        $film55->setAgeMinimal(16);
        $film55->setGenre($genre10);
        $film55->addActeur($acteur34);


        $film56 = new Film;
        $film56->setTitre('La Grande Vadrouille');
        $film56->setDuree(132);
        $film56->setDateSortie(\DateTime::createFromFormat('d/m/Y', '08/12/1966'));
        $film56->setNote(16);
        $film56->setAgeMinimal(10);
        $film56->setGenre($genre4);
        $film56->addActeur($acteur35);


        $film57 = new Film;
        $film57->setTitre('Les Aventures de Rabbi Jacob');
        $film57->setDuree(97);
        $film57->setDateSortie(\DateTime::createFromFormat('d/m/Y', '18/10/1973'));
        $film57->setNote(16);
        $film57->setAgeMinimal(10);
        $film57->setGenre($genre4);
        $film57->addActeur($acteur35);


        $film58 = new Film;
        $film58->setTitre('Le Grand restaurant');
        $film58->setDuree(88);
        $film58->setDateSortie(\DateTime::createFromFormat('d/m/Y', '09/09/1966'));
        $film58->setNote(15);
        $film58->setAgeMinimal(10);
        $film58->setGenre($genre4);
        $film58->addActeur($acteur35);


        $film59 = new Film;
        $film59->setTitre('Le Gendarme de Saint-Tropez');
        $film59->setDuree(95);
        $film59->setDateSortie(\DateTime::createFromFormat('d/m/Y', '09/09/1964'));
        $film59->setNote(14);
        $film59->setAgeMinimal(10);
        $film59->setGenre($genre4);
        $film59->addActeur($acteur35);


        $film60 = new Film;
        $film60->setTitre('Hibernatus');
        $film60->setDuree(78);
        $film60->setDateSortie(\DateTime::createFromFormat('d/m/Y', '10/09/1969'));
        $film60->setNote(14);
        $film60->setAgeMinimal(10);
        $film60->setGenre($genre4);
        $film60->addActeur($acteur35);


        $film61 = new Film;
        $film61->setTitre('The Amazing Spider-Man');
        $film61->setDuree(137);
        $film61->setDateSortie(\DateTime::createFromFormat('d/m/Y', '04/07/2012'));
        $film61->setNote(16);
        $film61->setAgeMinimal(10);
        $film61->setGenre($genre9);
        $film61->addActeur($acteur36);


        $film62 = new Film;
        $film62->setTitre('The Amazing Spider-Man : le destin d\'un Héros');
        $film62->setDuree(142);
        $film62->setDateSortie(\DateTime::createFromFormat('d/m/Y', '16/04/2014'));
        $film62->setNote(15);
        $film62->setAgeMinimal(10);
        $film62->setGenre($genre9);
        $film62->addActeur($acteur36);


        $film63 = new Film;
        $film63->setTitre('Les Visiteurs');
        $film63->setDuree(105);
        $film63->setDateSortie(\DateTime::createFromFormat('d/m/Y', '27/01/1993'));
        $film63->setNote(15);
        $film63->setAgeMinimal(10);
        $film63->setGenre($genre4);
        $film63->addActeur($acteur37);
        $film63->addActeur($acteur43);


        $film64 = new Film;
        $film64->setTitre('Qu\'est-ce qu\'on a fait au Bon Dieu?');
        $film64->setDuree(97);
        $film64->setDateSortie(\DateTime::createFromFormat('d/m/Y', '16/04/2014'));
        $film64->setNote(16);
        $film64->setAgeMinimal(10);
        $film64->setGenre($genre4);
        $film64->addActeur($acteur37);


        $film65 = new Film;
        $film65->setTitre('The Mask');
        $film65->setDuree(100);
        $film65->setDateSortie(\DateTime::createFromFormat('d/m/Y', '26/10/1994'));
        $film65->setNote(16);
        $film65->setAgeMinimal(0);
        $film65->setGenre($genre4);
        $film65->addActeur($acteur38);


        $film66 = new Film;
        $film66->setTitre('Les Evadés');
        $film66->setDuree(140);
        $film66->setDateSortie(\DateTime::createFromFormat('d/m/Y', '01/03/1995'));
        $film66->setNote(17);
        $film66->setAgeMinimal(10);
        $film66->setGenre($genre3);
        $film66->addActeur($acteur41);

        $film67 = new Film;
        $film67->setTitre('Lucy');
        $film67->setDuree(89);
        $film67->setDateSortie(\DateTime::createFromFormat('d/m/Y', '06/08/2014'));
        $film67->setNote(12);
        $film67->setAgeMinimal(10);
        $film67->setGenre($genre16);
        $film67->addActeur($acteur41);
        $film67->addActeur($acteur11);

        $film68 = new Film;
        $film68->setTitre('Shooter tireur d\'élite');
        $film68->setDuree(124);
        $film68->setDateSortie(\DateTime::createFromFormat('d/m/Y', '18/04/2007'));
        $film68->setNote(14);
        $film68->setAgeMinimal(10);
        $film68->setGenre($genre7);
        $film68->addActeur($acteur45);

        $film69 = new Film;
        $film69->setTitre('Contrebande');
        $film69->setDuree(111);
        $film69->setDateSortie(\DateTime::createFromFormat('d/m/Y', '16/05/2012'));
        $film69->setNote(12);
        $film69->setAgeMinimal(10);
        $film69->setGenre($genre17);
        $film69->addActeur($acteur45);

        $film70 = new Film;
        $film70->setTitre('Inglourious Basterds');
        $film70->setDuree(153);
        $film70->setDateSortie(\DateTime::createFromFormat('d/m/Y', '19/08/2009'));
        $film70->setNote(16);
        $film70->setAgeMinimal(12);
        $film70->setGenre($genre13);
        $film70->addActeur($acteur47);
        $film70->addActeur($acteur18);

        $film71 = new Film;
        $film71->setTitre('12 Years a Slave');
        $film71->setDuree(132);
        $film71->setDateSortie(\DateTime::createFromFormat('d/m/Y', '22/01/2014'));
        $film71->setNote(16);
        $film71->setAgeMinimal(10);
        $film71->setGenre($genre14);
        $film71->addActeur($acteur48);
        $film71->addActeur($acteur18);

        $film72 = new Film;
        $film72->setTitre('Imitation Game');
        $film72->setDuree(115);
        $film72->setDateSortie(\DateTime::createFromFormat('d/m/Y', '28/01/2015'));
        $film72->setNote(16);
        $film72->setAgeMinimal(10);
        $film72->setGenre($genre11);
        $film72->addActeur($acteur48);

        $film73 = new Film;
        $film73->setTitre('Rush');
        $film73->setDuree(123);
        $film73->setDateSortie(\DateTime::createFromFormat('d/m/Y', '25/09/2013'));
        $film73->setNote(16);
        $film73->setAgeMinimal(0);
        $film73->setGenre($genre11);
        $film73->addActeur($acteur10);

        $film74 = new Film;
        $film74->setTitre('Zootopie');
        $film74->setDuree(108);
        $film74->setDateSortie(\DateTime::createFromFormat('d/m/Y', '17/02/2016'));
        $film74->setNote(16);
        $film74->setAgeMinimal(0);
        $film74->setGenre($genre1);

        $film75 = new Film;
        $film75->setTitre('Le Pôle Express');
        $film75->setDuree(108);
        $film75->setDateSortie(\DateTime::createFromFormat('d/m/Y', '01/12/2004'));
        $film75->setNote(15);
        $film75->setAgeMinimal(0);
        $film75->setGenre($genre1);

        $film76 = new Film;
        $film76->setTitre('Le Roi Lion');
        $film76->setDuree(89);
        $film76->setDateSortie(\DateTime::createFromFormat('d/m/Y', '23/11/1994'));
        $film76->setNote(18);
        $film76->setAgeMinimal(0);
        $film76->setGenre($genre1);

        $film77 = new Film;
        $film77->setTitre('Whiplash');
        $film77->setDuree(107);
        $film77->setDateSortie(\DateTime::createFromFormat('d/m/Y', '24/12/2014'));
        $film77->setNote(16);
        $film77->setAgeMinimal(0);
        $film77->setGenre($genre15);

        $film78 = new Film;
        $film78->setTitre('Madagascar');
        $film78->setDuree(86);
        $film78->setDateSortie(\DateTime::createFromFormat('d/m/Y', '22/06/2005'));
        $film78->setNote(15);
        $film78->setAgeMinimal(0);
        $film78->setGenre($genre1);

        $film79 = new Film;
        $film79->setTitre('Le Château ambulant');
        $film79->setDuree(119);
        $film79->setDateSortie(\DateTime::createFromFormat('d/m/Y', '12/01/2005'));
        $film79->setNote(15);
        $film79->setAgeMinimal(0);
        $film79->setGenre($genre1);

        $film80 = new Film;
        $film80->setTitre('La Plateforme');
        $film80->setDuree(94);
        $film80->setDateSortie(\DateTime::createFromFormat('d/m/Y', '20/03/2020'));
        $film80->setNote(12);
        $film80->setAgeMinimal(16);
        $film80->setGenre($genre10);

        $film81 = new Film;
        $film81->setTitre('Mulan');
        $film81->setDuree(115);
        $film81->setDateSortie(\DateTime::createFromFormat('d/m/Y', '20/11/2020'));
        $film81->setNote(10);
        $film81->setAgeMinimal(10);
        $film81->setGenre($genre8);

        $film82 = new Film;
        $film82->setTitre('Sonic le film');
        $film82->setDuree(99);
        $film82->setDateSortie(\DateTime::createFromFormat('d/m/Y', '12/02/2020'));
        $film82->setNote(12);
        $film82->setAgeMinimal(0);
        $film82->setGenre($genre8);

        $entityManager->persist($acteur1);
        $entityManager->persist($acteur2);
        $entityManager->persist($acteur3);
        $entityManager->persist($acteur4);
        $entityManager->persist($acteur5);
        $entityManager->persist($acteur6);
        $entityManager->persist($acteur7);
        $entityManager->persist($acteur8);
        $entityManager->persist($acteur9);
        $entityManager->persist($acteur10);
        $entityManager->persist($acteur11);
        $entityManager->persist($acteur12);
        $entityManager->persist($acteur13);
        $entityManager->persist($acteur14);
        $entityManager->persist($acteur15);
        $entityManager->persist($acteur16);
        $entityManager->persist($acteur17);
        $entityManager->persist($acteur18);
        $entityManager->persist($acteur19);
        $entityManager->persist($acteur20);
        $entityManager->persist($acteur21);
        $entityManager->persist($acteur22);
        $entityManager->persist($acteur23);
        $entityManager->persist($acteur24);
        $entityManager->persist($acteur25);
        $entityManager->persist($acteur26);
        $entityManager->persist($acteur27);
        $entityManager->persist($acteur28);
        $entityManager->persist($acteur29);
        $entityManager->persist($acteur30);
        $entityManager->persist($acteur31);
        $entityManager->persist($acteur32);
        $entityManager->persist($acteur33);
        $entityManager->persist($acteur34);
        $entityManager->persist($acteur35);
        $entityManager->persist($acteur36);
        $entityManager->persist($acteur37);
        $entityManager->persist($acteur38);
        $entityManager->persist($acteur39);
        $entityManager->persist($acteur40);
        $entityManager->persist($acteur41);
        $entityManager->persist($acteur42);
        $entityManager->persist($acteur43);
        $entityManager->persist($acteur44);
        $entityManager->persist($acteur45);
        $entityManager->persist($acteur46);
        $entityManager->persist($acteur47);
        $entityManager->persist($acteur48);
        $entityManager->persist($acteur49);
        $entityManager->persist($acteur50);
        $entityManager->persist($acteur51);

        $entityManager->persist($film1);
        $entityManager->persist($film2);
        $entityManager->persist($film3);
        $entityManager->persist($film4);
        $entityManager->persist($film5);
        $entityManager->persist($film6);
        $entityManager->persist($film7);
        $entityManager->persist($film8);
        $entityManager->persist($film9);
        $entityManager->persist($film10);
        $entityManager->persist($film11);
        $entityManager->persist($film12);
        $entityManager->persist($film13);
        $entityManager->persist($film14);
        $entityManager->persist($film15);
        $entityManager->persist($film16);
        $entityManager->persist($film17);
        $entityManager->persist($film18);
        $entityManager->persist($film19);
        $entityManager->persist($film20);
        $entityManager->persist($film21);
        $entityManager->persist($film22);
        $entityManager->persist($film23);
        $entityManager->persist($film24);
        $entityManager->persist($film25);
        $entityManager->persist($film26);
        $entityManager->persist($film27);
        $entityManager->persist($film28);
        $entityManager->persist($film29);
        $entityManager->persist($film30);
        $entityManager->persist($film31);
        $entityManager->persist($film32);
        $entityManager->persist($film33);
        $entityManager->persist($film34);
        $entityManager->persist($film35);
        $entityManager->persist($film36);
        $entityManager->persist($film37);
        $entityManager->persist($film38);
        $entityManager->persist($film39);
        $entityManager->persist($film40);
        $entityManager->persist($film41);
        $entityManager->persist($film42);
        $entityManager->persist($film43);
        $entityManager->persist($film44);
        $entityManager->persist($film45);
        $entityManager->persist($film46);
        $entityManager->persist($film47);
        $entityManager->persist($film48);
        $entityManager->persist($film49);
        $entityManager->persist($film50);
        $entityManager->persist($film51);
        $entityManager->persist($film52);
        $entityManager->persist($film53);
        $entityManager->persist($film54);
        $entityManager->persist($film55);
        $entityManager->persist($film56);
        $entityManager->persist($film57);
        $entityManager->persist($film58);
        $entityManager->persist($film59);
        $entityManager->persist($film60);
        $entityManager->persist($film61);
        $entityManager->persist($film62);
        $entityManager->persist($film63);
        $entityManager->persist($film64);
        $entityManager->persist($film65);
        $entityManager->persist($film66);
        $entityManager->persist($film67);
        $entityManager->persist($film68);
        $entityManager->persist($film69);
        $entityManager->persist($film70);
        $entityManager->persist($film71);
        $entityManager->persist($film72);
        $entityManager->persist($film73);
        $entityManager->persist($film74);
        $entityManager->persist($film75);
        $entityManager->persist($film76);
        $entityManager->persist($film77);
        $entityManager->persist($film78);
        $entityManager->persist($film79);
        $entityManager->persist($film80);
        $entityManager->persist($film81);
        $entityManager->persist($film82);

        $entityManager->flush();

        $nbrActor = $entityManager->getRepository(Acteur::class)->count([]);
        $nbrMovie = $entityManager->getRepository(Film::class)->count([]);
        $nbrGenre = $entityManager->getRepository(Genre::class)->count([]);

        $this->addFlash('success', 'La base de donnée a été initialisée avec succès ('.$nbrActor.' acteurs, '.$nbrMovie.' films et '.$nbrGenre.' genres)');

        return $this->redirectToRoute('index');

    }
}

