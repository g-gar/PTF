<?php

require 'lib/Router.class.php';

$router = new \APP\Router(trim($_SERVER["REQUEST_URI"], '/'));

$router->get('/', 'app/home');
$router->get('test/', 'app/test');