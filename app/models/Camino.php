<?php

class Camino extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		'tipo' => 'required',
		'estado' => 'required'
	);
}
