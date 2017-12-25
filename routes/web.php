<?php

// $router->get('/', function () use ($router) {
//     return 'hello world';
// });


$router->get('/users','UserController@index');
$router->post('/users','UserController@store');
$router->get('/users/{id}','UserController@show');
$router->put('/users/{id}','UserController@update');
$router->patch('/users/{id}','UserController@update');
$router->delete('/users/{id}','UserController@destroy');
