<?php

class CourseTableSeeder extends Seeder{
	public function run(){
		DB::table('courses')->insert(array(
			array('id'=>1, 'department_id'=>'1', 'name' => 'Linear Algebra', 'short_name' =>'CEF201', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>2, 'department_id'=>'3', 'name' => 'Programming', 'short_name' =>'CEF207', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>3, 'department_id'=>'1', 'name' => 'Probability', 'short_name' =>'CEF301', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>4, 'department_id'=>'2', 'name' => 'Database Management System', 'short_name' =>'CEF309', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>5, 'department_id'=>'1', 'name' => 'Analysis', 'short_name' =>'CEF204', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30')
		));
	}
}