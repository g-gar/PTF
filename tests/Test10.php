<?php

require 'lib/Test.class.php';

use \TestFramework\Test;
use \TestFramework\TestCase;
use \TestFramework\Assert;

spl_autoload_register(function($classname){
	require "classes/". str_replace("\\", "/", $classname) .".class.php";
});

use \Cine\Cine;
use \Cine\Sala;

class main extends Test {
	public function __construct(){
		require "classes/Cine/ListaOrdenada.interface.php";
		require "classes/Cine/Estado.enum.php";

		print_r(new Cine());
	}
}

