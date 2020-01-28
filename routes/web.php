<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('domains', 'DomainController');
    Route::name('api.')->group(function (){// It should be in api.php file, but as I believed this test is more about checking domain names, I skipped the front technicals such as JWT auth, Vue panel and ...
        Route::get('api/lists', 'API\DomainController@domains')->name('list'); // Created this route cause I didn't have a Vue panel and I didn't create all of it with vue
        Route::apiResource('api/domains', 'API\DomainController');
    });
});

