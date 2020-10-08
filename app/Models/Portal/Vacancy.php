<?php

namespace App\Models\Portal;

use CodeIgniter\Model;
use GuzzleHttp\Client;

class Vacancy extends Model
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'api.skripsi-azmi.localhost/vacancy/'
        ]);
    }

    //handle when connection timeout
    //process : json_encode
    //return array
    public function get($id = false): array {
        if ($id === false) {
            return json_decode($this->client->request('GET')->getBody(), true);
        } else {
            return json_decode($this->client->request('GET', $id)->getBody(), true);
        }
    }
}