<?php

class Tipocamino extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required'
	);
}
