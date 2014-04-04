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

Route::get('/', 'HomeController@showWelcome');

Route::get('about', 'AboutController@showPage');

Route::get('disclaimer', 'DisclaimerController@show');

Route::get('gist', 'GistController@index');

Route::get('gist/{uri}', 'GistController@show');

Route::get('gist/{comment}/delete', 'CommentsController@destroy');

Route::post('gist/{uri}', 'CommentsController@create');

Route::get('useful-links', 'LinksController@show');


Route::get('timetables', 'TimetableController@index');

Route::post('timetables', 'TimetableController@handle_form');

Route::get('timetables/{faculty_id}/{department_id}/{level}', 'TimetableController@show');


Route::get('past-questions', 'PastQuestionController@index');

Route::post('past-questions', 'PastQuestionController@handle_form');

Route::get('past-questions/{faculty_id}/{department_id}/{level}', 'PastQuestionController@show');

Route::post('past-questions/{faculty_id}/{department_id}/{level}', 'PastQuestionController@download');



Route::get('gpa-calculator', 'GpaCalcController@index');

Route::post('gpa-calculator', 'GpaCalcController@handle_form');

Route::get('gpa-calculator/{faculty_id}/{department_id}/{level}', 'GpaCalcController@show');


Route::get('course-outline', 'CourseOutlineController@index');

Route::post('course-outline', 'CourseOutlineController@handle_form');

Route::get('course-outline/{faculty_id}/{department_id}/{level}', 'CourseOutlineController@show');


Route::get('contribute','ContributionController@show');

Route::get('contribute/past-questions', 'ContributionController@contributePastQuestion');

Route::get('contribute/timetables', 'ContributionController@contributeTimetable');

Route::get('contribute/course-outlines', 'ContributionController@contributeCourseOutline');

Route::get('contribute/errors', 'ContributionController@contributeError');

Route::get('help-desk', 'HelpDeskController@show');