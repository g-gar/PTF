<?php
spl_autoload_register(function($classname){
	$temp = preg_match("/TestFramework.*/", $classname) ? "lib" : "classes";
	$temp = $temp . "/" . str_replace("\\", "/", $classname) .".php";
	$name = array_reverse(explode("\\", $classname))[0];

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
