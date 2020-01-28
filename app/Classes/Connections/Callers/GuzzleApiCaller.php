<?php


namespace App\Classes\Connections\Callers;


use App\Classes\Connections\Contracts\ApiCallerContract;
use GuzzleHttp\Client;

class GuzzleApiCaller implements ApiCallerContract
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
