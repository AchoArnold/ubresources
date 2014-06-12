<?php

class TimetableController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$department_array = Timetable::departments();

		return View::make('timetables.index')
		->with('title', 'Timetable for students in the University Of Buea')
		->with('form_list', $department_array);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function handle_form()
	{
		$faculty_id = Input::get('faculty');
		$department_id = Input::get('department');
		$level = Input::get('level');
		return Redirect::to('timetables/'.$faculty_id.'/'.$department_id.'/'.$level);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($faculty_id, $department_id, $level)
	{

		$timetable_entries = Timetable::timetable_array($department_id, $level );
		if ($timetable_entries == NULL){
			return  View::make('shared.404');
		}
		$meta_data = Timetable::meta_data( $faculty_id, $department_id );
		if($meta_data == NULL)
		{
			return  View::make('shared.404');
		}

		//return Response::json($timetable_entries);
		return View::make('timetables.show')
		->with('title', "Timetable for ".strtolower($meta_data[0]->faculty_name). " department of".strtolower($meta_data[0]->department_name)." level ". $level)
		->with('timetable', $timetable_entries)
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