<?php

class AboutController extends BaseController {

	public function index()
	{
		return View::make('shared.about')
		->with('title', 'About UBresources');
	}

}