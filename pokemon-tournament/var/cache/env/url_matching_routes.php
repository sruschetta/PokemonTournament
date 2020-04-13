<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/team/create' => [
            [['_route' => 'team_create', '_controller' => 'App\\Controller\\PTTeamController::teamCreatePage'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'team_creation', '_controller' => 'App\\Controller\\PTTeamController::teamCreation'], null, ['POST' => 0], null, false, false, null],
        ],
        '/pokemon/random' => [[['_route' => 'app_ptteam_getrandompokemon', '_controller' => 'App\\Controller\\PTTeamController::getRandomPokemon'], null, null, null, false, false, null]],
        '/team/list' => [
            [['_route' => 'team_list', '_controller' => 'App\\Controller\\PTTeamListController::teamList'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'team_list_filter', '_controller' => 'App\\Controller\\PTTeamListController::teamListFilter'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/team/([^/]++)/edit(?'
                    .'|(*:29)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [
            [['_route' => 'team_edit', '_controller' => 'App\\Controller\\PTTeamEditController::teamEditPage'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'team_edit_action', '_controller' => 'App\\Controller\\PTTeamEditController::teamEditAction'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
