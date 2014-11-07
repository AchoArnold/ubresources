<?php

class TimetableTableSeeder extends Seeder{

	public function run(){

		DB::table('timetables')->truncate();

		$id =1;
		DB::table('timetables')->insert(array(

			// Monday
			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF201'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Block II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF301'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF213'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk II 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF421'), 'day' =>'1', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk II 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF211'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF415'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk I 50F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF203'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('EEF313'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),


			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF419'), 'day' =>'1', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),





			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF211'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF313'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF409'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk  I  50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF205'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF419'), 'day' =>'1', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF305'), 'day' =>'1', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF435'), 'day' =>'1', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF419'), 'day' =>'1', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF209'), 'day' =>'1', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF435'), 'day' =>'1', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF415'), 'day' =>'1', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'CR Blk I 100 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF419'), 'day' =>'1', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),








			// TuesDay
			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF201'), 'day' =>'2', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF301'), 'day' =>'2', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF203'), 'day' =>'2', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Block I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF433'), 'day' =>'2', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk II 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF303'), 'day' =>'2', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk I 150 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF311'), 'day' =>'2', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk I 150 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF201'), 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF309'), 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 150 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF315'), 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 150 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF205'), 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF403'), 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk I 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF433'), 'day' =>'2', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 50 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF207'), 'day' =>'2', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF207'), 'day' =>'2', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF415'), 'day' =>'2', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'Restau IV', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF301'), 'day' =>'2', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk II 50 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF417'), 'day' =>'2', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),





			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF305'), 'day' =>'2', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk I 150 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF417'), 'day' =>'2', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF417'), 'day' =>'2', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),


			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('EEF405'), 'day' =>'2', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF315'), 'day' =>'2', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF209'), 'day' =>'2', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF417'), 'day' =>'2', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'CR Blk I 50 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF417'), 'day' =>'2', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF401'), 'day' =>'2', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF211'), 'day' =>'2', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'CR Blk I 50 C', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF401'), 'day' =>'2', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),













			// WedNessDay
			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF205'), 'day' =>'3', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF433'), 'day' =>'3', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF413'), 'day' =>'3', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk I 50 E', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF305'), 'day' =>'3', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('ENG101'), 'day' =>'3', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('ENG101'), 'day' =>'3', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF409'), 'day' =>'3', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF415'), 'day' =>'3', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk I 50 C', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF205'), 'day' =>'3', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF305'), 'day' =>'3', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF401'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF203'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF315'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF427'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF403'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 E', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF211'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF313'), 'day' =>'3', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF307'), 'day' =>'3', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF401'), 'day' =>'3', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk II 50 C', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF429'), 'day' =>'3', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk I 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF307'), 'day' =>'3', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF305'), 'day' =>'3', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),


			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF209'), 'day' =>'3', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF305'), 'day' =>'3', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF307'), 'day' =>'3', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('CEF407'), 'day' =>'3', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

















			// Thursday
			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF207'), 'day' =>'4', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF313'), 'day' =>'4', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF407'), 'day' =>'4', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),






			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF201'), 'day' =>'4', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 100B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF203'), 'day' =>'4', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF313'), 'day' =>'4', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('EEF409'), 'day' =>'4', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'Amphi 150 D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF409'), 'day' =>'4', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'Amphi 150 D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF307'), 'day' =>'4', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF207'), 'day' =>'4', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF205'), 'day' =>'4', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF423'), 'day' =>'4', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF311'), 'day' =>'4', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF217'), 'day' =>'4', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF427'), 'day' =>'4', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk I 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF423'), 'day' =>'4', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('EEF405'), 'day' =>'4', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF313'), 'day' =>'4', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF405'), 'day' =>'4', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),













			// Friday
			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF209'), 'day' =>'5', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF421'), 'day' =>'5', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF301'), 'day' =>'5', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'Amphi 150 E', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF409'), 'day' =>'5', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF407'), 'day' =>'5', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('EEF307'), 'day' =>'5', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('CEF205'), 'day' =>'5', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk II 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF427'), 'day' =>'5', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '200', 'course_id' => self::courseId('ENG101'), 'day' =>'5', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('ENG101'), 'day' =>'5', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'CR Blk I 50 H', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF309'), 'day' =>'5', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'U Block E', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF203'), 'day' =>'5', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk II 50 B', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF425'), 'day' =>'5', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'CR Blk I 50 E', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('	EEF303'), 'day' =>'5', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'U Block D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF405'), 'day' =>'5', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'CR Blk I 50 A', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF425'), 'day' =>'5', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'CR Blk I 50 G', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF425'), 'day' =>'5', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'CR Blk II 50 C', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			// Saturday
			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF431'), 'day' =>'6', 'start_at' =>'07:00:00', 'end_at' => '09:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CEF313'), 'day' =>'6', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF431'), 'day' =>'6', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'CR Blk I 50 D', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '200', 'course_id' => self::courseId('EEF213'), 'day' =>'6', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'Lab', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF403'), 'day' =>'6', 'start_at' =>'09:00:00', 'end_at' => '11:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF403'), 'day' =>'6', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'U Block F', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF423'), 'day' =>'6', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '300', 'course_id' => self::courseId('CVE100'), 'day' =>'6', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '300', 'course_id' => self::courseId('CVE100'), 'day' =>'6', 'start_at' =>'13:00:00', 'end_at' => '15:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

			array('id'=>$id++, 'department_id'=> 2, 'level' => '400', 'course_id' => self::courseId('EEF423'), 'day' =>'6', 'start_at' =>'11:00:00', 'end_at' => '13:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('	CEF411'), 'day' =>'6', 'start_at' =>'15:00:00', 'end_at' => '17:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




			array('id'=>$id++, 'department_id'=> 1, 'level' => '400', 'course_id' => self::courseId('CEF411'), 'day' =>'6', 'start_at' =>'17:00:00', 'end_at' => '19:00:00',  'venue' =>'', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),



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

	public static function departmentId($id)
	{
		$course = Course::whereShortName($id)->first();
		return $course->department_id;
	}
}