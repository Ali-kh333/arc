<?php


namespace App\Classes\Connections;


class DomainApiConnection extends ApiConnection
{
    private $apiKey;
    private $outputFormat = 'JSON';
    private $url = 'https://www.whoisxmlapi.com/whoisserver/WhoisService';


    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->uri($this->url);

        parent::__construct();
    }


    public function domainName($name)
    {
        $this->params([
            'apiKey'        => $this->apiKey,
            'outputFormat'  => $this->outputFormat,
            'domainName'    => $name
        ]);

        return $this;
    }
}
