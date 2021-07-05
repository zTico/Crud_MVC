<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');
$router->get('/usuario/{id}/editar', 'UsuariosController@editar');
$router->post('/usuario/{id}/editar', 'UsuariosController@editarAction');
$router->get('/usuario/{id}/excluir', 'UsuariosController@excluir');