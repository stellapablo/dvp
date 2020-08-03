<?php

class Zona extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'numero' => 'required'
	);
}
