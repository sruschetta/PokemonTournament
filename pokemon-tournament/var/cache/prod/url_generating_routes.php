<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'team_create' => [[], ['_controller' => 'App\\Controller\\PTTeamController::teamCreatePage'], [], [['text', '/team/create']], [], []],
    'team_creation' => [[], ['_controller' => 'App\\Controller\\PTTeamController::teamCreation'], [], [['text', '/team/create']], [], []],
    'app_ptteam_getrandompokemon' => [[], ['_controller' => 'App\\Controller\\PTTeamController::getRandomPokemon'], [], [['text', '/pokemon/random']], [], []],
    'team_edit' => [['id'], ['_controller' => 'App\\Controller\\PTTeamEditController::teamEditPage'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/team']], [], []],
    'team_edit_action' => [['id'], ['_controller' => 'App\\Controller\\PTTeamEditController::teamEditAction'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/team']], [], []],
    'team_list' => [[], ['_controller' => 'App\\Controller\\PTTeamListController::teamList'], [], [['text', '/team/list']], [], []],
    'team_list_filter' => [[], ['_controller' => 'App\\Controller\\PTTeamListController::teamListFilter'], [], [['text', '/team/list']], [], []],
];
