<?php

class Assignment extends Eloquent{

	public function course() {
      return $this->belongsTo('Course');
   }

   public function author() {
      return $this->belongsTo('User');
   }
}