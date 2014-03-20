<?php

class PastQuestion extends Eloquent{
	protected $fillable = array('department_id', 'level','course_code','type', 'date');
}