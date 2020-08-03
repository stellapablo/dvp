<?php

class Publicidad extends \Eloquent {

    // Add your validation rules here
    public static $rules = [
        'descripcion' => 'required',
        'imagen' => 'required',
        'estado_id' => 'required'
    ];
    
    
    protected $table = 'publicidades';
    
    
    // Don't forget to fill this array
    protected $fillable = ['descripcion', 'imagen', 'estado_id'];

}
