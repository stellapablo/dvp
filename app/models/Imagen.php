<?php

class Imagen extends \Eloquent {

    protected $table = 'noticia_imagenes';
    protected $fillable = ['nombre', 'noticia_id'];

    public function noticia() {
        return $this->belongsTo('Noticium');
    }

}
