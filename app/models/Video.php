<?php

class Video extends \Eloquent {

    protected $table = 'noticia_videos';
    protected $fillable = ['nombre','noticia_id'];

      public function noticia() {
        return $this->belongsTo('Noticium');
    }
}
