<?php

namespace Facade1;

class ArrayStringFunctions {
	public static function arrayToString($array=array()) {
		return join($array);
	}
	public static function stringToArray($string="") {
		return str_split($string);
	}
}