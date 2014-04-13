<?php

class CourseOutlineController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$department_array = CourseOutline::departments();

		return View::make('course-outline.index')
		->with('title', 'Get the course outline for your level freely from here')
		->with('form_list', $department_array);
	}


	public function handle_form()
	{
		$faculty_id = Input::get('faculty');
		$department_id = Input::get('department');
		$level = Input::get('level');
		return Redirect::to('course-outline/'.$faculty_id.'/'.$department_id.'/'.$level);
	}

	public function show($faculty_id, $department_id, $level)
	{

		$course_outline_entries = CourseOutline::course_outline_array($department_id, $level );
		$meta_data = CourseOutline::meta_data( $faculty_id, $department_id );

		$total_credit[0] =0;
		$total_credit[1] =0;

		foreach ($course_outline_entries as $entry) {
			if($entry->semester == 1)
				$total_credit[0] += $entry->credit_value;
			elseif ($entry->semester == 2) {
				$total_credit[1] += $entry->credit_value;
			}

		}

		return View::make('course-outline.show')
		->with('title', "Course Outline for ".strtolower($meta_data->faculty_name). " department of".strtolower($meta_data->department_name)." level ". $level)
		->with('course_outline', $course_outline_entries)
		->with('meta_data', $meta_data)
		->with('total_credit', $total_credit)
		->with('level', $level);
	}

}