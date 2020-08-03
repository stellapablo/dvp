<?php

class Noticium extends \Eloquent {

    // Add your validation rules here
    protected $table = 'noticias';
    protected $softDelete = true;
    public static $rules = [
        'titulo' => 'required',
        'desarrollo' => 'required',
        'categoria_id' => 'required',
        'estado_id' => 'required'
    ];
    // Don't forget to fill this array
    protected $fillable = ['titulo', 'slug', 'bajada', 'img_principal', 'epigrafe', 'desarrollo', 'categoria_id', 'estado_id'];

    public function imagenes() {
        return $this->hasMany('Imagen', 'noticia_id');
    }

    public function videos() {
        return $this->hasMany('Video', 'noticia_id');
    }

    public function delete() {
        // delete all related photos 
        $this->imagenes()->delete();
        $this->videos()->delete();
        // delete the user
        return parent::delete();
    }

}
