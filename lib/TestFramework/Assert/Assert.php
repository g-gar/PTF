<?php

namespace TestFramework\Assert;

class Assert implements IAssert {
	public static function assertString($expected, $actual){
		if (is_string($actual) && is_string($expected) && $actual == $expected) {
			return True;
		} else return new \Exception("Assert equal failed for strings '$expected' and '$actual'");
	}
	public static function assertArray(){}
}

