<?php

class CourseOutlineTableSeeder extends Seeder{
	public function run(){
		$id = 37;
		DB::table('course_outlines')->insert(array(

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF409'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),


			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF407'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF419'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF405'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF417'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),


			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF415'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF423'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF411'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('CEF403'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF435'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF433'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF431'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF429'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF427'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),


			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF409'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF425'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF423'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),


			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF421'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF419'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF417'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF415'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF413'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF407'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF405'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF403'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'2', 'level' => '400', 'status' => '1', 'course_id' =>self::courseId('EEF401'), 'credit_value' =>'4','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),


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