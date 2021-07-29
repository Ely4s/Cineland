<?php
namespace App\Controller;
use App\Entity\Genre;
use App\Factory\ContainerWithTitleFactory;
use App\Factory\EntitiesOnFieldResultFactory;
use App\Factory\LinkCardsFactory;
use App\Form\GenreAddType;
use App\Form\GenreRemoveType;
use App\Form\GenreSelectType;
use App\Form\GenreUpdateType;
use App\Repository\GenreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GenreController extends AbstractController
{
    private $entityManager;
    private $repository;

    public function __construct(EntityManagerInterface $entityManager, GenreRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    public function menu()
    {
        LinkCardsFactory::add($linkCards,'Ajouter un genre', null, 'genresAdd');
        LinkCardsFactory::add($linkCards,'Afficher les genres', null, 'genresShowAll');
        LinkCardsFactory::add($linkCards,'Gérer un genre',null, 'genresSelect');

        ContainerWithTitleFactory::new($containerWithTitle, "Genres");

        return $this->render('pageTemplate/menu.html.twig', array
        (
            "linkCards" => $linkCards,
            "containerWithTitle" => $containerWithTitle
        ));
    }

    public function select(Request $request)
    {
        $form = $this->createForm(GenreSelectType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            return $this->redirectToRoute('genreActions', ['nom' => $form->get('nom')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, "Sélectioner un genre");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    public function actions($nom)
    {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findOneBy(['nom'=>$nom]);
        if(!$genre) throw new NotFoundHttpException();

        LinkCardsFactory::add($linkCards,'Modifier le genre', null, 'genreUpdate',["nom"=>$nom]);
        LinkCardsFactory::add($linkCards,'Supprimer le genre',null, 'genreRemove',["nom"=>$nom]);
        LinkCardsFactory::add($linkCards,'Afficher les films de ce genre',null, 'genreShowFilmIn',["nom"=>$nom]);
        LinkCardsFactory::add($linkCards,'Afficher la moyenne des durées des films de ce genre',null, 'genreShowAvgOfFilmDureeIn',["nom"=>$nom]);

        ContainerWithTitleFactory::new($containerWithTitle, $nom);

        return $this->render('pageTemplate/menu.html.twig', array
        (
            "linkCards" => $linkCards,
            "containerWithTitle" => $containerWithTitle
        ));
    }

    /* Action 2 : ajouter un genre.
 	 * Création et affichage d'un formulaire d'ajout de genres.
 	 * Enregistrement des informations saisies par l'utilisateur dans la base de donnees après validation de celles-ci.
 	 * Redirection de l'utilisateur vers la page avant l'action.
 	 */
    public function add(Request $request)
    {
        $genre = new Genre();
        $form= $this->createForm(GenreAddType::class,$genre);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($genre);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le genre "'.$genre->getNom().'" a été ajouté avec succès');

            return $this->redirectToRoute('genreActions', ['nom' => $form->get('nom')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, 'Ajouter un genre');

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 6 :  modifier un genre.
	 * Récuperation des données d'un genre depuis la base de données à partir de nom
	 * Création et affichage d'un formulaire de modification de genre.
	 * Enregistrement des modifications saisies par l'utilisateur dans la base de données après validation de celles-ci.
	 * Redirection de l'utilisateur vers la page avant l'action.
	 */
    public function update(Request $request, $nom)
    {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findOneBy(['nom'=>$nom]);
        if(!$genre) throw new NotFoundHttpException();

        $form = $this->createForm(GenreUpdateType::class,$genre);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->persist($genre);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le genre "'.$nom.'" a été modifié avec succès');

            return $this->redirectToRoute('genreActions', ['nom' => $form->get('nom')->getData()]);
        }

        ContainerWithTitleFactory::new($containerWithTitle, $nom." : Modifier");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 7 : supprimer un genre.
	 * Récuperation des données d'un genre depuis la base de données à partir de nom
	 * Suppression de ces données et mise a jour de la base de données.
	 * Redirection de l'utilisateur vers la page avant l'action.
	 */

    public function remove(Request $request, $nom)
    {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findOneBy(['nom'=>$nom]);
        if(!$genre) throw new NotFoundHttpException();

        $form = $this->createForm(GenreRemoveType::class,$genre);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->entityManager->remove($genre);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le genre "'.$nom.'" a été supprimé avec succès');

            return $this->redirectToRoute('genresMenu');
        }

        ContainerWithTitleFactory::new($containerWithTitle, $nom." : Supprimer");

        return $this->render('pageTemplate/form.html.twig', ["containerWithTitle" => $containerWithTitle,"form"=>$form->createView()]);
    }

    /* Action 1 : lister tous les genres.
     * Récuperation de tous les genres depuis la base de données.
     * Affichage des données récuperées.
     */
    public function showAll()
    {
        $genres = $this->repository->findAll();

        ContainerWithTitleFactory::new($containerWithTitle, "Tout les genres");

        EntitiesOnFieldResultFactory::new($entitiesOneFieldResult,$genres,'genreActions','nom', "Aucun genre à afficher");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
            [
                "entitiesOneFieldResult" => $entitiesOneFieldResult,
                "containerWithTitle" => $containerWithTitle
            ]);
    }

    /* Action 22 : afficher la duree moyenne de tous les films d’un genre donné.
	 * Récuperation des données demandées par l'utilisateur depuis la base de données apres exécution d'une requête SQL relative à la récupération de celles-ci.
	 * Affichage de la moyenne des données récupérées.
	 */
    public function showAvgOfFilmDureeIn($nom)
    {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findOneBy(['nom'=>$nom]);
        if(!$genre) throw new NotFoundHttpException();

        $value = $this->repository->getAvgOfFilmDureeInOne($nom)[0]["1"];

        ContainerWithTitleFactory::new($containerWithTitle, $nom." : Moyenne des durées des films de ce genre");

        return $this->render('pageTemplate/valueResult.html.twig',
            [
                "containerWithTitle"=> $containerWithTitle,
                "value"=>round($value, 2),
                "label"=>"Moyenne"
            ]);
    }

    public function showFilmIn($nom)
    {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findOneBy(['nom'=>$nom]);
        if(!$genre) throw new NotFoundHttpException();

        $movies = $this->repository->getFilmIn($nom);

        ContainerWithTitleFactory::new($containerWithTitle, $nom." : Films");

        EntitiesOnFieldResultFactory::new($entitiesOneFieldResult,$movies,'filmActions','titre', "Aucun film à afficher");

        return $this->render('pageTemplate/entitiesOneFieldResult.html.twig',
            [
                "entitiesOneFieldResult" => $entitiesOneFieldResult,
                "containerWithTitle" => $containerWithTitle
            ]);
    }
}