<?php


namespace App\Classes\Validations\Domain;


use App\Classes\Connections\DomainApiConnection;
use App\Classes\Validations\Contracts\DomainValidatorContract;

class ApiDomainValidator implements DomainValidatorContract
{
    private $apiCaller;


    public function __construct(DomainApiConnection $connection)
    {
        $this->apiCaller = $connection;
    }


    public function isValid($user, $domainName)
    {
        $domainData = $this->fetchData($domainName);
        return $this->validate($user, $domainData);
    }


    private function fetchData($domainName)
    {
        return $this->apiCaller->domainName($domainName)->call();
    }

    private function validate($user, $domainInfo)
    {
        if (! isset($domainInfo->WhoisRecord)) {
            return false;
        }
        return $user->fullName == $domainInfo->WhoisRecord->registrant->name;
    }
}
