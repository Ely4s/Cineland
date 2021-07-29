<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/cineland/(?'
                    .'|acteur/([^/]++)(?'
                        .'|(*:200)'
                        .'|/(?'
                            .'|modifier(?'
                                .'|(*:223)'
                                .'|AgeMinimalDesFilms(*:249)'
                            .')'
                            .'|s(?'
                                .'|upprimer(*:270)'
                                .'|ommesDesDureesDesFilms(*:300)'
                            .')'
                            .'|voir(?'
                                .'|(*:316)'
                                .'|GenreOuIlEstDeuxFois(*:344)'
                            .')'
                        .')'
                    .')'
                    .'|film/([^/]++)(?'
                        .'|(*:371)'
                        .'|/(?'
                            .'|modifier(?'
                                .'|(*:394)'
                                .'|Note(*:406)'
                            .')'
                            .'|supprimer(*:424)'
                            .'|voir(?'
                                .'|(*:439)'
                                .'|Acteurs(*:454)'
                            .')'
                        .')'
                    .')'
                    .'|genre/([^/]++)(?'
                        .'|(*:482)'
                        .'|/(?'
                            .'|mo(?'
                                .'|difier(*:505)'
                                .'|yenneDesDureeDesFilms(*:534)'
                            .')'
                            .'|supprimer(*:552)'
                            .'|films(*:565)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'acteurActions', '_controller' => 'App\\Controller\\ActeurController::actions'], ['nomPrenom'], null, null, false, true, null]],
        223 => [[['_route' => 'acteurUpdate', '_controller' => 'App\\Controller\\ActeurController::update'], ['nomPrenom'], null, null, false, false, null]],
        249 => [[['_route' => 'acteurUpdateAgeMinimalAllFilms', '_controller' => 'App\\Controller\\ActeurController::updateAgeMinimalAllFilms'], ['nomPrenom'], null, null, false, false, null]],
        270 => [[['_route' => 'acteurRemove', '_controller' => 'App\\Controller\\ActeurController::remove'], ['nomPrenom'], null, null, false, false, null]],
        300 => [[['_route' => 'acteurShowSumOfFilmDureeIn', '_controller' => 'App\\Controller\\ActeurController::showSumOfFilmDureeIn'], ['nomPrenom'], null, null, false, false, null]],
        316 => [[['_route' => 'acteurShowOne', '_controller' => 'App\\Controller\\ActeurController::showOne'], ['nomPrenom'], null, null, false, false, null]],
        344 => [[['_route' => 'acteurShowGenreWhereIsTwice', '_controller' => 'App\\Controller\\ActeurController::showGenreWhereIsTwice'], ['nomPrenom'], null, null, false, false, null]],
        371 => [[['_route' => 'filmActions', '_controller' => 'App\\Controller\\FilmController::actions'], ['titre'], null, null, false, true, null]],
        394 => [[['_route' => 'filmUpdate', '_controller' => 'App\\Controller\\FilmController::update'], ['titre'], null, null, false, false, null]],
        406 => [[['_route' => 'filmUpdateNote', '_controller' => 'App\\Controller\\FilmController::updateNote'], ['titre'], null, null, false, false, null]],
        424 => [[['_route' => 'filmRemove', '_controller' => 'App\\Controller\\FilmController::remove'], ['titre'], null, null, false, false, null]],
        439 => [[['_route' => 'filmShowOne', '_controller' => 'App\\Controller\\FilmController::showOne'], ['titre'], null, null, false, false, null]],
        454 => [[['_route' => 'filmShowActeurs', '_controller' => 'App\\Controller\\FilmController::showActeurs'], ['titre'], null, null, false, false, null]],
        482 => [[['_route' => 'genreActions', '_controller' => 'App\\Controller\\GenreController::actions'], ['nom'], null, null, false, true, null]],
        505 => [[['_route' => 'genreUpdate', '_controller' => 'App\\Controller\\GenreController::update'], ['nom'], null, null, false, false, null]],
        534 => [[['_route' => 'genreShowAvgOfFilmDureeIn', '_controller' => 'App\\Controller\\GenreController::showAvgOfFilmDureeIn'], ['nom'], null, null, false, false, null]],
        552 => [[['_route' => 'genreRemove', '_controller' => 'App\\Controller\\GenreController::remove'], ['nom'], null, null, false, false, null]],
        565 => [
            [['_route' => 'genreShowFilmIn', '_controller' => 'App\\Controller\\GenreController::showFilmIn'], ['nom'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
