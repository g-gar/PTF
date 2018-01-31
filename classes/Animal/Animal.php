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
	
}
interface IReptile extends IAnimalia {
	
}

interface IHuman extends IMammal {
	public function think();
}