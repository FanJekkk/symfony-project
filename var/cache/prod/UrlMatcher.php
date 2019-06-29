<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/flight' => [[['_route' => 'flight_index', '_controller' => 'App\\Controller\\FlightController::index'], null, ['GET' => 0], null, true, false, null]],
        '/flight/new' => [[['_route' => 'flight_new', '_controller' => 'App\\Controller\\FlightController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/secret' => [[['_route' => 'secret', '_controller' => 'App\\Controller\\SecretController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/flight/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'flight_show', '_controller' => 'App\\Controller\\FlightController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'flight_edit', '_controller' => 'App\\Controller\\FlightController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [
            [['_route' => 'flight_delete', '_controller' => 'App\\Controller\\FlightController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
