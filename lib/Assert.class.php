<?php

namespace TestFramework;

class Assert {
	public static function assertEqualString($expected, $actual){
		if (is_string($actual) && is_string($expected) && $actual == $expected) {
			
		} else Throw new \ErrorException("Assert equal failed for strings '$expected' and '$actual'");
	}
	public static function assertNotEqualString(){}
	public static function assertEqualArray(){}
	public static function assertNotEqualArray(){}
}