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

// $router->get('/users/{user_id}/sass_comment', 'SassController@index');
// $router->user('/users/{user_id}/sass_comment', 'SassController@store');


$router->get('/sassies','SassController@index');
// $router->post('/sassies','SassController@store');
// $router->get('/sassies/{sass_id}','SassController@show');
// $router->put('/sassies/{sass_id}', 'SassController@update');
// $router->patch('/sassies/{sass_id}', 'SassController@update');
// $router->delete('/sassies/{sass_id}', 'SassController@destroy');


// $app->get('/sassies/{id}/sass_comments', 'SassController@index');
// $app->post('/sassies/{id}/sass_comments', 'SassController@store');
// $app->put('/sassies/{id}/sass_comments/{sass_id}', 'SassController@update');
// $app->patch('/sassies/{id}/sass_comments/{sass_id}', 'SassController@update');
// $app->delete('/sassies/{id}/sass_comments/{sass_id}', 'SassController@destroy');
