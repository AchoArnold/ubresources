<?php

class Cat extends Eloquent{
	protected $fillable = array('name', 'date_of_birth', 'breed_id');
	public function breed(){
		return $this->belongsTo('Breed');
	}
}