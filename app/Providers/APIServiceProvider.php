<?php

namespace App\Providers;

use App\Classes\Connections\Callers\GuzzleApiCaller;
use App\Classes\Connections\Contarcts\ApiCaller;
use App\Classes\Connections\DomainApiConnection;
use Illuminate\Support\ServiceProvider;

class APIServiceProvider extends ServiceProvider
{
    public $singletons = [
        ApiCaller::class => GuzzleApiCaller::class,
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
