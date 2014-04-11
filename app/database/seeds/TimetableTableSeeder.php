<?php

class TimetableTableSeeder extends Seeder{
	public function run(){
		$id =1;
		DB::table('timetables')->insert(array( /*
			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'8', 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U-Block E', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'10', 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Block II 150 B', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'7', 'day' =>'1', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),


				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'9', 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'6', 'day' =>'2', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'Restau VI', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'7', 'day' =>'2', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'13', 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'LAB', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'13', 'day' =>'3', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'LAB', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'8', 'day' =>'3', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'11', 'day' =>'3', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U-Block F', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),

				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'6', 'day' =>'4', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'10', 'day' =>'4', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Block II 150 B', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'11', 'day' =>'4', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
				array('id'=>$id++, 'department_id'=>'1', 'level' => '300', 'course_id' =>'9', 'day' =>'4', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U-Block F', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05') */

				array('id'=>'15', 'depart ment_id'=>'1', 'level' => '200', 'course_id' =>'9', 'day' =>'1', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U-Block F', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05')

		));
	}
}