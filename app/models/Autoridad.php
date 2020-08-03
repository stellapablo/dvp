<?php

class Autoridad extends \Eloquent {

    // Add your validation rules here
    protected $table = 'autoridades';
    
    public static $rules = [
        'descripcion' => 'required',
        'imagen' => 'required',
        'estado_id' => 'required',
        'nombre'=>'required'
    ];
    
    // Don't forget to fill this array
    protected $fillable = ['nombre','descripcion','estado_id','imagen'];

}
