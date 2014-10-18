<?php

class GistTableSeeder extends Seeder{
	public function run(){
		$id =1;
		DB::table('results')->insert(array(

			array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF310'), 'semester' =>'1', 'ca' => '30',
                  'exam' => '50', 'grade' => 'A', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

            array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF304'), 'semester' =>'1', 'ca' => '23',
                  'exam' => '41', 'grade' => 'B', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

            array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF312'), 'semester' =>'1', 'ca' => '23',
                  'exam' => '20', 'grade' => 'C', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

            array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('EEF316'), 'semester' =>'1', 'ca' => '18',
                  'exam' => '49', 'grade' => 'B', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

            array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('EEF314'), 'semester' =>'1', 'ca' => '21',
                  'exam' => '53', 'grade' => 'B+', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

           array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF308'), 'semester' =>'1', 'ca' => '20',
                  'exam' => '40', 'grade' => 'B', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),




          array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF204'), 'semester' =>'2', 'ca' => '30',
                  'exam' => '50', 'grade' => 'A', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

          array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF204'), 'semester' =>'2', 'ca' => '30',
                  'exam' => '50', 'grade' => 'A', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

          array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF204'), 'semester' =>'2', 'ca' => '30',
                  'exam' => '50', 'grade' => 'A', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

          array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF204'), 'semester' =>'2', 'ca' => '30',
                  'exam' => '50', 'grade' => 'A', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

          array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF204'), 'semester' =>'2', 'ca' => '30',
                  'exam' => '50', 'grade' => 'A', 'year' => '2013', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34')


		));
	}

	public static function courseId($id)
	{
		$course = Course::whereShortName($id)->get();
		return $course[0]->id;

	}
}