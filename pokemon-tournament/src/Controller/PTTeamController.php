<?php

namespace App\Controller;

use App\Service\PTApiManager;
use App\Service\PTDBManager;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class PTTeamController extends AbstractController {

    /**
     * Renders the team creation page.
     * @Route("/team/create", name="team_create", methods={"GET","HEAD"})
     */
    public function teamCreatePage(Request $request) {

        $params = array(
            "new_team" => true,
            "team_label" => "Team name",
            "submit_button_label" => "Create team"
        );
        return $this->render('pt_team_create.html.twig', $params);
    }

    /**
     * Validates POST parameters and creates a new Team.
     * @Route("/team/create", name="team_creation", methods={"POST"})
     */
    function teamCreation( Request $request, PTDBManager $dbManager) {

        if( $request->isXmlHttpRequest() ) {

            $result = array();
            $errors = array();

            $team_name = $request->get('team_name');
            $pokemon_id = $request->get('pokemon_id');

            if ( !isset( $team_name ) || empty( $team_name ) ) {
               $errors[ 'team_name'] = 'Team name is mandatory.';
            }

            if ( !isset( $pokemon_id ) || empty($pokemon_id) ) {
                $errors[ 'team_composition'] = 'Your team must contain atleast one pokemon.';
            }

            if( !empty($errors) ){
                $result['code'] = 100;
                $result['errors'] = $errors;
            }
            else {
                $team_name = $request->get('team_name');
                $pokemons = $request->get('pokemon_id');
                $team = $dbManager->createTeam("$team_name", $pokemons);
                $result['code'] = 0;
                $result['pokemon'] = $team;
            }

            return new JsonResponse($result);
        }
        else {
            $response = new Response();
            $response->setStatusCode(500);
            return $response;
        }
    }


    /**
     * Generates a random Pokemon retrieving it from the API if it's not stored in the DB.
     * Accessible only by an AJAX request.
     * @Route("/pokemon/random")
     */
    public function getRandomPokemon( Request $request, PTApiManager $apiManager, PTDBManager $dbManager ) {

        if( $request->isXmlHttpRequest() ) {

            $result = array();

            $content = $apiManager->getAllPokemons();

            if( isset( $content['results'] ) ) {

                $results = $content['results'];
                $rnd_item = array_rand($results);

                $pokemon_id = basename( $results[$rnd_item]['url'] );

                $pokemon = $dbManager->getPokemonWithId( $pokemon_id );

                if( !isset($pokemon) ) {

                    $pokemon_data = $apiManager->getPokemon( $pokemon_id );
                    $pokemon = $dbManager->createPokemon($pokemon_data);
                }

                $params = array(
                    "pokemon" => $pokemon
                );
                $result["code"] = 0;
                $result["item"] = $this->render('cards/pt_pokemon_card.html.twig', $params )->getContent();
            }
            else {
                $result["code"] = 100;
                $result["item"] = null;
            }
            return new JsonResponse($result);

        }
        else {
            $response = new Response();
            $response->setStatusCode(500);
            return $response;
        }
    }
}