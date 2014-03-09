<?php

class Breed extends Eloquent{
	public $timestamps = false;
	public function cats(){
		return $this->hasMany('Cat');
	}
}