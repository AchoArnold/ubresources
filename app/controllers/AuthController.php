<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('shared.login')
		->with('title', 'Sign in to your UB Resoruces account');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('shared.join')
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
		return 'post-join';
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
				return Redirect::intended('gist');
		}
		else
		{
			$temp = User::whereRecoveryEmail(Input::get('username'))->first();
			if($temp)
			{
				$auth_array = array('username' => $temp->username, 'password' => Input::get('password'));
				if( Auth::attempt($auth_array) )
				{
					return Redirect::intended('gist');
				}
			}
		}

		return Redirect::back()
	   ->withInput()
	   ->with('error', "Invalid username or password");
	}
}