<?php

namespace App\Providers;

use App\Classes\Connections\Callers\GuzzleApiCaller;
use App\Classes\Connections\Contracts\ApiCallerContract;
use App\Classes\Connections\DomainApiConnection;
use App\Classes\Validations\Contracts\DomainValidatorContract;
use App\Classes\Validations\Domain\ApiDomainValidator;
use Illuminate\Support\ServiceProvider;

class APIServiceProvider extends ServiceProvider
{
    public $singletons = [
        ApiCallerContract::class => GuzzleApiCaller::class,
    ];




    /**
     * Register services.
     *
     * @return
     */
    public function register()
    {
        $this->app->singleton('App\Classes\Connections\DomainApiConnection', function () {
            return new DomainApiConnection(config('ApiConnection.domain.apiKey'));
        });

        $this->app->bind(
            DomainValidatorContract::class,
            ApiDomainValidator::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
