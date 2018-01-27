<?php

namespace TestFramework;

interface IAssert {
	public static function assertEqualString($expected, $actual);
	
}

class Assert {
	public static function assertString($expected, $actual){
		if (is_string($actual) && is_string($expected) && $actual == $expected) {
			return True;
		} else return new \Exception("Assert equal failed for strings '$expected' and '$actual'");
	}
	public static function assertArray(){}
}

class AssertNot {
	public static function assertString(){}
	public static function assertArray(){}
}