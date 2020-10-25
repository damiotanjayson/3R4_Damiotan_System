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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/userDisplay','userController@displayUser');
$router->post('/userAdd','userController@addUser');
$router->put('/userUpdate/{id}','userController@updateUser');
$router->get('/userView/{id}','userController@readUser');
$router->delete('/userDelete/{id}','userController@deleteUser');



//Login
$router->get('/login', [
    'as' => 'login', 'uses' => 'userController@loginView'
]);

$router->get('/dashboard', [
    'as' => 'dash', 'uses' => 'userController@dash'
]);

$router->get('/check','userController@checkUser');

$router->get('/welcome', [
    'as' => 'welcome', 'uses' => 'userController@welcomeUser'
]);

$router->get('/logout', [
    'as' => 'logout', 'uses' => 'userController@logoutUser'
]);
