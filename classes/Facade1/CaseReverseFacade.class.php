<?php

namespace Facade1;

class CaseReverseFacade {
	public static function reverseStringCase($string='') {
		return ArrayStringFunctions::arrayToString(ArrayCaseReverse::reverseCase(ArrayStringFunctions::stringToArray($string)));
	}
}