<?php

class Tipomapa extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		'icono' => 'required',
		'tutorial' => 'required'
	);
}
