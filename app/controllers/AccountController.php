<?php

class AccountController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$profile =  Profile::whereUserId(Auth::user()->id)->first();
		if($profile == NULL)
			$profile = new Profile();
		$faculty_data = CourseOutline::departments();
		return View::make('account.edit')
		->with ('title', 'Edit profile')
		->with('faculty_data',$faculty_data)
		->with('profile',$profile);
	}

	public function password()
	{
		return View::make('account.password')
		->with('title', 'Change account password');
	}



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$profile = Profile::whereUserId(Auth::user()->id)->first();
		$faculty_data = CourseOutline::departments();
		if($profile == NULL)
			$profile = new Profile();

		$profile->name = Input::get('name');
		$profile->telephone = Input::get('telephone');
		$profile->faculty_id = Input::get('faculty');
		$profile->department_id =  Input::get('department');
		$profile->level = Input::get('level');
		$profile->sex =  Input::get('sex');
		$profile->location = Input::get('location');
		$profile->user_id = Auth::user()->id;

		if ($profile->save())
		{
			return Redirect::back()
			->with('message', 'Profile Updated Successfully')
			->with('faculty_data',$faculty_data)
			->with('profile',  Profile::whereUserId(Auth::user()->id)->first());
		}
	}

	public function update_password()
	{
		$user = User::find(Auth::user()->id)->first();

		if( Hash::check(Input::get('old_password'), $user->password) )
		{
			$user->password = Hash::make(Input::get('password'));
			if($user->save())
			{
				return Redirect::back()
			   ->with('message', 'Password Updated Successfully');
			}
		}
		return Redirect::back()
		->with('error', 'Incorrect password for '.Auth::user()->username);
	}
}