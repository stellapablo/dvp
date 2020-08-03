<?php

class Estado extends \Eloquent {

    protected $table = 'estados';
    public $timestamps = false;
    protected $fillable = ['nombre'];

}
