<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

// authentication
$router->group(['middleware' => 'auth','prefix' => 'api'], function ($router) 
{
    $router->get('me', 'AuthController@me');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');

    // classes
    $router->get('class', 'ClassController@index');
    $router->get('class/detail/{class}', 'ClassController@classdetail');

});

// un-authentication
$router->group(['prefix' => 'api'], function () use ($router) 
{
   $router->get('register', 'AuthController@register');
   $router->post('login', 'AuthController@login');
});

