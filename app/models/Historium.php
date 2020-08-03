<?php

class Historium extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'fecha' => 'required',
		//'foto' => 'required',
		'titulo' => 'required',
		'descripcion' => 'required'
	);
}
