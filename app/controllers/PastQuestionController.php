<?php

class PastQuestionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$department_array = PastQuestion::departments();

		return View::make('past-questions.index')
		->with('title', 'Download past questions freely from here')
		->with('form_list', $department_array);
	}

	public function handle_form()
	{
		$faculty_id = Input::get('faculty');
		$department_id = Input::get('department');
		$level = Input::get('level');
		return Redirect::to('past-questions/'.$faculty_id.'/'.$department_id.'/'.$level);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function download($faculty_id, $department_id, $level)
	{
		$course_id = Input::get('course_id');
		$semester = Input::get('semester');
		//return public_path().'/packages/past_questions/'.$faculty_id.'/'.$department_id.'/'.$level.'/'.$semester.'/'.$course_id;
		$zip_file = PastQuestion::compress($faculty_id,$department_id,$level, $semester, $course_id);
		if($zip_file == NULL){
			return Redirect::back()
			->with('error', 'Sorry, your request cannot be processed at the moment. Please try again later');
		}

		return Response::download($zip_file);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($faculty_id, $department_id, $level)
	{

		$past_question_entries = PastQuestion::past_question_array($department_id, $level );
		if ($past_question_entries == NULL){
			return Response::view('shared.404',array('title'=>"Error: Request cannot be processed!"),404);
		}
		$meta_data = PastQuestion::meta_data( $faculty_id, $department_id );
		if($meta_data == NULL)
		{
			return 404;
		}

		return View::make('past-questions.show')
		->with('title', "PastQuestions for ".strtolower($meta_data[0]->faculty_name). " department of".strtolower($meta_data[0]->department_name)." level ". $level)
		->with('past_question', $past_question_entries)
		->with('meta_data', $meta_data)
		->with('level', $level);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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