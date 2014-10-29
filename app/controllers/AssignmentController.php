<?php

class AssignmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /assignment
	 *
	 * @return Response
	 */
	public function index()
	{
		$profile =  Profile::whereUserId(Auth::user()->id)->first();
		if(empty($profile)){
			return View::make('assignment.index')
			->with('title', 'Assignments for courses in the University of Buea');
		}

		$assignments = Assignment::whereLevel($profile->level)->get();
		$meta_data = Timetable::meta_data( $profile->faculty_id, $profile->department_id );

		return View::make('assignment.index')
		->with('title', "Assignments for ".strtolower($meta_data[0]->faculty_name). " department of".strtolower($meta_data[0]->department_name)." level ". $profile->level)
		->with('assignments', $assignments);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /assignment/create
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user()->is_admin())
		{
			return View::make('assignment.create')
			->with('title', 'Create a new assignment article');
		}
		return View::make('shared.404')
		->with('title', "Sorry Page cannot be found");
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /assignment
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /assignment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($uri)
	{
		$assignment =  Assignment::whereUri($uri)->firstOrFail();

		return View::make('assignment.show')
		->with('title', $assignment->course->name .' Assignment')
		->with('assignment', $assignment);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /assignment/{id}/edit
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
	 * PUT /assignment/{id}
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
	 * DELETE /assignment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}