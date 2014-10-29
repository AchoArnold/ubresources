<?php

class TimetableTableSeeder extends Seeder{

	public function run(){

		DB::table('timetables')->truncate();

		$id =1;
		DB::table('timetables')->insert(array(

			// Monday
			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF201'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Block II 50H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF301'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('EEF213'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '00', 'course_id' => self::courseId('EF'), 'day' =>'1', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),







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