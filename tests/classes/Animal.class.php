<?php

namespace Animal;

interface IAnimalia {}
interface IPlantae {}
interface IFungi {}
interface IProtozoa {}
interface IChromista {}
interface IArchaea {}
interface IBacteria {}


interface IMammal extends IAnimalia {
	public function copule();
}
interface IReptile extends IAnimalia {
	public function copule();
}

interface IHuman extends IMammal {
	public function think();
	public function copule();
}