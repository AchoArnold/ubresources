<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('account.login')
		->with('title', 'Sign in to your UB Resoruces account');
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

	public function logout()
	{
		Auth::logout();
		if( Request::header('referer') != NULL )
		{
			return Redirect::back()
		   ->with('message', 'You are now logged out');
		}
		else
			return Redirect::intended('/');
	}

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

     		$username = User::whereRecoveryEmail(Input::get('email'))->first();
     		if($username)
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
     	return '404';
	}

	public function post_login()
	{
		if(Auth::attempt(Input::only('username', 'password')))
		{
			if( Request::header('referer') != NULL )
			{
				return Redirect::back()
		      ->with('message', 'You are now logged in');
			}
			else
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
}