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
        '/nuevo' => [[['_route' => 'nuevo', '_controller' => 'App\\Controller\\ArchivosController::index'], null, null, null, false, false, null]],
        '/analizar' => [[['_route' => 'analizar', '_controller' => 'App\\Controller\\ArchivosController::analizar'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ArchivosController::report'], null, null, null, false, false, null]],
        '/editar' => [[['_route' => 'editar', '_controller' => 'App\\Controller\\ArchivosController::editar'], null, null, null, false, false, null]],
        '/borrar' => [[['_route' => 'borrar', '_controller' => 'App\\Controller\\ArchivosController::borrar'], null, null, null, false, false, null]],
        '/restaurar' => [[['_route' => 'restaurar', '_controller' => 'App\\Controller\\ArchivosController::restaurar'], null, null, null, false, false, null]],
        '/definitivo' => [[['_route' => 'definitivo', '_controller' => 'App\\Controller\\ArchivosController::borradoDefinitivo'], null, null, null, false, false, null]],
        '/comprimir' => [[['_route' => 'comprimir', '_controller' => 'App\\Controller\\ArchivosController::comprimir'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/nuevapass' => [[['_route' => 'nueva_pass', '_controller' => 'App\\Controller\\NuevaPassController::index'], null, null, null, false, false, null]],
        '/newpass' => [[['_route' => 'newpass', '_controller' => 'App\\Controller\\NuevaPassController::newPass'], null, null, null, false, false, null]],
        '/panel' => [[['_route' => 'panel', '_controller' => 'App\\Controller\\PanelController::index'], null, null, null, false, false, null]],
        '/perfil' => [[['_route' => 'perfil', '_controller' => 'App\\Controller\\PerfilController::index'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\PerfilController::buscarEmail'], null, null, null, false, false, null]],
        '/c_email' => [[['_route' => 'c_email', '_controller' => 'App\\Controller\\PerfilController::cambiarEmail'], null, null, null, false, false, null]],
        '/usuario' => [[['_route' => 'usuario', '_controller' => 'App\\Controller\\PerfilController::buscarUsuario'], null, null, null, false, false, null]],
        '/c_usuario' => [[['_route' => 'c_usuario', '_controller' => 'App\\Controller\\PerfilController::cambiarUsuario'], null, null, null, false, false, null]],
        '/pass' => [[['_route' => 'pass', '_controller' => 'App\\Controller\\PerfilController::compruebaPass'], null, null, null, false, false, null]],
        '/c_pass' => [[['_route' => 'c_pass', '_controller' => 'App\\Controller\\PerfilController::cambiarPass'], null, null, null, false, false, null]],
        '/e_user' => [[['_route' => 'e_user', '_controller' => 'App\\Controller\\PerfilController::eliminarUsuario'], null, null, null, false, false, null]],
        '/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\RegistroController::index'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\ResetPasswordController::sendEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/js/routing(?:\\.(js|json))?(*:196)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
