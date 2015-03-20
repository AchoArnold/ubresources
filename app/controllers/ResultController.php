<?php

class ResultController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /result
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$course_outline_entries = Result::get_results(Auth::user()->id, 1);

		return View::make('results.index')
		->with('title', "First Semester Results for the academic year 2014/2015")
		->with('courses', $course_outline_entries);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /result/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /result
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /result/{id}
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
	 * GET /result/{id}/edit
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
	 * PUT /result/{id}
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
	 * DELETE /result/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}