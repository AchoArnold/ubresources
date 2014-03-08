<?php

Class QuestionsController extends BaseController
{
	public $restful = true;

	public function get_index()
	{
		return View:make('home.index')->with('title', 'My First Laravel Site');
	}
}