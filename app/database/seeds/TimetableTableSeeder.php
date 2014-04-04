<?php

class TimetableTableSeeder extends Seeder{
	public function run(){
		DB::table('timetables')->insert(array(
			array('id'=>'16', 'department_id'=>'1', 'level' => '300', 'course_id' =>'6', 'day' =>'4', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>'17', 'department_id'=>'1', 'level' => '300', 'course_id' =>'10', 'day' =>'4', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Block II 150 B', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>'18', 'department_id'=>'1', 'level' => '300', 'course_id' =>'11', 'day' =>'4', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U-Block A', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>'19', 'department_id'=>'1', 'level' => '300', 'course_id' =>'9', 'day' =>'4', 'start_at' =>'15:00:00', 'end_at' => '19:00:00',  'venue' =>'CR Block II 150 B', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05')

			


		));
	}
}