<?php

class Contribution extends Eloquent{
	public static function validate($input) {
      $rules = array(
      	'description' => 'Required|Min:2|Max:500',
      	'email'  => 'email'
      );

       return Validator::make($input, $rules);
   }

   public static function validate_upload($input)
   {
   	$rules = array(
      	'name' => 'Required|Min:2|Max:500',
      	'email'  => 'email',
      	'upload_file' => 'Required|max:10000',
      	'terms' => 'Required'
      );


   	return Validator::make($input, $rules);
   }
}