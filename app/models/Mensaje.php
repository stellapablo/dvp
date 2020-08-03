<?php

class Mensaje extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'mapa' => 'required',
		'dni' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'email' => 'required',
		'mensaje' => 'required'
	);
}
