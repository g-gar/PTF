<?php

require 'lib/Router.class.php';

$router = new \APP\Router($_SERVER["REQUEST_URI"]);

$router->get('/', 'app/home');
$router->get('test/', 'app/test');