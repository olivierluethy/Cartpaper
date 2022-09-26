<?php
require 'core/bootstrap.php';

$routes = [
	'' => 'CartPaperController@index',
];

$db = [
	'name'     => 'cartpaper',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');