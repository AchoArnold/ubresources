<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('about', 'AboutController@index');

Route::get('disclaimer', 'DisclaimerController@show');


Route::resource('gist', 'GistController');

Route::get('gist.json', function(){
	return Response::json(Gist::all());
});


Route::get('useful-links', 'UsefulLinkController@index');


Route::get('timetables', 'TimetableController@index');

Route::get('timetables/{faculty_id}/{department_id}/{level}', 'TimetableController@show');


Route::get('past-questions', 'PastQuestionController@index');

Route::get('past-questions/{faculty_id}/{department_id}/{level}', 'PastQuestionController@show');


Route::get('gpa-calculator', 'GpaCalcController@index');

Route::get('gpa-calculator/{faculty_id}/{department_id}/{level}', 'GpaCalcController@show');


Route::get('course-outline', 'CourseOutlineController@index');

Route::get('course-outline/{faculty_id}/{department_id}/{level}', 'CourseOutlineController@show');


Route::get('contribute','ContributionController@index');

Route::get('contribute/{id}', 'ContributionController@show');


Route::get('help-desk', 'HelpDeskController@index');


Route::get('search', 'SearchController@index');


Route::group(array('before'=>'csrf'), function(){

	Route::post('timetables', 'TimetableController@handle_form');

	Route::post('past-questions', 'PastQuestionController@handle_form');

	Route::post('past-questions/{faculty_id}/{department_id}/{level}', 'PastQuestionController@download');

	Route::post('gpa-calculator', 'GpaCalcController@handle_form');

	Route::post('course-outline', 'CourseOutlineController@handle_form');

	Route::post('contribute/{id}', 'ContributionController@create');

	Route::post('help-desk', 'HelpDeskController@store');

});


Route::group(array('before'=>'guest'), function(){

	Route::get('join', 'AccountController@create');

	Route::get('login', 'AccountController@login');

	Route::group(array('before'=>'csrf'), function(){

		Route::post('join', 'AccountController@store');

		Route::post('login', 'AccountController@post_login');
	});
});

Route::group(array('before'=>'auth'), function(){

	#Route::resource('assignments', 'AssignmentController');


	Route::get('account/edit', 'AccountController@edit');

	Route::get('account/password','AccountController@password');

	Route::get('gist/{comment}/delete', 'CommentsController@destroy');

	Route::group(array('before'=>'csrf'), function(){

		Route::post('gist/{uri}', 'CommentsController@create');

		Route::post('account/edit', 'AccountController@update');

		Route::post('account/password','AccountController@update_password');

		Route::get('account/logout', 'AccountController@logout');
	});
});