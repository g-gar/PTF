<?php

namespace TestFramework;

interface IAssert {
	public static function assertEqualString($expected, $actual);
	
}

class Assert {
	public static function assertEqualString($expected, $actual){
		if (is_string($actual) && is_string($expected) && $actual == $expected) {
			return True;
		} else Throw new \ErrorException("Assert equal failed for strings '$expected' and '$actual'");
	}
	public static function assertEqualArray(){}
	public static function assertNotEqualArray(){}
}

class AssertNot {
	public static function assertEqualString(){}
}