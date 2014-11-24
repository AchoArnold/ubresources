<?php

class CourseOutlineTableSeeder extends Seeder{
	public function run(){
		$id = 31;
		DB::table('course_outlines')->insert(array(

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF411'), 'specialty' => 'software', 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
		));
	}

	public static function courseId($id)
	{
		$course = Course::whereShortName($id)->first();
		if ($course)
			return $course->id;
		else{
			return 111;
		}

	}
}