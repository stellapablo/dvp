<?php

class Mapaxdepartamento extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'mapa' => 'required',
		'departamento' => 'required'
	);
}
