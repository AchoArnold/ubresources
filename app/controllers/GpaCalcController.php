<?php

class GpaCalcController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$department_array = CourseOutline::departments();

		return View::make('gpa-calc.index')
		->with('title', 'Fast and efficient GPA calculator for the University of Buea')
		->with('form_list', $department_array);
	}


	public function handle_form()
	{
		$faculty_id = Input::get('faculty');
		$department_id = Input::get('department');
		$level = Input::get('level');
		return Redirect::to('gpa-calculator/'.$faculty_id.'/'.$department_id.'/'.$level);
	}
	
	public function show($faculty_id, $department_id, $level)
	{

		$course_outline_entries = CourseOutline::course_outline_array($department_id, $level );
		if ($course_outline_entries == NULL){
			return 404;
		}
		$meta_data = CourseOutline::meta_data( $faculty_id, $department_id );
		if($meta_data == NULL)
		{
			return 404;
		}

		return View::make('gpa-calc.show')
		->with('title', "Gpa calculator for ".strtolower($meta_data->faculty_name). " department of".strtolower($meta_data->department_name)." level ". $level)
		->with('course_outline', $course_outline_entries)
		->with('meta_data', $meta_data);
	}

	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}