<?php

namespace Tests\Test3;

interface IAnimal {
	public function eat(IFood $food);
	public function breath(IElement $element);
	public function setHabitat(IHabitat $habitat);
}

interface IMammal {
	public function copule(IMammal $mammal);
}

interface IHuman {
	public function think();
	public function copule(IHuman $human);
}

class main {
	function __construct() {

	}
}