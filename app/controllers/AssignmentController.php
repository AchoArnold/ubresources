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

		$assignments = Assignment::whereLevel($profile->level)->orderBy('created_at', 'dsc')->get();
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
	 * Store a newly created assignment.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::user()->is_admin())
		{
			$assignment = new assignment;
			$assignment->author_id = Auth::user()->id;
			$assignment->title = Input::get('title');
			$assignment->content = Input::get('content');

			if( assignment::whereassignmentUri(Str::slug($assignment->title))->first() )
				$assignment->assignment_uri = Str::slug($assignment->title).'-'. date('Y-m-d');
			else
				$assignment->assignment_uri =  Str::slug($assignment->title );

			if($assignment->save())
				return Redirect::to('assignment/'.$assignment->uri)
				->with('message', 'assignment created successfully!');
			else
			{
				return Redirect::back()
				->with('error','Sorry "assignment" cannot be created at the moment');
			}
		}
		return View::make('shared.404')
		->with('title', "Sorry your request cannot be processed");
	}

	/**
	 * Show the form for editing the a assignment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($uri)
	{
		if (Auth::user()->is_admin())
		{
			$assignment = Assignment::whereUri($uri)->firstOrFail();
			return View::make('assignment.edit')
			->with('assignment', $assignment)
			->with('title', $assignment->course->name .' Assignment');		}

		return View::make('shared.404')
		->with('title', "Sorry your request cannot be processed");
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($uri)
	{
		if(Auth::user()->is_admin())
		{
			$assignment = assignment::whereassignmentUri($uri)->firstOrFail();
			$assignment->title = Input::get('title');
			$assignment->content = Input::get('content');
			if($assignment->save())
				return Redirect::to('assignment/'.$assignment->uri)
				->with('message', 'assignment Updated successfully!');
			else
			{
				return  Redirect::back()
				->with('error', 'Sorry assignment cannot be edited at the moment');
			}
		}

		return View::make('shared.404')
		->with('title', "Sorry your request cannot be processed");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($uri)
	{
		if(Auth::user()->is_admin())
		{
			$assignment = assignment::whereassignmentUri($uri)->firstOrFail();
			if($assignment->delete())
				return Redirect::to('assignment')
				->with('message', 'assignment deleted successfully!');
			else
			{
				return Redirect::back()
				->with('error', 'Sorry assignment cannot be deleted');
			}
		}
		return View::make('shared.404')
		->with('title', "Sorry your request cannot be processed");
	}
}