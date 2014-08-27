<?php

class Assignment extends Eloquent{
	public static function search($query)
	{
		$results = DB::table('assignments')
							  ->where('content', 'LIKE', '%'.$query.'%')
							  ->get();

		return $results;
	}
}