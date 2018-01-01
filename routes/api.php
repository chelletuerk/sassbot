<?php

// $router->get('/', function () use ($router) {
//     return 'hello world';
// });


$router->get('/api/v1/users','UserController@index');
$router->post('/api/v1/users','UserController@store');
$router->get('/api/v1/users/{id}','UserController@show');
$router->post('/api/v1/users/update','UserController@update');
$router->delete('/api/v1/users/{id}','UserController@destroy');


$router->get('/api/v1/sassies','SassController@index');
$router->post('/api/v1/sassies','SassController@store');
$router->get('/api/v1/sassies/{user_id}','SassController@show');
$router->post('/api/v1/sassies/update', 'SassController@update');
$router->delete('/api/v1/sassies/{sass_id}', 'SassController@destroy');
