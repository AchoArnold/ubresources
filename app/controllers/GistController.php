<?php

class GistController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$gists =  Gist::all();
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
		$comments = Comment::whereGistId($gist->id)->get();
		
		return View::make('gist.show')
		->with('title', $gist->title .' | UBresources')
		->with('gist', $gist)
		->with('comments', $comments);
	}

}