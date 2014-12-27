<?php

class ExCarbon extends Carbon\Carbon {

    public static function niceDate($date_prefix, $date_timestamp) {
    	$message = $date_prefix. ' ';
       if ($date_timestamp->diffInDays() > 30)
	    	$message = $message . 'on ' .$date_timestamp->toFormattedDateString();
		else
			$message = $message . $date_timestamp->diffForHumans();

      return $message;
    }

    public static function fullDate($date) {
    	$date = new DateTime($date);
    	return $date->format('l jS F Y');
    }

    public static function fullTime($date) {
      $date = new DateTime($date);
      return $date->format('l jS F Y \a\t h:i A');
    }

}