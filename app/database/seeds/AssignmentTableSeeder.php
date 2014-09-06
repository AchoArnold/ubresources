<?php

class AssigmentTableSeeder extends Seeder{
	public function run(){
		DB::table('assignments')->insert(array(
			array('id'=>1, 'author_id'=>7, 'content' => '<p>This is the assignment for the <strong>object oriented programming course (CEF306)</strong> in java given by Mr <em>MEGOZE MATHIEU HILAIRE</em>. This assignment is meant for the students of the faculty of Engineering and technology, department of computer engineering level 300. </p>Please download the assignment in pdf format by clicking <a href="/packages/assignments/java-assignment.pdf">here</a>. <blockquote>If you have any worries or proposed solutions, you can mention them by leaving a comment under this post. Thanks</blockquote>', 'course_id' =>self::courseId('CEF306'), 'level' => '300',  'date_given' => '2014-07-01 10:07:34', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34')
		));
	}

	public static function courseId($id)
	{
		$course = Course::whereShortName($id)->get();
		return $course[0]->id;

	}

	public static function departmentId($id)
	{
		$course = Course::whereShortName($id)->get();
		return $course[0]->department_id;
	}
}

class Course extends Eloquent{
}