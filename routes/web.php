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

// $router->get('/', function () use ($router) {
//     return 'hello world';
// });
//
// // $router->get('user/{id}', 'UserController@show');
//
// $router->get('api/v1/users/{id}', function (App\User $user) {
//     return $user;
// });
//
// $router->post('api/v1/users', function (App\User $user) {
//     return $user;
// });

$router->get('/users','UserController@index');
$router->get('/users/{id}','UserController@show');
$router->post('/users','UserController@store');
$router->post('/users/{id}','UserController@show');
$router->put('/users/{id}','UserController@update');
$router->delete('/users/{id}','UserController@destroy');


// $router->get('user','UserController@index');
