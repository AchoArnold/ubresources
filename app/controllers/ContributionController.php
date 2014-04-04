<?php

class ContributionController extends \BaseController {

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
	public function show()
	{
		return View::make('contribute.index')
		->with('title', 'Help this site grow by making an awesome contribution');
	}


	public function contributePastQuestion()
	{
		return View::make('contribute.single')
		->with('title', 'Easily submit your past question papers here')
		->with('tab', 'past questions')
		->with('link', 'https://github.com/najela/ubresources');
	}

	public function contributeTimetable()
	{
		return View::make('contribute.single')
		->with('title', 'Easily submit your timetable to us here')
		->with('tab', 'timetables')
		->with('link', 'https://github.com/najela/ubresources');
	}

	public function contributeCourseOutline()
	{
		return View::make('contribute.single')
		->with('title', 'Easily submit your course outline here')
		->with('tab', 'course outlines')
		->with('link', 'https://github.com/najela/ubresources');
	}

	public function contributeError()
	{
		return View::make('contribute.single')
		->with('title', 'Easily submit you errors and suggestions here')
		->with('tab', 'errors');
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