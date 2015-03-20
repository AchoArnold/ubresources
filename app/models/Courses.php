<?php

class Courses extends \Eloquent {
	protected $fillable = [];

	public function assignments()
   {
      return $this->hasMany('Assignment');
   }
}