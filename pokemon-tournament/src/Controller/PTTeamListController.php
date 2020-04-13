<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\JsonResponse;

    use App\Service\PTDBManager;

    class PTTeamListController extends AbstractController {


        /**
         * Renders the team list page.
         * @Route("/team/list", name="team_list", methods={"GET","HEAD"})
         */
        public function teamList(PTDBManager $dbManager) {

            $teams = $dbManager->getAllTeamsPreview();

            $types = $dbManager->getAllTypes();

            $params = array(
                "team_list" => $teams,
                "types" => $types
            );

            return $this->render('pt_team_list.html.twig', $params );
        }

        /**
         * Validate and filters the teams by types sent in post params.
         * @Route("/team/list", name="team_list_filter", methods={"POST"})
         */
        public function teamListFilter( Request $request, PTDBManager $dbManager ) {

            if( $request->isXmlHttpRequest() ) {

                $types = array();

                foreach ($request->get('types') as $type) {
                    array_push($types, $type['name']);
                }

                $teams_render = array();
                $teams = $dbManager->getAllTeamsWithTypes($types);


                foreach ($teams as $team) {
                    $params = array(
                        "team" => $team
                    );
                    array_push($teams_render, $this->render('cards/pt_team_card.html.twig', $params)->getContent());
                }

                $result["code"] = 0;
                $result["teams"] = $teams_render;

                return new JsonResponse($result);
            }
            else {
                $response = new Response();
                $response->setStatusCode(500);
                return $response;
            }

        }

    }