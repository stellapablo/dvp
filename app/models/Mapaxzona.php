<?php

class Mapaxzona extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'mapa' => 'required',
		'zona' => 'required'
	);
}
