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
		return View::make('account.create')
		->with('title', 'Join the UB Resources vibrant community')
		->with('tab', 'join');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validate = User::validate_join(Input::all());
     	if ( $validate->passes() ){
     		$username = User::whereUsername(Input::get('username'))->first();
     		if($username)
     		{
     			return Redirect::back()
     			->withInput()
     			->with('error', 'Username "'.Input::get('username').'" already taken please chose another username');
     		}

     		$email = User::whereRecoveryEmail(Input::get('email'))->first();
     		if($email)
     		{
     			return Redirect::back()
     			->withInput()
     			->with('error', 'Email "'.Input::get('email').'" has already been used please chose another email');
     		}


     		$user = new User;
     		$user->username = Input::get('username');
     		$user->password = Hash::make(Input::get('password'));
     		$user->recovery_email = Input::get('email');
     		if($user->save())
     		{
     			Auth::attempt(Input::only('username', 'password'));
     			return Redirect::to('account/edit')
     			->with('message', 'Successfully created profile');
     		}
     	}

     	else
		{
			return Redirect::back()
			->withInput()
			->with('error', $validate->messages());
		}
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
		if(empty($profile))
			$profile = new Profile();
		$faculty_data = Timetable::departments();
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
		$profile->matriculation = Str::upper(Input::get('matriculation'));

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
		$user = Auth::user();

		//return Input::get('old_password');
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

	public function login()
	{
		return View::make('account.login')
		->with('title', 'Sign in to your UB Resources account');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::intended('/');
	}

	public function post_login()
	{
		if(Auth::attempt(Input::only('username', 'password')))
		{
			return Redirect::intended('/');
		}
		else
		{
			$data = User::whereRecoveryEmail(Input::get('username'))->first();
			if($data)
			{
				$auth_array = array('username' => $data->username, 'password' => Input::get('password'));
				if( Auth::attempt($auth_array) )
				{
					return Redirect::intended('/');
				}
			}
		}

		return Redirect::back()
	   ->withInput()
	   ->with('error', "Invalid username or password");
	}

	public function json_login(){
		$username = Input::get('username');
		$password = Input::get('password');

		if(Auth::attempt( ['username' => $username, 'password' => $password] )) {
			$user      =  Auth::user();
			$profile  =  Profile::whereUserId(Auth::user()->id)->first();
			$results  =  Result::get_results_json(Auth::user()->id);
			$assignments = Assignment::whereLevel($profile->level)->get();

			if (empty($profile)) {
				$profile="{'error': 'profile information is not available for this user'}";
			}
			else {
				$profile = $profile->toArray();
			}

			Auth::logout();
			return Response::json(['user' => $user->toArray(), 'profile' => $profile,
				'results' =>$results, 'assignments' => $assignments ]);
		}
		else {
			$data = User::whereRecoveryEmail(Input::get('username'))->first();
			if($data)
			{
				if( Auth::attempt( ['username' => $data->username, 'password' => Input::get('password')]) )
				{
					$user = Auth::user();
					Auth::logout();
					return Response::json($user);
				}
			}
		}

		return '';
	}
}