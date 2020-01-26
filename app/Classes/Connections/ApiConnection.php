<?php


namespace App\Classes\Connections;


use App\Classes\Connections\Contarcts\ApiCaller;

abstract class ApiConnection
{
    private $uri;
    private $params;
    private $method = 'GET';
    private $queryType = 'query';
    private $apiCaller;


    public function __construct()
    {
        $this->apiCaller = resolve(ApiCaller::class);
    }


    public function params(array $params)
    {
        $this->params = $params;
        return $this;
    }

    public function uri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    public function post()
    {
        $this->method = 'POST';
        $this->queryType = 'form_params';
        return $this;
    }

    public function call()
    {
        return $this->apiCaller->getData($this->method, $this->getUri(), [$this->getQueryType() => $this->getParams()]);
    }


    protected function getUri()
    {
        return $this->uri;
    }

    protected function getQueryType()
    {
        return $this->queryType;
    }

    protected function getParams()
    {
        return $this->params;
    }

}
