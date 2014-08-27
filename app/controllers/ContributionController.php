<?php

class ContributionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('contribute.index')
		->with('title', 'Help this site grow by making an awesome contribution');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
			if($id == 'errors')
			{
				if(Input::has('description'))
				{
					$validate = Contribution::validate(Input::all());

			       	if ( $validate->passes() ) 
			       	{
						$content = new Contribution;
						$content->type = 3;
						$content->author_id = Input::get('email');
						$content->content = Input::get('description');

						if($content->save())
						{
							Mail::later(200,'shared.email', array('email'=>Input::get('email'), 'mail_content' => Input::get('description')), function($message) {
			    			$message->to('arnold@archlinux.info', 'Web Master')->subject('UB Resources | Errors && Suggestions');
							});

							return Redirect::back()
							->with('message', 'Your message has been received successfully, we will respond to it as soon as possible!');
						}
						else{
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
			}

			elseif($id == 'timetables' || $id == 'course-outlines' || $id == 'past-questions')
			{

				$file = Input::file('upload_file');
				$name =  time(). '-'. $file->getClientOriginalName();

				$validate = Contribution::validate_upload(Input::all());
	       	if ( $validate->passes() )
	       	{
					$content = new Contribution;
					switch ($id)
					{
						case 'past-questions':
							$content->type = 1;
							break;
						case 'course-outlines':
							$content->type =2;
							break;
						case 'timetables':
							$content->type = 3;
							break;
					}
					$content->author_id = Input::get('email');
					$content->content = $name;

					if($content->save() && $file->move(storage_path().'/uploads/'.$id, $name))
					{
						Mail::later(200,'shared.email', array('email'=>Input::get('email'), 'mail_content' => $content->content), function($message) {
		    			$message->to('arnold@archlinux', 'Web Master')->subject("UB Resources | Contributions");
						});
						return Redirect::back()
						->with('message', 'Your file  has been uploaded to us successfully. Thank you for your contribution');
					}
					else
					{
						return Redirect::back()
						->withInput()
						->with('error', 'We are currently having problems with our server. Please upload your file a little later');
					}
				}
				else
				{
					return Redirect::back()
					->withInput()
					->with('error', $validate->messages());
				}
			}
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
	public function show( $id )
	{
		if( $id == 'timetables')
		{
			return View::make('contribute.single')
			->with('title', 'Easily submit your timetable to us here')
			->with('tab', 'timetables')
			->with('link', 'http://goo.gl/iXpqTQ');
		}
		elseif ($id == 'past-questions')
		{
			return View::make('contribute.single')
			->with('title', 'Easily submit your past question papers here')
			->with('tab', 'past questions')
			->with('link', 'http://goo.gl/iXpqTQ');
		}
		elseif ( $id == 'course-outlines') {
			return View::make('contribute.single')
			->with('title', 'Easily submit your course outline here')
			->with('tab', 'course outlines')
			->with('link', 'http://goo.gl/iXpqTQ');
		}

		elseif ($id == 'errors') {
			return View::make('contribute.single')
			->with('title', 'Easily submit you errors and suggestions here')
			->with('tab', 'errors');
		}

		else
		{
			return "404";
		}
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