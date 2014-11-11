<?php

class PastQuestionTableSeeder extends Seeder{
	public function run(){
		$id =14;
		DB::table('past_questions')->insert(array(

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF307'), 'type' => '1', 'date'=>'2012', 'file_path' => 'assets/past_questions/1/1/300/1/'.self::courseId('CEF307'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF315'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/1/'.self::courseId('CEF315'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),


			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF310'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF310'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF310'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF310'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF304'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF304'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF304'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF304'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),


			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF312'), 'type' => '1', 'date'=>'2012', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF312'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF312'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF312'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF312'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF312'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF306'), 'type' => '1', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF306'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF313'), 'type' => '1', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF313'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF311'), 'type' => '1', 'date'=>'2012', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF311'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF311'), 'type' => '1', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF311'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF311'), 'type' => '2', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF311'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF311'), 'type' => '2', 'date'=>'2014	', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF311'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF311'), 'type' => '2', 'date'=>'2014	', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF311'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF301'), 'type' => '2', 'date'=>'2014	', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF301'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF301'), 'type' => '2', 'date'=>'2012', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF301'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF301'), 'type' => '2', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF301'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('EEF316'), 'type' => '2', 'date'=>'2012', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('EEF316'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('EEF316'), 'type' => '2', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('EEF316'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('EEF316'), 'type' => '1', 'date'=>'2013', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('EEF316'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('EEF316'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('EEF316'), 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>self::courseId('CEF305'), 'type' => '2', 'date'=>'2014', 'file_path' => 'assets/past_questions/1/1/300/2/'.self::courseId('CEF305'), 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),


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