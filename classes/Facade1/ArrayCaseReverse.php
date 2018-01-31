<?php

namespace Facade1;

class ArrayCaseReverse {
	public static function reverseCase($array=array()) {
		return array_map(function($letter){
			$ascii = ord($letter);
			$diff = ord('a') - ord('A');
			return chr($ascii + $diff * (in_array($ascii, range(65,90)) ? 1 : -1));
		}, $array);
	}
}