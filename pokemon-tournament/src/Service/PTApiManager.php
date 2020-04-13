<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class PTApiManager {

    private $api_url = "https://pokeapi.co/api/v2/";

    public function getAllPokemons() {
        $response_content = $this->makeHttpRequest("pokemon/?limit=2000" );
        return json_decode($response_content, true);
    }

    public function getPokemon($pokemon_id) {

        $response_content = $this->makeHttpRequest("pokemon/" . $pokemon_id );
        return json_decode($response_content, true);
    }

    public function getResourceAtUrl($url) {
        $client = HttpClient::create();
        $response = $client->request('GET', $url);
        return json_decode($response->getContent(), true);
    }


    private function makeHttpRequest($endpoint) {

        $client = HttpClient::create();
        $response = $client->request('GET', $this->api_url . $endpoint );

        return ( $response->getContent() );
    }
}