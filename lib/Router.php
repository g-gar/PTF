<?php

function is_uppercase($letter) {
	return in_array(ord($letter), range(65, 90));
}
function is_lowercase($letter) {
	return in_array(ord($letter), range(97, 122));
}

spl_autoload_register(function($classname){
	$temp = preg_match("/TestFramework.*/", $classname) ? "lib" : "classes";
	$temp = $temp . "/" . str_replace("\\", "/", $classname) .".php";
	$name = array_reverse(explode("\\", $classname))[0];

/*	if ( is_uppercase($name[0]) && is_lowercase($name[1]) ) { // is class

	} else if ( is_uppercase($name[0]) && is_uppercase($name[1]) && $name[0] == 'I' ) { // is interface
		//$temp = str_replace("/I", "/", $temp);
	} else if ( is_uppercase($name[0]) && is_uppercase($name[1]) && $name[0] == 'E' ) { // is enum
		//$temp = str_replace("/E", "/", $temp);
	} else Throw new \Exception("Required element not supported");*/

	require $temp;
});

class Router {
	private $request;
	public function __construct($request){
		$this->request = $request;
	}
	public function get($route, $file){
		$uri = trim( $this->request, "/" );
		$uri = explode("/", $uri);
		if($uri[0] == trim($route, "/")){
			array_shift($uri);
			$args = $uri;
			require $file . '.php';
		}
	}
}