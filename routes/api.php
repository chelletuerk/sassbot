<?php

// $router->get('/', function () use ($router) {
//     return 'hello world';
// });


$router->get('/users','UserController@index');
$router->post('/users','UserController@store');
$router->get('/users/{id}','UserController@show');
$router->post('/users/update','UserController@update');
$router->delete('/users/{id}','UserController@destroy');


$router->get('/sassies','SassController@index');
$router->post('/sassies','SassController@store');
$router->get('/sassies/{user_id}','SassController@show');
$router->post('/sassies/update', 'SassController@update');
$router->delete('/sassies/{sass_id}', 'SassController@destroy');
