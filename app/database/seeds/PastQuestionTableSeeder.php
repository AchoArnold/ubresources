<?php

class PastQuestionTableSeeder extends Seeder{
	public function run(){
		$id = 37;
		DB::table('past_questions')->insert(array(

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF409'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF409'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF409'), 'type' => '1', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF409'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF405'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF405'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('EEF409'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('EEF409'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('EEF405'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('EEF405'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF401'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF401'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF401'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF401'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF411'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF411'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF407'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF407'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF403'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF403'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

		array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'course_id' =>self::courseId('CEF403'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/400/2/'.self::courseId('CEF403'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),


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