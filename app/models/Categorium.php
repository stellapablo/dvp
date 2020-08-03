<?php

class Categorium extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'descripcion' => 'required'
	];
        
        protected $table = 'categorias';

        // Don't forget to fill this array
	protected $fillable = ['descripcion','created_at','updated_at'];

}