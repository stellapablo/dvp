<?php

class Delegacion extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'nombre' => 'required',
            	 'estado_id' => 'required',
            	 'desarrollo' => 'required'
	];
        
        protected $table = 'delegaciones';

        // Don't forget to fill this array
	protected $fillable = ['nombre','estado_id','desarrollo'];

}