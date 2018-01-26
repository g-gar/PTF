<?php

namespace APP;

function is_uppercase($letter) {
	return in_array(ord($letter), range(65, 90));
}
function is_lowercase($letter) {
	return in_array(ord($letter), range(97, 122));
}

spl_autoload_register(function($classname){
	$name = array_reverse(explode("\\", $classname))[0];
	$temp = "classes/". str_replace("\\", "/", $classname) .".****.php";
	$is = "";

	if ( is_uppercase($name[0]) && is_lowercase($name[1]) ) { // is class
		$is = "class";
	} else if ( is_uppercase($name[0]) && is_uppercase($name[1]) && $name[0] == 'I' ) { // is interface
		$temp = str_replace("/I", "/", $temp);
		$is = "interface";
		
	} else Throw new \Exception("Required element not supported");

	$temp = str_replace("****", "$is", $temp);

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