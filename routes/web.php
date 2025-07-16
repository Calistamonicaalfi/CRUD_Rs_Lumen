<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'api/rumahsakit'], function () use ($router) {
    $router->get('/', 'RumahSakitController@index');         // Get all
    $router->get('{id}', 'RumahSakitController@show');       // Get by ID
    $router->post('/', 'RumahSakitController@store');        // Create
    $router->put('{id}', 'RumahSakitController@update');     // Update
    $router->delete('{id}', 'rumahSakitController@destroy'); // Delete
});


$router->get('/', function () use ($router) {
    return 'API Lumen Berhasil Dijalankan!';
});