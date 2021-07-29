<?php

namespace App\Controller;

use App\Entity\Film;
use App\Factory\ContainerWithTitleFactory;
use App\Factory\EntitiesOnFieldResultFactory;
use App\Factory\LinkCardsFactory;
use App\Form\FilmAddType;
use App\Form\FilmDateBetweenTwoType;
use App\Form\FilmDateInfToType;
use App\Form\FilmHaveTheseTwoActorsType;
use App\Form\FilmRemoveType;
use App\Form\FilmSearchType;
use App\Form\FilmSelectType;
use App\Form\FilmUpdateNoteType;
use App\Form\FilmUpdateType;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FilmController extends AbstractController
{
    private $entityManager;
    private $repository;

    public function __construct(EntityManagerInterface $entityManager, FilmRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    public function menu()
    {
        LinkCardsFactory::add($linkCards,'Ajouter un film', null, 'filmsAdd');
        LinkCardsFactory::add($linkCards,'Afficher les films',null, 'filmsShowAll');
        LinkCardsFactory::add($linkCards,'Gérer un film',null, 'filmsSelect');
        LinkCardsFactory::add($linkCards,'Afficher les films entre deux dates',null, 'filmsDateBetweenTwo');
        LinkCardsFactory::add($linkCards,'Afficher les films avant une date',null, 'filmsDateInfTo');
        LinkCardsFactory::add($linkCards,'Afficher les films où deux acteurs ont joués ensemble',null, 'filmsHaveTheseTwoActors');
        LinkCardsFactory::add($linkCards,'Rechercher un film',null, 'filmsSearch');

        ContainerWithTitleFactory::new($containerWithTitle, "Films");

        return $this->render('pageTemplate/menu.html.twig', array
        (
            "linkCards" => $linkCards,
            "containerWithTitle" => $containerWithTitle
        ));
    }

    public function select(Request $request)
    {
        $form = $this->createForm(FilmSelectType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            return $this->redirectToRoute('filmActions', ['titre' => $form->get('titre')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Sélectioner un film");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    public function actions($titre)
    {
        $movie = $this->repository->findOneBy(['titre'=>$titre]);
        if(!$movie) throw new NotFoundHttpException();

        LinkCardsFactory::add($linkCards,'Afficher le film', null, 'filmShowOne',["titre"=>$titre]);
        LinkCardsFactory::add($linkCards,'Modifier le film', null, 'filmUpdate',["titre"=>$titre]);
        LinkCardsFactory::add($linkCards,'Supprimer le film',null, 'filmRemove',["titre"=>$titre]);
        LinkCardsFactory::add($linkCards,'Augmenter/diminuer la note du film',null, 'filmUpdateNote',["titre"=>$titre]);
        LinkCardsFactory::add($linkCards,'Afficher les acteurs du film',null, 'filmShowActeurs',["titre"=>$titre]);

        ContainerWithTitleFactory::new($containerWithTitle, $titre);

        return $this->render('pageTemplate/menu.html.twig', array
        (
            "linkCards" => $linkCards,
            "containerWithTitle" => $containerWithTitle
        ));
    }

    /*Action 10 : ajouter un film.
 	 * Création et affichage d'un formulaire d'ajout de films.
 	 * Enregistrement des informations saisies par l'utilisateur dans la base de données apres validation de celles-ci.
 	 * Redirection de l'utilisateur vers la page avant l'action.
 	 */
    public function add(Request $request)
    {
        $movie = new Film();
        $form= $this->createForm(FilmAddType::class,$movie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($movie);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le film "'.$movie->getTitre().'" a été ajouté avec succès');

            return $this->redirectToRoute('filmActions', ['titre' => $form->get('titre')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Ajouter un film");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /*Action 11 :  modifier un film.
	 * Récuperation des données d'un film depuis la base de donnees à partir de titre
	 * Création et affichage d'un formulaire de modification de films.
	 * Enregistrement des modifications saisies par l'utilisateur dans la base de donnees apres validation de celles-ci.
	 * Redirection de l'utilisateur vers la page avant l'action.
	 */
    public function update(Request $request, $titre)
    {
        $movie = $this->getDoctrine()->getRepository(Film::class)->findOneBy(['titre'=>$titre]);
        if(!$movie) throw new NotFoundHttpException();

        $form = $this->createForm(FilmUpdateType::class,$movie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($movie);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le film "'.$titre.'" a été modifié avec succès');

            return $this->redirectToRoute('filmActions', ['titre' => $form->get('titre')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, $titre." : Modifier");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 12 : supprimer un film.
	 * Récuperation des données d'un acteur depuis la base de données a partir de titre
	 * Suppression de ces données et mise a jour de la base de données.
	 * Redirection de l'utilisateur vers la page avant l'action.
	 */
    public function remove(Request $request, $titre)
    {
        $movie = $this->getDoctrine()->getRepository(Film::class)->findOneBy(['titre'=>$titre]);
        if(!$movie) throw new NotFoundHttpException();

        $form = $this->createForm(FilmRemoveType::class,$movie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->remove($movie);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le film "'.$titre.'" a été supprimé avec succès');

            return $this->redirectToRoute('filmsMenu');
        }

        ContainerWithTitleFactory::new($containerWithTitle, $titre." : Supprimer");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 23 : augmenter ou diminuer la note d’un film.
     * Creation et affichage d'un formulaire permettant à l'utilisateur de saisir la valeur à ajouter/retirer de la note d'un film
     * Enregistrement des modifications saisies par l'utilisateur dans la base de données apràs validation de celles-ci.
	 * Redirection de l'utilisateur vers la page avant l'action.
     */
    public function updateNote(Request $request, $titre)
    {
        $movie = $this->getDoctrine()->getRepository(Film::class)->findOneBy(['titre'=>$titre]);
        if(!$movie) throw new NotFoundHttpException();

        $form = $this->createForm(FilmUpdateNoteType::class,$movie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($movie);
            $this->entityManager->flush();

            $this->addFlash('success', 'La note du film "'.$titre.'" a été modifié avec succès');

            return $this->redirectToRoute('filmActions', ['titre' => $titre]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, $titre." : Augmenter/diminuer la note");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 8 : lister tous les films.
     * Récuperation de tous les films depuis la base de données.
     * Affichage des données recuperées.
     */
    public function showAll()
    {
        $movies = $this->repository->findAll();

        ContainerWithTitleFactory::new($containerWithTitle, "Tous les films");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $movies, 'filmActions','titre', "Aucun film à afficher");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
            [
                "containerWithTitle" => $containerWithTitle,
                "form" => null,
                "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
            ]);
    }

    /* Action 9 : afficher les details d’un film donné (i.e., titre, duree, date de sortie, note, age minimal, le genre ainsi que les acteurs ayant joué un role dans le film).
 	 * Récuperation d'un film depuis la base de donnees à partir de son titre.
 	 * Affichage des données recuperées.
 	 */
    public function showOne($titre)
    {
        $movie = $this->repository->findOneBy(["titre"=>$titre]);
        if(!$movie) throw new NotFoundHttpException();

        ContainerWithTitleFactory::new($containerWithTitle, $titre." : Afficher");

        return $this->render('pageTemplate/filmsAllFieldsResult.html.twig',
        [
            "containerWithTitle" => $containerWithTitle,
            "movies" => [$movie],
        ]);
    }

    /*
     * Action 13 : : lister les films dont la date de sortie est comprise entre deux annees donnees.
     * Creation et affichage d'un formulaire permettant à l'utilisateur de saisir un intervalle de date.
     * Recuperation et affichage des donnees demandees par l'utilisateur depuis la base de donnees apres validation de celles-ci et execution d'une requête SQL relative à la récuperation de ces données.
     */
    public function dateBetweenTwo(Request $request)
    {
        $form = $this->createForm(FilmDateBetweenTwoType::class);

        $form->handleRequest($request);

        $movies = array();

        if($form->isSubmitted() && $form->isValid())
        {
            $dateInf = $form->get('dateSortieInf')->getData();
            $dateSup = $form->get('dateSortieSup')->getData();

            $movies = $this->repository->findByDateBetweenTwo($dateInf, $dateSup);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Films entre deux dates");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $movies, 'filmActions','titre', "Aucun film correspondant à la recherche");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
        [
            "containerWithTitle" => $containerWithTitle,
            "form" => $form->createView(),
            "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
        ]);
    }

    /* Action 14 :  lister les films dont la date de sortie est anterieure à une certaine date précise donnee.
     * Creation et affichage d'un formulaire permettant à l'utilisateur de saisir une date.
     * Recuperation et affichage des donnees demandees par l'utilisateur depuis la base de donnees apres validation de celles-ci et execution d'une requete SQL relative a la recuperation de ces donnees.
     */
    public function dateInfTo(Request $request)
    {
        $form = $this->createForm(FilmDateInfToType::class);

        $form->handleRequest($request);

        $movies = array();

        if($form->isSubmitted() && $form->isValid())
        {
            $date = $form->get('dateSortie')->getData();

            $movies = $this->repository->findByDateInfTo($date);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Films avant une date");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $movies, 'filmActions','titre', "Aucun film correspondant à la recherche");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
        [
            "containerWithTitle" => $containerWithTitle,
            "form" => $form->createView(),
            "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
        ]);
    }

    /* Action 17 : lister tous les films dans lesquels 2 acteurs donnes ont joue ensemble.
	 * Creation et affichage d'un formulaire permettant à l'utilisateur de saisir deux acteurs.
     * Recuperation et affichage des donnees demandees par l'utilisateur depuis la base de donnees apres execution d'une requete SQL relative a la recuperation de celles-ci.
	 */
    public function haveTheseTwoActors(Request $request)
    {
        $form = $this->createForm(FilmHaveTheseTwoActorsType::class);

        $form->handleRequest($request);

        $movies = array();

        if($form->isSubmitted() && $form->isValid())
        {
            $nomPrenom1 = $form->get('nomPrenom1')->getData();
            $nomPrenom2 = $form->get('nomPrenom2')->getData();

            $movies = $this->repository->findByHaveTheseTwoActors($nomPrenom1, $nomPrenom2);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Films dans lequel deux acteurs ont joués ensemble");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $movies, 'filmActions','titre', "Aucun film correspondant à la recherche");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
        [
            "containerWithTitle" => $containerWithTitle,
            "form" => $form->createView(),
            "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
        ]);
    }

    /* Action 25 : rechercher des films via une partie de titre.
	 * Creation et affichage d'un formulaire de recherche permettant à l'utilisateur de saisir un titre ou un mot clé.
	 * Récuperation et affichage des données demandees par l'utilisateur depuis la base de données apres validation de celles-ci et exécution d'une requête SQL relative à la récuperation de ces données.
	 */
    public function filmsSearch(Request $request)
    {
        $form = $this->createForm(FilmSearchType::class);

        $form->handleRequest($request);

        $movies = array();

        if($form->isSubmitted() && $form->isValid())
        {
            $titre = $form->get('titre')->getData();

            $movies = $this->repository->findByPartOfTitre($titre);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Rechercher un film");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $movies, 'filmActions','titre', "Aucun film correspondant à la recherche");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
        [
            "containerWithTitle" => $containerWithTitle,
            "form" => $form->createView(),
            "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
        ]);
    }

    /* Action 15 :  lister les acteurs ayant joué dans un film donné.
	 * Récuperation de tous les acteurs depuis la base de données à partir de titre.
	 * Affichage des données recuperées.
	 */
    public function showActeurs($titre)
    {
        $movie = $this->repository->findOneBy(["titre"=>$titre]);
        if(!$movie) throw new NotFoundHttpException();

        $actors = $movie->getActeurs();

        ContainerWithTitleFactory::new($containerWithTitle, $titre." : Acteurs");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $actors, 'acteurActions','nomPrenom', "Aucun acteur n'a joué dans ce film");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
        [
            "containerWithTitle" => $containerWithTitle,
            "form" => null,
            "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
        ]);
    }
}