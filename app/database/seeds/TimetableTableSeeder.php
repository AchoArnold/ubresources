<?php

class TimetableTableSeeder extends Seeder{

	public function run(){
		$id =1;
		DB::table('timetables')->insert(array(

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF204'), 'day' =>'3', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Block II 100A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('FRE102'), 'day' =>'4', 'start_at' =>'11:30:00', 'end_at' => '14:30:00',  'venue' =>'All Halls<br/><em> Group I</em>-11:30 - 13:30<br/><em> Group II</em>-14:00 - 16:00', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF308'), 'day' =>'8', 'start_at' =>'15:00:00', 'end_at' => '18:00:00',  'venue' =>'CR Block II 50D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CVE100'), 'day' =>'10', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'All Halls', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF314'), 'day' =>'10', 'start_at' =>'15:00:00', 'end_at' => '18:00:00',  'venue' =>'Amphi 750', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF304'), 'day' =>'11', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'Amphi 600', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF208'), 'day' =>'11', 'start_at' =>'11:30:00', 'end_at' => '14:30:00',  'venue' =>'CR Block II 50C and<br/>CR Block II 50D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('EEF210'), 'day' =>'12', 'start_at' =>'11:30:00', 'end_at' => '14:30:00',  'venue' =>'CR Block II 50C and<br/>CR Block II 50D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('ENG102'), 'day' =>'4', 'start_at' =>'08:00:00', 'end_at' => '12:30:00',  'venue' =>'All Halls<br/><em> Group I</em>-08:00 - 10:00<br/><em> Group II</em>-10:30 - 12:30', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),


			array('id'=>$id++, 'department_id'=>	self::departmentId('CEF310'), 'level' => '300', 'course_id' => self::courseId('CEF310'), 'day' =>'15', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'Amphi 750', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=>	self::departmentId('EEF316'), 'level' => '300', 'course_id' => self::courseId('EEF316'), 'day' =>'16', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Block II 150 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=>	self::departmentId('CEF202'), 'level' => '200', 'course_id' => self::courseId('CEF202'), 'day' =>'17', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'Amphi 600', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=>	self::departmentId('CEF306'), 'level' => '300', 'course_id' => self::courseId('CEF306'), 'day' =>'17', 'start_at' =>'08:00:00', 'end_at' => '11:00:00',  'venue' =>'Amphi 750', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=>	self::departmentId('CEF206'), 'level' => '200', 'course_id' => self::courseId('CEF206'), 'day' =>'18', 'start_at' =>'15:00:00', 'end_at' => '18:00:00',  'venue' =>'Amphi 600', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=>	self::departmentId('CEF312'), 'level' => '300', 'course_id' => self::courseId('CEF312'), 'day' =>'18', 'start_at' =>'15:00:00', 'end_at' => '18:00:00',  'venue' =>'Amphi 600', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34')

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

class Course extends Eloquent
{
}