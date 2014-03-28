<?php

class TimetableTableSeeder extends Seeder{
	public function run(){
		DB::table('timetables')->insert(array(
			array('id'=>1, 'department_id'=>'1', 'level' => '300', 'course_id' =>'1', 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00','venue' =>'U-Block A', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>2, 'department_id'=>'1', 'level' => '300', 'course_id' =>'2', 'day' =>'3', 'start_at' =>'07:00:00', 'end_at' => '09:00:00', 'venue' =>'U-Block A', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>3, 'department_id'=>'2', 'level' => '200', 'course_id' =>'3', 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U-Block B', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>4, 'department_id'=>'2', 'level' => '200', 'course_id' =>'1', 'day' =>'5', 'start_at' =>'07:00:00', 'end_at' => '09:00:00', 'venue' =>'U-Block B', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>5, 'department_id'=>'3', 'level' => '300', 'course_id' =>'8', 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CRBLK 2 150 A','created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
			array('id'=>6, 'department_id'=>'4', 'level' => '300', 'course_id' =>'1', 'day' =>'6', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'Amphi 600', 'created_at' => '2014-03-26 09:37:30', 'updated_at' =>'2014-03-26 09:37:30'),
		));
	}
}