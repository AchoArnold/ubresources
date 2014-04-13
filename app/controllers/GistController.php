<?php

class GistController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$gists =  Gist::remember(240)->get();
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
			Cache::forever($gist->gist_uri, Isgd::shorten(Request::url()));

		$comments = Comment::whereGistId($gist->id)->orderBy('updated_at', 'dsc')->get();
		return View::make('gist.show')
		->with('title', $gist->title .' | UBresources')
		->with('gist', $gist)
		->with('comments', $comments);
	}

}