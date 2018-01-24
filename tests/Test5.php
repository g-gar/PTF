<?php
// FACADE DESIGN PATTERN

namespace Tests\Test5;

class ArrayStringFunctions {
	public static function arrayToString($array=array()) {
		return join($array);
	}
	public static function stringToArray($string="", $separator="") {
		return str_split($string);
	}
}

class ArrayCaseReverse {
	public static function reverseCase($array=array()) {
		return array_map(function($letter){
			$ascii = ord($letter);
			$diff = ord('a') - ord('A');
			return chr($ascii + (in_array($ascii, range(65,90)) ? $diff : (-1)*$diff));
		}, $array);
	}
}

class CaseReverseFacade {
	public static function reverseStringCase($string='') {
		return ArrayStringFunctions::arrayToString(ArrayCaseReverse::reverseCase(ArrayStringFunctions::stringToArray($string)));
	}
}

class main {
	function __construct(){
		echo CaseReverseFacade::reverseStringCase("AbcdefghijklmOpqrstuvwxyZ");
	}
}