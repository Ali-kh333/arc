<?php


namespace App\Classes\Connections\Contarcts;


interface ApiCaller
{
    public function getData($method, $url, $parameters);
}
