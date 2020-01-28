<?php


namespace App\Classes\Model;


use App\Classes\Validations\Contracts\DomainValidatorContract;

class Domain
{
    protected $user;
    protected $validator;


    public function __construct(DomainValidatorContract $validatorContract)
    {
        $this->validator = $validatorContract;
    }


    public function index()
    {
        return $this->user->domains;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function add($request)
    {
        $domainName = $request->name;

        return $this->user->domains()->create([
            'name' => $domainName,
            'is_verified' => $this->isValid($domainName)
        ]);
    }

    protected function isValid($domainName)
    {
        return $this->validator->isValid($this->user, $domainName);
    }
}
