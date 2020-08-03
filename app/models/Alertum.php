<?php

class Alertum extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'descripcion' => 'required'
	];
        
        protected $table = 'alertas';

        // Don't forget to fill this array
	protected $fillable = ['descripcion','estado_id'];


}