<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'index' => [[], ['_controller' => 'App\\Controller\\CinelandController::index'], [], [['text', '/cineland/accueil']], [], []],
    'init' => [[], ['_controller' => 'App\\Controller\\CinelandController::init'], [], [['text', '/cineland/init']], [], []],
    'acteursMenu' => [[], ['_controller' => 'App\\Controller\\ActeurController::menu'], [], [['text', '/cineland/acteurs']], [], []],
    'acteursSelect' => [[], ['_controller' => 'App\\Controller\\ActeurController::select'], [], [['text', '/cineland/acteurs/selectioner']], [], []],
    'acteurActions' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::actions'], [], [['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'acteursAdd' => [[], ['_controller' => 'App\\Controller\\ActeurController::add'], [], [['text', '/cineland/acteurs/ajouter']], [], []],
    'acteurUpdate' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::update'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'acteurRemove' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::remove'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'acteurUpdateAgeMinimalAllFilms' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::updateAgeMinimalAllFilms'], [], [['text', '/modifierAgeMinimalDesFilms'], ['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'acteursShowAll' => [[], ['_controller' => 'App\\Controller\\ActeurController::showAll'], [], [['text', '/cineland/acteurs/voir']], [], []],
    'acteurShowOne' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::showOne'], [], [['text', '/voir'], ['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'acteursHaveCountFilmsGreaterEqualThree' => [[], ['_controller' => 'App\\Controller\\ActeurController::haveCountFilmsGreaterEqualThree'], [], [['text', '/cineland/acteurs/joueDansAuMoins3Films']], [], []],
    'acteursShowFilmsIfHave' => [[], ['_controller' => 'App\\Controller\\ActeurController::showFilmsIfHave'], [], [['text', '/cineland/acteurs/films']], [], []],
    'acteurShowGenreWhereIsTwice' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::showGenreWhereIsTwice'], [], [['text', '/voirGenreOuIlEstDeuxFois'], ['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'acteursShowGenreWhereActeurHaveFilmIn' => [[], ['_controller' => 'App\\Controller\\ActeurController::showGenreWhereActeursHaveFilmIn'], [], [['text', '/cineland/acteurs/voirLesGenres']], [], []],
    'acteurShowSumOfFilmDureeIn' => [['nomPrenom'], ['_controller' => 'App\\Controller\\ActeurController::showSumOfFilmDureeIn'], [], [['text', '/sommesDesDureesDesFilms'], ['variable', '/', '[^/]++', 'nomPrenom'], ['text', '/cineland/acteur']], [], []],
    'filmsMenu' => [[], ['_controller' => 'App\\Controller\\FilmController::menu'], [], [['text', '/cineland/films']], [], []],
    'filmsSelect' => [[], ['_controller' => 'App\\Controller\\FilmController::select'], [], [['text', '/cineland/films/selectioner']], [], []],
    'filmActions' => [['titre'], ['_controller' => 'App\\Controller\\FilmController::actions'], [], [['variable', '/', '[^/]++', 'titre'], ['text', '/cineland/film']], [], []],
    'filmsAdd' => [[], ['_controller' => 'App\\Controller\\FilmController::add'], [], [['text', '/cineland/films/ajouter']], [], []],
    'filmUpdate' => [['titre'], ['_controller' => 'App\\Controller\\FilmController::update'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'titre'], ['text', '/cineland/film']], [], []],
    'filmRemove' => [['titre'], ['_controller' => 'App\\Controller\\FilmController::remove'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'titre'], ['text', '/cineland/film']], [], []],
    'filmUpdateNote' => [['titre'], ['_controller' => 'App\\Controller\\FilmController::updateNote'], [], [['text', '/modifierNote'], ['variable', '/', '[^/]++', 'titre'], ['text', '/cineland/film']], [], []],
    'filmsShowAll' => [[], ['_controller' => 'App\\Controller\\FilmController::showAll'], [], [['text', '/cineland/films/voir']], [], []],
    'filmShowOne' => [['titre'], ['_controller' => 'App\\Controller\\FilmController::showOne'], [], [['text', '/voir'], ['variable', '/', '[^/]++', 'titre'], ['text', '/cineland/film']], [], []],
    'filmsDateBetweenTwo' => [[], ['_controller' => 'App\\Controller\\FilmController::dateBetweenTwo'], [], [['text', '/cineland/films/entreDeuxDates']], [], []],
    'filmsDateInfTo' => [[], ['_controller' => 'App\\Controller\\FilmController::dateInfTo'], [], [['text', '/cineland/films/avantUneDate']], [], []],
    'filmsHaveTheseTwoActors' => [[], ['_controller' => 'App\\Controller\\FilmController::haveTheseTwoActors'], [], [['text', '/cineland/films/avecSesDeuxActeurs']], [], []],
    'filmsSearch' => [[], ['_controller' => 'App\\Controller\\FilmController::filmsSearch'], [], [['text', '/cineland/films/rechercherUnFilm']], [], []],
    'filmShowActeurs' => [['titre'], ['_controller' => 'App\\Controller\\FilmController::showActeurs'], [], [['text', '/voirActeurs'], ['variable', '/', '[^/]++', 'titre'], ['text', '/cineland/film']], [], []],
    'genresMenu' => [[], ['_controller' => 'App\\Controller\\GenreController::menu'], [], [['text', '/cineland/genres']], [], []],
    'genresSelect' => [[], ['_controller' => 'App\\Controller\\GenreController::select'], [], [['text', '/cineland/genres/selectioner']], [], []],
    'genreActions' => [['nom'], ['_controller' => 'App\\Controller\\GenreController::actions'], [], [['variable', '/', '[^/]++', 'nom'], ['text', '/cineland/genre']], [], []],
    'genresAdd' => [[], ['_controller' => 'App\\Controller\\GenreController::add'], [], [['text', '/cineland/genres/ajouter']], [], []],
    'genreUpdate' => [['nom'], ['_controller' => 'App\\Controller\\GenreController::update'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'nom'], ['text', '/cineland/genre']], [], []],
    'genreRemove' => [['nom'], ['_controller' => 'App\\Controller\\GenreController::remove'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'nom'], ['text', '/cineland/genre']], [], []],
    'genresShowAll' => [[], ['_controller' => 'App\\Controller\\GenreController::showAll'], [], [['text', '/cineland/genres/voir']], [], []],
    'genreShowAvgOfFilmDureeIn' => [['nom'], ['_controller' => 'App\\Controller\\GenreController::showAvgOfFilmDureeIn'], [], [['text', '/moyenneDesDureeDesFilms'], ['variable', '/', '[^/]++', 'nom'], ['text', '/cineland/genre']], [], []],
    'genreShowFilmIn' => [['nom'], ['_controller' => 'App\\Controller\\GenreController::showFilmIn'], [], [['text', '/films'], ['variable', '/', '[^/]++', 'nom'], ['text', '/cineland/genre']], [], []],
];