<?php

namespace App\Controller;

use App\Service\PTApiManager;
use App\Service\PTDBManager;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class PTTeamEditController extends AbstractController {


    /**
     * Renders the team $id edit page.
     * @Route("/team/{id}/edit", name="team_edit", methods={"GET","HEAD"})
     */
    public function teamEditPage($id, Request $request, PTDBManager $dbManager) {

        $team = $dbManager->getTeam($id);

        $params = array(
            "team_label" => "Team name",
            "team_name" => $team->getName(),
            "submit_button_label" => "Update team",
            "pokemons" => $team->getPokemon()
        );
        return $this->render('pt_team_edit.html.twig', $params);
    }


    /**
     * Validate and save the edit request for team $id.
     * @Route("/team/{id}/edit", name="team_edit_action", methods={"POST"})
     */
    public function teamEditAction($id, Request $request, PTDBManager $dbManager) {

        $result = array();
        $errors = array();

        $team_name = $request->get('team_name');

        if( isset($team_name) && !empty($team_name) ){
            $dbManager->updateTeamName($id, $team_name);

            $result['code'] = 0;
            $result['message'] = 'Team updated!';
        }
        else {
            $result['code'] = 100;
            $errors['team_name'] = "Team name is mandatory";
            $result['errors'] = $errors;
        }

        return new JsonResponse($result);
    }
}
