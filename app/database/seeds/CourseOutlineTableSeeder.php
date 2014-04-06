<?php

class CourseOutlineTableSeeder extends Seeder{
	public function run(){
		$id = 31;
		DB::table('course_outlines')->insert(array(
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'status' => '2', 'course_id' =>'35', 'credit_value' =>'2','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'status' => '2', 'course_id' =>'36', 'credit_value' =>'4','semester'=>'2',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'status' => '2', 'course_id' =>'37', 'credit_value' =>'2','semester'=>'2',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'status' => '2', 'course_id' =>'38', 'credit_value' =>'2','semester'=>'2',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'status' => '2', 'course_id' =>'39', 'credit_value' =>'2','semester'=>'1',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'status' => '2', 'course_id' =>'40', 'credit_value' =>'2','semester'=>'2',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
		));
	}
}