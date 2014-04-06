<?php

class HelpDesk extends Eloquent
{
         public $timestamps = false;
	public static function validate($input)
         {
            	$rules = array(
                  	'name' => 'Required|Min:3|Max:16',
                  	'email'  => 'email|Required',
                  	'telephone' => 'Min:5|Max:20',
                  	'message' => 'Required|Min:2|Max:500'
                   );


   	        return Validator::make($input, $rules);
         }
}