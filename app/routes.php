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

Route::get('gist', 'GistController@show');

Route::get('useful-links', 'LinksController@show');

Route::get('timetables', 'TimetableController@show');

Route::get('gpa-calculator', 'GpaCalcController@show');

Route::get('past-questions', 'PastQuestionsController@show');

Route::get('course-outline', 'CourseOutlineController@show');

Route::get('contribute','ContributionController@show');

Route::get('contribute/past-questions', 'ContributionController@contributePastQuestion');

Route::get('contribute/timetables', 'ContributionController@contributeTimetable');

Route::get('contribute/course-outlines', 'ContributionController@contributeCourseOutline');

Route::get('contribute/errors', 'ContributionController@contributeError');

Route::get('help-desk', 'HelpDeskController@show');