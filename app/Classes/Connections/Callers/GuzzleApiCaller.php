<?php


namespace App\Classes\Connections\Callers;


use App\Classes\Connections\Contarcts\ApiCaller;
use GuzzleHttp\Client;

class GuzzleApiCaller implements ApiCaller
{
    private $caller;


    public function __construct()
    {
        $this->caller = new Client;
    }


    public function getData($method, $url, $parameters)
    {
        $response = $this->caller->request($method, $url, $parameters);
        return json_decode($response->getBody());
    }
}
