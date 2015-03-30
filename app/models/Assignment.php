<?php

class Assignment extends Eloquent{

   public function author() {
      return $this->belongsTo('User');
   }


   public function course() {
      return $this->belongsTo('Course');
   }
}