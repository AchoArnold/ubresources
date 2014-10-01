<?php

class Gist extends Eloquent{
	public static function search($query)
	{
		$results = DB::table('gists')
	  	->where('content', 'LIKE', '%'.$query.'%')
	  	->orWhere('title', 'LIKE', '%'.$query.'%')
	 	->get();

		return $results;
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}
}