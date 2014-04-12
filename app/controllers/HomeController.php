<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return Redirect::to('gist');
		return View::make('welcome')
		->with('title', 'UB Resources provides timetables, past questions, Gpa Calculator, news, and course outlines for students in the University of Buea');
	}

}