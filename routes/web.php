<?php

use Illuminate\Support\Facades\Route;

/**
 * @var $router \Illuminate\Routing\Router
 */

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


Auth::routes();

$router->get('/', 'HomeController@index')->name('home');

//Index...
$router->get('/stats', 'IndexController');

//User...
$router->group(['prefix' => 'user'], static function ($router) {
    $router->get('list', 'UserController@list');
    $router->get('{user}', 'UserController@preview');
    $router->post('/store', 'UserController@store');
    $router->post('{user}/delete', 'UserController@delete');
    $router->post('{user}/update', 'UserController@update');
});

//Section...
$router->group(['prefix' => 'section'], static function ($router) {
    $router->get('list', 'SectionController@list');
});
