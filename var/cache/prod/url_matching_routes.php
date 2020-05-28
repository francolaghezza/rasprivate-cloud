<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/nuevo' => [[['_route' => 'nuevo', '_controller' => 'App\\Controller\\ArchivosController::index'], null, null, null, false, false, null]],
        '/analizar' => [[['_route' => 'analizar', '_controller' => 'App\\Controller\\ArchivosController::analizar'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ArchivosController::report'], null, null, null, false, false, null]],
        '/editar' => [[['_route' => 'editar', '_controller' => 'App\\Controller\\ArchivosController::editar'], null, null, null, false, false, null]],
        '/borrar' => [[['_route' => 'borrar', '_controller' => 'App\\Controller\\ArchivosController::borrar'], null, null, null, false, false, null]],
        '/restaurar' => [[['_route' => 'restaurar', '_controller' => 'App\\Controller\\ArchivosController::restaurar'], null, null, null, false, false, null]],
        '/definitivo' => [[['_route' => 'definitivo', '_controller' => 'App\\Controller\\ArchivosController::borradoDefinitivo'], null, null, null, false, false, null]],
        '/comprimir' => [[['_route' => 'comprimir', '_controller' => 'App\\Controller\\ArchivosController::comprimir'], null, null, null, false, false, null]],
        '/compartir' => [[['_route' => 'compartir', '_controller' => 'App\\Controller\\ArchivosController::compartir'], null, null, null, false, false, null]],
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
                .'|/js/routing(?:\\.(js|json))?(*:34)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
