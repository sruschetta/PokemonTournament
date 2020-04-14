<?php

namespace App\Service;

use App\Repository\PokemonRepository;
use App\Repository\TeamRepository;
use App\Repository\TypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Pokemon;
use App\Entity\Team;
use App\Entity\Type;
use Doctrine\DBAL\Connection;
use Symfony\Component\Validator\Constraints\DateTime;

class PTDBManager {

    private $pokemonRepository;
    private $teamRepository;
    private $typeRepository;

    private $entityManager;

    private $cacheManager;

    public function __construct( PokemonRepository $pokemonRepository,
                                 TeamRepository $teamRepository,
                                 TypeRepository $typeRepository,
                                 PTCacheManager $cacheManager,
                                 EntityManagerInterface $entityManager ) {
        $this->pokemonRepository = $pokemonRepository;
        $this->teamRepository = $teamRepository;
        $this->typeRepository = $typeRepository;
        $this->entityManager = $entityManager;
        $this->cacheManager = $cacheManager;
    }

    /*
     * Retrieves the pokemon with $pokemon_id from the DB
     */
    public function getPokemonWithId($pokemon_id) {
        return $this->pokemonRepository->findOneBy(array('pokemon_id' => $pokemon_id));
    }

    /*
     * Stores a new pokemon in the DB.
     */
    public function createPokemon($pokemon_data) {

        $pokemon = new Pokemon();

        if (isset($pokemon_data['name'])) {
            $pokemon->setName($pokemon_data['name']);
        }

        if( isset($pokemon_data['id'])) {
            $pokemon->setPokemonId($pokemon_data['id']);
        }

        if (isset($pokemon_data['base_experience'])) {
            $pokemon->setBaseExperience($pokemon_data['base_experience']);
        }

        if (isset($pokemon_data['abilities'])) {
            $pokemon->setAbilities($pokemon_data['abilities']);
        }

        if (isset($pokemon_data['sprites']) && isset($pokemon_data['sprites']['front_default'])) {
            $pokemon->setSprite($pokemon_data['sprites']['front_default']);
        }

        if (isset($pokemon_data['types'])) {

            foreach( $pokemon_data['types'] as $type_item) {
                if( isset($type_item['type']) && isset($type_item['type']['name']) ) {

                    $type_name = $type_item['type']['name'];

                    $type = $this->getTypeWithName($type_name);
                    if( !isset($type) ) {
                        $type = $this->createType($type_name);
                    }
                    $pokemon->addType($type);
                }
            }
        }

        $this->entityManager->persist($pokemon);
        $this->entityManager->flush();

        return $pokemon;
    }

    /*
     * Creates a new Team and stores it in the DB.
     */
    public function createTeam($name, $pokemon_array) {

        $team = new Team();

        $team->setName($name);
        $team->setCreationDate( new \DateTime('now'));


        foreach( $pokemon_array as $pokemon_id ) {
            $pokemon = $this->getPokemonWithId($pokemon_id);
            $team->addPokemon($pokemon);

            foreach ($pokemon->getTypes() as $type ){
                $this->cacheManager->getCache()->invalidateTags([$type->getName()]);
            }

        }

        $this->entityManager->persist($team);
        $this->entityManager->flush();

        $this->cacheManager->getCache()->delete('team_list');

        return $team;
    }

    /*
     * Retrieves the team with $id from the DB.
     */
    public function getTeam($id) {
        return $this->teamRepository->findOneBy (array('id' => $id));
    }

    /*
     * Retrieves all the teams from the DB.
     */
    public function getAllTeams() {
        return $this->teamRepository->findBy(array(), array('creation_date'=> 'DESC'));
    }

    /*
     * Updates the Team $id name.
     */
    public function updateTeamName($id, $team_name) {
        $team = $this->getTeam($id);
        $team->setName($team_name);
        $this->entityManager->flush();
    }

    /*
     * Retrieves a full preview of the Team $team.
     */
    private function getTeamFullInfo($team) {

        $abilities = [];
        $types = [];
        $sprites = [];
        $total_xp = 0;

        $pokemons = $team->getPokemon();

        foreach ( $pokemons as $pokemon ) {


            $total_xp += $pokemon->getBaseExperience();

            array_push($sprites, $pokemon->getSprite() );

            foreach ($pokemon->getAbilities() as $ability ) {
                if( !in_array( $ability['ability']['name'], $abilities) ) {
                    array_push($abilities, $ability['ability']['name']);
                }
            }

            $pokemon_types = $pokemon->getTypes();

            foreach ( $pokemon_types as $type ) {
                if( !in_array( $type->getName(), $types) ) {
                    array_push($types, $type->getName());
                }
            }
        }

        return array(
            "team_name" => $team->getName(),
            "total_experience" => $total_xp,
            "abilities" => $abilities,
            "sprites" => $sprites,
            "types" => $types,
            "team_id" => $team->getId()
        );
    }

    /*
     * Retrieves the previews of all the teams stored in the DB.
     */
    public function getAllTeamsPreview() {
        $teams = $this->getAllTeams();

        $teams_preview = array();

        foreach ($teams as $team ) {
            $team_preview = $this->getTeamFullInfo($team);
            array_push($teams_preview, $team_preview);
        }

        return $teams_preview;
    }

    /*
    * Retrieves all teams that contains atleast one pokemon with a type contained in $types.
    */

    public function getAllTeamsWithTypes($types) {

        $conn = $this->entityManager->getConnection();

        $sql = "SELECT DISTINCT t.id, t.creation_date
                FROM team t 
                JOIN pokemon_team pt
                    ON t.id = pt.team_id 
                JOIN pokemon p 
                    ON pt.pokemon_id=p.id 
                JOIN pokemon_type pt1 
                    ON p.id=pt1.pokemon_id
                JOIN type t1
                    ON pt1.type_id=t1.id
                WHERE t1.name IN (:type_array)
                ORDER BY t.creation_date DESC";

        $stmt = $conn->executeQuery($sql,
                                    ['type_array' => $types],
                                    ['type_array' => Connection::PARAM_STR_ARRAY]);

        $results = $stmt->fetchAll();
        $teams_preview = array();

        foreach ($results as $item ) {

            $team = $this->getTeam($item['id']);
            $team_preview = $this->getTeamFullInfo($team);
            array_push($teams_preview, $team_preview);
        }

        return $teams_preview;
    }


    /*
     * Retrieves the Type with $name from the DB.
     */

    public function getTypeWithName($type_name) {
        return $this->typeRepository->findOneBy(array('name' => $type_name));
    }


    /*
    * Retrieves the Type with $name from the DB.
    */
    public function getAllTypes() {
        return $this->typeRepository->findAll();
    }


    /*
     * Stores a Type in the DB.
     */
    public function createType($type_name){
        $type = new Type();
        $type->setName($type_name);

        $this->entityManager->persist($type);
        $this->entityManager->flush();

        return $type;
    }


}