<?php


namespace App\Classes\Connections\Contracts;


interface ApiCallerContract
{
    public function getData($method, $url, $parameters);
}
