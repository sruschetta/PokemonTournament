<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\JsonResponse;

    use App\Service\PTDBManager;
    use App\Service\PTCacheManager;

    class PTTeamListController extends AbstractController {


        /**
         * Renders the team list page.
         * @Route("/team/list", name="team_list", methods={"GET","HEAD"})
         */
        public function teamList(PTDBManager $dbManager, PTCacheManager $cacheManager) {

            $cache_item = $cacheManager->getCache()->getItem('team_list');

            if( !$cache_item->isHit() ) {

                $teams = $dbManager->getAllTeamsPreview();

                $types = $dbManager->getAllTypes();

                $params = array(
                    "team_list" => $teams,
                    "types" => $types
                );

                $cache_item->set($params);
                $cache_item->tag('team_list');
                $cacheManager->getCache()->save($cache_item);
            }

            return $this->render('pt_team_list.html.twig', $cache_item->get());
        }

        /**
         * Validate and filters the teams by types sent in post params.
         * @Route("/team/list", name="team_list_filter", methods={"POST"})
         */
        public function teamListFilter( Request $request, PTDBManager $dbManager, PTCacheManager $cacheManager ) {

            if( $request->isXmlHttpRequest() ) {

                $types = array();
                $key = '';
                foreach ($request->get('types') as $type) {
                    array_push($types, $type['name']);
                    $key .= $type['name'];
                }

                $cache_item = $cacheManager->getCache()->getItem($key);

                if( !$cache_item->isHit() ) {

                    $teams_render = array();
                    $teams = $dbManager->getAllTeamsWithTypes($types);

                    $teams_ids = array();

                    foreach ($teams as $team) {
                        $params = array(
                            "team" => $team
                        );
                        array_push($teams_ids, 'team_' . $team['team_id']);
                        array_push($teams_render, $this->render('cards/pt_team_card.html.twig', $params)->getContent());
                    }

                    $result["code"] = 0;
                    $result["teams"] = $teams_render;

                    $cache_item->set($result);
                    $cache_item->tag($types);
                    $cache_item->tag($teams_ids);

                    $cacheManager->getCache()->save($cache_item);
                }
                return new JsonResponse($cache_item->get());
            }
            else {
                $response = new Response();
                $response->setStatusCode(500);
                return $response;
            }

        }

    }