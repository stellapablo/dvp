<?php

class Mapa extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		//'archivo' => 'required',
		'descripcion' => 'required',
		'tipo' => 'required',
		//'zona1' => 'required',
		//'zona2' => 'required',
		//'zona3' => 'required',
		//'zona4' => 'required',
		//'zona5' => 'required',
		//'tamanio'=> 'required',
		//'provinciacompleta' => 'required',
		//'tamanio' => 'required'

	);
}
