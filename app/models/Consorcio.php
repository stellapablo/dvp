<?php

class Consorcio extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'numero' => 'required',
		'nombre' => 'required',
		//'presidente' => 'required',
		//'secretario' => 'required',
		//'secretarioadjunto' => 'required',
		//'tesorero' => 'required',
		'zona' => 'required',
		'departamento' => 'required'
	);
}
