<?php

require 'lib/Router.php';

$router = new Router($_SERVER["REQUEST_URI"]);

$router->get('/', 'app/home');
$router->get('test/', 'app/test');