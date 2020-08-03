<?php

class Direccion extends \Eloquent {

    protected $table = 'direcciones';
    // Add your validation rules here
    public static $rules = [
             'nombre' => 'required'
    ];
    // Don't forget to fill this array
    protected $fillable = ['nombre','interno','telefono','estado_id','desarrollo','director','email','slug'];

}
