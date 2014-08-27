<?php

class GistController extends \BaseController {

	/**
     * Instantiate a new UserController instance.
     */
   public function __construct()
   {
        $this->beforeFilter('auth', array('except' => ['index', 'show']));
        $this->beforeFilter('csrf', array('on' => ['post', 'patch', 'delete']));
   }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$gists =  Gist::orderBy('created_at', 'dsc')->get();
		return View::make('gist.index')
		->with('title', 'Latest news in the University of Buea')
		->with('gists', $gists);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($uri)
	{
		$gist =  Gist::whereGistUri($uri)->firstOrFail();

		if(!Cache::has($gist->gist_uri))
		{
			$short_url = Isgd::shorten(Request::url());
			if (!$short_url["errorMessage"])
				Cache::forever($gist->gist_uri, $short_url["shortURL"]);
		}

		$comments = Comment::whereGistId($gist->id)->orderBy('updated_at', 'dsc')->get();
		return View::make('gist.show')
		->with('title', $gist->title .' | UBresources')
		->with('gist', $gist)
		->with('comments', $comments);
	}

	public function create()
	{
		if(Auth::user()->is_admin())
		{
			return View::make('gist.create')
			->with('title', 'create a news article');
		}
		return View::make('shared.404')
		->with('title', "Sorry Page cannot be found");
	}

	/**
	 * Store a newly created gist.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::user()->is_admin())
		{
			$gist = new Gist;
			$gist->author_id = Auth::user()->id;
			$gist->title = Input::get('title');
			$gist->content = Input::get('content');

			if( Gist::whereGistUri(Str::slug($gist->title))->first() )
				$gist->gist_uri = Str::slug($gist->title).'-'. date('Y-m-d');
			else
				$gist->gist_uri =  Str::slug($gist->title );

			if($gist->save())
				return Redirect::to('gist/'.$gist->uri)
				->with('message', 'Gist created successfully!');
			else
			{
				return Redirect::back()
				->with('error','Sorry "gist" cannot be created at the moment');
			}
		}
		return View::make('shared.404')
		->with('title', "Sorry your request cannot be processed");
	}

	/**
	 * Show the form for editing the a gist.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($uri)
	{
		if (Auth::user()->is_admin())
		{
			$gist = Gist::whereGistUri($uri)->firstOrFail();
			return View::make('gist.edit')
			->with('gist', $gist)
			->with('title', "Edit ". $gist->title);
		}

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
			$gist = Gist::whereGistUri($uri)->firstOrFail();
			$gist->title = Input::get('title');
			$gist->content = Input::get('content');
			if($gist->save())
				return Redirect::to('gist/'.$gist->uri)
				->with('message', 'Gist Updated successfully!');
			else
			{
				return  Redirect::back()
				->with('error', 'Sorry gist cannot be edited at the moment');
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
			$gist = Gist::whereGistUri($uri)->firstOrFail();
			if($gist->delete())
				return Redirect::to('gist')
				->with('message', 'Gist deleted successfully!');
			else
			{
				return Redirect::back()
				->with('error', 'Sorry Gist cannot be deleted');
			}
		}
		return View::make('shared.404')
		->with('title', "Sorry your request cannot be processed");
	}
}