<?php

class Consorcioxmapa extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'mapa' => 'required',
		'consorcio' => 'required'
	);
}
