<?php


namespace App\Classes\Validations\Contracts;


interface DomainValidatorContract
{
    public function isValid($user, $domainName);
}
