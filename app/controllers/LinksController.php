<?php

class LinksController extends BaseController {

	public function showPage()
	{
		return View::make('links.index')->with('title', 'Links to other useful materials');
	}

}