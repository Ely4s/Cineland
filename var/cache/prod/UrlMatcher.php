<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cineland/accueil' => [[['_route' => 'index', '_controller' => 'App\\Controller\\CinelandController::index'], null, null, null, false, false, null]],
        '/cineland/init' => [[['_route' => 'init', '_controller' => 'App\\Controller\\CinelandController::init'], null, null, null, false, false, null]],
        '/cineland/acteurs' => [[['_route' => 'acteursMenu', '_controller' => 'App\\Controller\\ActeurController::menu'], null, null, null, false, false, null]],
        '/cineland/acteurs/selectioner' => [[['_route' => 'acteursSelect', '_controller' => 'App\\Controller\\ActeurController::select'], null, null, null, false, false, null]],
        '/cineland/acteurs/ajouter' => [[['_route' => 'acteursAdd', '_controller' => 'App\\Controller\\ActeurController::add'], null, null, null, false, false, null]],
        '/cineland/acteurs/voir' => [[['_route' => 'acteursShowAll', '_controller' => 'App\\Controller\\ActeurController::showAll'], null, null, null, false, false, null]],
        '/cineland/acteurs/joueDansAuMoins3Films' => [[['_route' => 'acteursHaveCountFilmsGreaterEqualThree', '_controller' => 'App\\Controller\\ActeurController::haveCountFilmsGreaterEqualThree'], null, null, null, false, false, null]],
        '/cineland/acteurs/films' => [[['_route' => 'acteursShowFilmsIfHave', '_controller' => 'App\\Controller\\ActeurController::showFilmsIfHave'], null, null, null, false, false, null]],
        '/cineland/acteurs/voirLesGenres' => [[['_route' => 'acteursShowGenreWhereActeurHaveFilmIn', '_controller' => 'App\\Controller\\ActeurController::showGenreWhereActeursHaveFilmIn'], null, null, null, false, false, null]],
        '/cineland/films' => [[['_route' => 'filmsMenu', '_controller' => 'App\\Controller\\FilmController::menu'], null, null, null, false, false, null]],
        '/cineland/films/selectioner' => [[['_route' => 'filmsSelect', '_controller' => 'App\\Controller\\FilmController::select'], null, null, null, false, false, null]],
        '/cineland/films/ajouter' => [[['_route' => 'filmsAdd', '_controller' => 'App\\Controller\\FilmController::add'], null, null, null, false, false, null]],
        '/cineland/films/voir' => [[['_route' => 'filmsShowAll', '_controller' => 'App\\Controller\\FilmController::showAll'], null, null, null, false, false, null]],
        '/cineland/films/entreDeuxDates' => [[['_route' => 'filmsDateBetweenTwo', '_controller' => 'App\\Controller\\FilmController::dateBetweenTwo'], null, null, null, false, false, null]],
        '/cineland/films/avantUneDate' => [[['_route' => 'filmsDateInfTo', '_controller' => 'App\\Controller\\FilmController::dateInfTo'], null, null, null, false, false, null]],
        '/cineland/films/avecSesDeuxActeurs' => [[['_route' => 'filmsHaveTheseTwoActors', '_controller' => 'App\\Controller\\FilmController::haveTheseTwoActors'], null, null, null, false, false, null]],
        '/cineland/films/rechercherUnFilm' => [[['_route' => 'filmsSearch', '_controller' => 'App\\Controller\\FilmController::filmsSearch'], null, null, null, false, false, null]],
        '/cineland/genres' => [[['_route' => 'genresMenu', '_controller' => 'App\\Controller\\GenreController::menu'], null, null, null, false, false, null]],
        '/cineland/genres/selectioner' => [[['_route' => 'genresSelect', '_controller' => 'App\\Controller\\GenreController::select'], null, null, null, false, false, null]],
        '/cineland/genres/ajouter' => [[['_route' => 'genresAdd', '_controller' => 'App\\Controller\\GenreController::add'], null, null, null, false, false, null]],
        '/cineland/genres/voir' => [[['_route' => 'genresShowAll', '_controller' => 'App\\Controller\\GenreController::showAll'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cineland/(?'
                    .'|acteur/([^/]++)(?'
                        .'|(*:38)'
                        .'|/(?'
                            .'|modifier(?'
                                .'|(*:60)'
                                .'|AgeMinimalDesFilms(*:85)'
                            .')'
                            .'|s(?'
                                .'|upprimer(*:105)'
                                .'|ommesDesDureesDesFilms(*:135)'
                            .')'
                            .'|voir(?'
                                .'|(*:151)'
                                .'|GenreOuIlEstDeuxFois(*:179)'
                            .')'
                        .')'
                    .')'
                    .'|film/([^/]++)(?'
                        .'|(*:206)'
                        .'|/(?'
                            .'|modifier(?'
                                .'|(*:229)'
                                .'|Note(*:241)'
                            .')'
                            .'|supprimer(*:259)'
                            .'|voir(?'
                                .'|(*:274)'
                                .'|Acteurs(*:289)'
                            .')'
                        .')'
                    .')'
                    .'|genre/([^/]++)(?'
                        .'|(*:317)'
                        .'|/(?'
                            .'|mo(?'
                                .'|difier(*:340)'
                                .'|yenneDesDureeDesFilms(*:369)'
                            .')'
                            .'|supprimer(*:387)'
                            .'|films(*:400)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'acteurActions', '_controller' => 'App\\Controller\\ActeurController::actions'], ['nomPrenom'], null, null, false, true, null]],
        60 => [[['_route' => 'acteurUpdate', '_controller' => 'App\\Controller\\ActeurController::update'], ['nomPrenom'], null, null, false, false, null]],
        85 => [[['_route' => 'acteurUpdateAgeMinimalAllFilms', '_controller' => 'App\\Controller\\ActeurController::updateAgeMinimalAllFilms'], ['nomPrenom'], null, null, false, false, null]],
        105 => [[['_route' => 'acteurRemove', '_controller' => 'App\\Controller\\ActeurController::remove'], ['nomPrenom'], null, null, false, false, null]],
        135 => [[['_route' => 'acteurShowSumOfFilmDureeIn', '_controller' => 'App\\Controller\\ActeurController::showSumOfFilmDureeIn'], ['nomPrenom'], null, null, false, false, null]],
        151 => [[['_route' => 'acteurShowOne', '_controller' => 'App\\Controller\\ActeurController::showOne'], ['nomPrenom'], null, null, false, false, null]],
        179 => [[['_route' => 'acteurShowGenreWhereIsTwice', '_controller' => 'App\\Controller\\ActeurController::showGenreWhereIsTwice'], ['nomPrenom'], null, null, false, false, null]],
        206 => [[['_route' => 'filmActions', '_controller' => 'App\\Controller\\FilmController::actions'], ['titre'], null, null, false, true, null]],
        229 => [[['_route' => 'filmUpdate', '_controller' => 'App\\Controller\\FilmController::update'], ['titre'], null, null, false, false, null]],
        241 => [[['_route' => 'filmUpdateNote', '_controller' => 'App\\Controller\\FilmController::updateNote'], ['titre'], null, null, false, false, null]],
        259 => [[['_route' => 'filmRemove', '_controller' => 'App\\Controller\\FilmController::remove'], ['titre'], null, null, false, false, null]],
        274 => [[['_route' => 'filmShowOne', '_controller' => 'App\\Controller\\FilmController::showOne'], ['titre'], null, null, false, false, null]],
        289 => [[['_route' => 'filmShowActeurs', '_controller' => 'App\\Controller\\FilmController::showActeurs'], ['titre'], null, null, false, false, null]],
        317 => [[['_route' => 'genreActions', '_controller' => 'App\\Controller\\GenreController::actions'], ['nom'], null, null, false, true, null]],
        340 => [[['_route' => 'genreUpdate', '_controller' => 'App\\Controller\\GenreController::update'], ['nom'], null, null, false, false, null]],
        369 => [[['_route' => 'genreShowAvgOfFilmDureeIn', '_controller' => 'App\\Controller\\GenreController::showAvgOfFilmDureeIn'], ['nom'], null, null, false, false, null]],
        387 => [[['_route' => 'genreRemove', '_controller' => 'App\\Controller\\GenreController::remove'], ['nom'], null, null, false, false, null]],
        400 => [
            [['_route' => 'genreShowFilmIn', '_controller' => 'App\\Controller\\GenreController::showFilmIn'], ['nom'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
