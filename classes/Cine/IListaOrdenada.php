<?php

namespace Cine;

interface IListaOrdenada {
	public function listaVacia();
	public function esListaVacia();
	public function primera();
	public function ultima();
	public function siguiente($indice);
	public function anterior($indice);
	public function insertarDato($dato);
	public function eliminarPosicion($indice);
	public function obtenerDato($indice);
	public function actualizarDato($indice, $dato);
	public function buscarDato($dato);
}