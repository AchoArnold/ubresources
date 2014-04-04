<?php

class Comment extends Eloquent{
	protected $fillable = array('content');

	public static function validate($input) {
      $rules = array(
      	'content' => 'Required|Min:2|Max:500'
      );

       return Validator::make($input, $rules);
   }
}