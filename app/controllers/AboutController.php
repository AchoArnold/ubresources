<?php

class AboutController extends BaseController {

	public function showPage()
	{
		return View::make('shared.about')
		->with('title', 'About UBresources');
	}

}