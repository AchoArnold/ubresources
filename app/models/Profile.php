<?php

class Profile extends Eloquent
{
    public $timestamps = false;

    public function user(){
    	return $this->belongsTo('user');
    }
}