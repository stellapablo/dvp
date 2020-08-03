<?php

class Deptoxmapa extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'mapa' => 'required',
		'departamento' => 'required'
	);
}
