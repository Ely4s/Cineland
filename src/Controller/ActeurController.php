<?php

namespace App\Controller;

use App\Entity\Acteur;
use App\Entity\Film;
use App\Factory\ContainerWithTitleFactory;
use App\Factory\EntitiesOnFieldResultFactory;
use App\Factory\LinkCardsFactory;
use App\Form\ActeurAddType;
use App\Form\ActeurRemoveType;
use App\Form\ActeurSelectType;
use App\Form\ActeurUpdateAgeMinimalAllFilmsType;
use App\Form\ActeurUpdateType;
use App\Repository\ActeurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ActeurController extends AbstractController
{
    private $entityManager;
    private $repository;

    public function __construct(EntityManagerInterface $entityManager, ActeurRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    public function menu()
    {
        LinkCardsFactory::add($linkCards,'Ajouter un acteur', null, 'acteursAdd');
        LinkCardsFactory::add($linkCards,'Afficher les acteurs',null, 'acteursShowAll');
        LinkCardsFactory::add($linkCards,'Gérer un acteur',null, 'acteursSelect');
        LinkCardsFactory::add($linkCards,'Afficher les acteurs ayant joués dans au moins 3 films',null, 'acteursHaveCountFilmsGreaterEqualThree');
        LinkCardsFactory::add($linkCards,'Afficher les acteurs et leurs films lorsqu\'ils en ont au moins 1',null, 'acteursShowFilmsIfHave');
        LinkCardsFactory::add($linkCards,'Afficher les acteurs et les genres où ils ont joué au moins un film',null, 'acteursShowGenreWhereActeurHaveFilmIn');

        ContainerWithTitleFactory::new($containerWithTitle, "Acteurs");

        return $this->render('pageTemplate/menu.html.twig',
            [
                "linkCards" => $linkCards,
                "containerWithTitle" => $containerWithTitle
            ]);
    }

    public function select(Request $request)
    {
        $form = $this->createForm(ActeurSelectType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            return $this->redirectToRoute('acteurActions', ['nomPrenom' => $form->get('nomPrenom')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Sélectionner un acteur");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    public function actions($nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);

        if(!$actor) throw new NotFoundHttpException();

        LinkCardsFactory::add($linkCards,'Afficher l\'acteur',null, 'acteurShowOne',["nomPrenom"=>$nomPrenom]);
        LinkCardsFactory::add($linkCards,'Modifier l\'acteur', null, 'acteurUpdate',["nomPrenom"=>$nomPrenom]);
        LinkCardsFactory::add($linkCards,'Supprimer l\'acteur',null, 'acteurRemove',["nomPrenom"=>$nomPrenom]);
        LinkCardsFactory::add($linkCards,'Augmenter l’âge minimal de tous les films où l\'acteur a joué',null, 'acteurUpdateAgeMinimalAllFilms',["nomPrenom"=>$nomPrenom]);
        LinkCardsFactory::add($linkCards,'Afficher les genres où l\'acteur a joué au moins 2 films',null, 'acteurShowGenreWhereIsTwice',["nomPrenom"=>$nomPrenom]);
        LinkCardsFactory::add($linkCards,'Afficher la sommes des durées des films de l\'acteur',null, 'acteurShowSumOfFilmDureeIn',["nomPrenom"=>$nomPrenom]);

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom);

        return $this->render('pageTemplate/menu.html.twig', array
        (
            "linkCards" => $linkCards,
            "containerWithTitle" => $containerWithTitle
        ));
    }

    /* Action 5 : ajouter un acteur.
 	 * Création et affichage d'un formulaire d'ajout d'acteurs.
 	 * Enregistrement des informations saisies par l'utilisateur dans la base de données apres validation de celles-ci.
 	 * Redirection de l'utilisateur vers la page avant l'action.
 	 */
    public function add(Request $request)
    {
        $actor = new Acteur();
        $form= $this->createForm(ActeurAddType::class,$actor);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($actor);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'acteur "'.$actor->getNomPrenom().'" a été ajouté avec succès');

            return $this->redirectToRoute('acteurActions', ['nomPrenom' => $form->get('nomPrenom')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Ajouter un acteur");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);

    }

    /* Action 6 : modifier un acteur.
	 * Recuperation des donnees d'un acteur depuis la base de données à partir d'un critère.
	 * Creation et affichage d'un formulaire de modification d'acteurs.
	 * Enregistrement des modifications saisies par l'utilisateur dans la base de données apràs validation de celles-ci.
	 * Redirection de l'utilisateur vers la page avant l'action.
	 */
    public function update(Request $request, $nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);

        if(!$actor) throw new NotFoundHttpException();

        $form = $this->createForm(ActeurUpdateType::class,$actor);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($actor);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'acteur "'.$nomPrenom.'" a été modifié avec succès');

            return $this->redirectToRoute('acteurActions', ['nomPrenom' => $form->get('nomPrenom')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom." : Modifier");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 7 : supprimer un acteur.
	 * Récuperation des données d'un acteur depuis la base de données a partir de nomPrenom.
	 * Suppression de ces données et mise a jour de la base de données.
	 * Redirection de l'utilisateur vers la page avant l'action.
	 */
    public function remove(Request $request, $nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);

        if(!$actor) throw new NotFoundHttpException();

        $form = $this->createForm(ActeurRemoveType::class,$actor);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->remove($actor);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'acteur "'.$nomPrenom.'" a été supprimé avec succès');

            return $this->redirectToRoute('acteursMenu');
        }

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom." : Supprimer");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 26 : Augmenter l’age minimal de tous les films dans lesquels à jouer un acteur donné: la valeur à ajouter sera soit une valeur explicitement renseignée, soit par defaut la valeur 1 dans le cas ou elle ne serait pas renseignée.
     * Creation et affichage d'un formulaire permettant à l'utilisateur de saisir la valeur à ajouter à l'âge minimal de tout les films de l'acteur
     * Enregistrement des modifications saisies par l'utilisateur dans la base de données apràs validation de celles-ci.
	 * Redirection de l'utilisateur vers la page avant l'action.
     */
    public function updateAgeMinimalAllFilms(Request $request, $nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);

        if(!$actor) throw new NotFoundHttpException();

        $form = $this->createForm(ActeurUpdateAgeMinimalAllFilmsType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $offset = $form->getData()['offset'];
            $min = 0;
            $max = count(Film::getAgeMinimalType())-1;

            foreach ($actor->getFilms() as $film)
            {
                $film->setAgeMinimal($film->getAgeMinimal()+$offset);
                if($film->getAgeMinimal() < $min) $film->setAgeMinimal($min);
                if($film->getAgeMinimal() > $max) $film->setAgeMinimal($max);
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'L\'augmentation de l\'âge minimal de tous les films où "'.$nomPrenom.'" a joué a été effectué avec succès');

            return $this->redirectToRoute('acteurActions', ['nomPrenom' => $nomPrenom]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom." : Augmenter l'âge minimal dans les films où l'acteur a joué");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 3 : lister tous les acteurs.
     * Récuperation de tous les acteurs depuis la base de données.
     * Affichage des données recuperées.
     */
    public function showAll()
    {
        $actors = $this->repository->findAll();

        ContainerWithTitleFactory::new($containerWithTitle, "Tous les acteurs");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $actors, 'acteurActions','nomPrenom', "Aucun acteur à afficher");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
            [
                "containerWithTitle" => $containerWithTitle,
                "entitiesOneFieldResult" => $entitiesOneFieldResultFactory
            ]);
    }

    /* Action 4 : afficher les details d’un acteur donné (i.e., nomPrenom, date de naissance, nationalité et les films dans lesquels il a joué).
 	 * Récuperation d'un acteur depuis la base de donnees à partir de son nomPrenom.
 	 * Affichage des données recuperées.
 	 */
    public function showOne($nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);

        if(!$actor) throw new NotFoundHttpException();

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom." : Afficher");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResultFactory, $actor, 'acteurActions','nomPrenom', "");

        return $this->render('pageTemplate/acteursAllFieldsResult.html.twig',
            [
                "containerWithTitle" => $containerWithTitle,
                "actors" => [$actor]
            ]);
    }

    /* Action 16 : lister les acteurs ayant joué dans au moins 3 films differents.
     * Récuperation et affichage des données demandées par l'utilisateur depuis la base de données apres execution d'une requete SQL relative a la recuperation de celles-ci.
     */
    public function haveCountFilmsGreaterEqualThree()
    {
        $actors = $this->repository->findByHaveCountFilmsGreaterOrEqualThanThree();

        ContainerWithTitleFactory::new($containerWithTitle, "Acteurs ayant joués dans au moins 3 films");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResult, $actors, 'acteurActions','nomPrenom', "Aucun acteur correspondant à la recherche");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
            [
                "containerWithTitle" => $containerWithTitle,
                "entitiesOneFieldResult" => $entitiesOneFieldResult
            ]);
    }

    /* Action 20 : afficher pour chaque acteur la liste des films dans lesquels il a joué dans l’ordre chronologique: un acteur n’ayant joué dans aucun film ne devra pas apparaitre dans cette liste.
	 * Récuperation et affichage des données demandees par l'utilisateur depuis la base de données après exécution d'une requête SQL relative à la récuperation de celles-ci.
	 */
    public function showFilmsIfHave()
    {
        $actors = $this->repository->findByHaveFilmOrderByDate();

        ContainerWithTitleFactory::new($containerWithTitle, 'Acteurs et leurs films lorsqu\'ils en ont au moins 1');

        EntitiesOnFieldResultFactory::new($entitiesOneFieldResult, $actors, 'acteurActions','nomPrenom', "Aucun acteur correspondant à la recherche");

        return $this->render('pageTemplate/acteursAllFieldsResult.html.twig',
            [
                'entitiesOneFieldResult' => $entitiesOneFieldResult,
                'containerWithTitle' => $containerWithTitle,
                'actors' => $actors,
                'onlyFilms' => true
            ]);
    }

    /* Action 18 : lister les genres pour lesquels un acteur donne a joue au moins 2 films.
	 * Récuperation et affichage des données demandées par l'utilisateur depuis la base de données apres exécution d'une requête SQL relative à la récuperation de celles-ci.
	 */
    public function showGenreWhereIsTwice($nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);

        if(!$actor) throw new NotFoundHttpException();

        $genres = $this->repository->findGenreByActeurHaveTwoFilmIn($nomPrenom);

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom." : Genres où l'acteur a joué au moins 2 films");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResult, $genres, 'genreActions','nom', "Aucun genre correspondant à la recherche");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
            [
                "containerWithTitle" => $containerWithTitle,
                "entitiesOneFieldResult" => $entitiesOneFieldResult
            ]);
    }

    /* Action 21 : afficher pour chaque acteur la liste des genres dans lesquels il a joué au moins un film.
	 * Récuperation et affichage des données demandées par l'utilisateur depuis la base de données apres exécution d'une requête SQL relative à la récuperation de celles-ci.
	 */
    public function showGenreWhereActeursHaveFilmIn()
    {
        $actors = $this->repository->findActeursGenresWhereActeursHaveFilmIn();

        ContainerWithTitleFactory::new($containerWithTitle, "Acteurs et genres où ils ont joué au moins un film");
        EntitiesOnFieldResultFactory::new($entitiesOneFieldResult, $actors, 'acteurActions','nomPrenom', "Aucun acteur correspondant à la recherche");

        return $this->render('pageTemplate/acteursFieldsGenreResult.html.twig',
            [
                'entitiesOneFieldResult' => $entitiesOneFieldResult,
                "containerWithTitle" => $containerWithTitle,
                "actors" => $actors
            ]);
    }

    /* Action 19 : afficher la duree en minutes de tous les films joues par un acteur donne.
	 * Récuperation des données demandées par l'utilisateur depuis la base de données apres exécution d'une requête SQL relative à la récupération de celles-ci.
	 * Affichage de la somme récupérées.
	*/
    public function showSumOfFilmDureeIn($nomPrenom)
    {
        $actor = $this->repository->findOneBy(['nomPrenom'=>$nomPrenom]);
        if(!$actor) throw new NotFoundHttpException();

        $value = $this->repository->getSumOfFilmDureeIn($nomPrenom)[0]["1"];

        ContainerWithTitleFactory::new($containerWithTitle, $nomPrenom.' : Sommes des durées des films où joue l\'acteur');

        return $this->render('pageTemplate/valueResult.html.twig',
            [
                "containerWithTitle"=> $containerWithTitle,
                "value"=>round($value, 2),
                "label"=>"Sommes"
            ]);
    }
}