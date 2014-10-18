<?php

class Result extends Eloquent
{
	public function user() {
		return $this->belongsTo('User');
	}

	public static function get_results($user_id, $semester) {
      $lists = DB::table('results')
      	->join('courses', 'courses.id', '=', 'results.course_id')
      	->join('course_outlines', 'course_outlines.course_id',  '=', 'results.course_id')
      	->where('results.user_id', '=', $user_id)
      	->where('results.semester', '=', $semester)
      	->orderBy('results.semester', 'asc')
      	->get();

      return $lists;
	}

}