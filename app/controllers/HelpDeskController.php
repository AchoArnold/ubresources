<?php

class HelpDeskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('help-desk.index')
		->with('title', 'Ask us anything you need help with');
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
		if(Input::all())
		{
			$validate = HelpDesk::validate(Input::all());

       	if ( $validate->passes() )
       	{
       		$content = new HelpDesk;
       		$content->name = Input::get('name');
       		$content->email = Input::get('email');
       		$content->telephone = Input::get('telephone');
       		$content->content = Input::get('message');
				if($content->save())
				{
					Mail::later(200,'shared.email', array('email'=>Input::get('email'),'name' => Input::get('name'), 'telephone' =>Input::get('telephone'), 'mail_content' => Input::get('message')), function($message) {
		   			$message->to('arnold@archlinux.info', 'Web Master')->subject('UB Resources | Help Desk');
					});

					return Redirect::back()
					->with('message', 'Your message has been received successfully, we will respond to it as soon as possible!');
				}
				else
				{
					return Redirect::back()
					->withInput()
					->with('error', 'We are currently having problems with our server. Please send your message a little later');
				}
			}
			else
			{
				return Redirect::back()
				->withInput()
				->with('error', $validate->messages());
			}
		}
		else
		{
			return View::make('shared.404');
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		
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