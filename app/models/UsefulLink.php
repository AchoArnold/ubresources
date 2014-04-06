<?php

class UsefulLink extends Eloquent
{
	public static function articles()
	{
		$articles = DB::table('useful_links')
								->orderBy('id', 'desc')
								->get();
		return $articles;
	}
}
