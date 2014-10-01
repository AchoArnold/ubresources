<?php

class Result extends Eloquent
{
	public function user()
	{
		return $this->belongsTo('User');
	}
}