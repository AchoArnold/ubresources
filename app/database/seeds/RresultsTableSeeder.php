<?php

class ResultsTableSeeder extends Seeder{

	public function run(){
		$id =1;
		DB::table('results')->insert(array(

			array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF201'), 'semester' =>'1', 'ca' => '20', 'exam' => '45', 'grade' => 'B', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF203'), 'semester' =>'1', 'ca' => '30', 'exam' => '42', 'grade' => 'B+', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF205'), 'semester' =>'1', 'ca' => '16', 'exam' => '52', 'grade' => 'B', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF207'), 'semester' =>'1', 'ca' => '22', 'exam' => '52', 'grade' => 'A', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF209'), 'semester' =>'1', 'ca' => '23', 'exam' => '60', 'grade' => 'A', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF211'), 'semester' =>'1', 'ca' => '25', 'exam' => '52', 'grade' => 'B+', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('EEF217'), 'semester' =>'1', 'ca' => '16', 'exam' => '47', 'grade' => 'B', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('ENG101'), 'semester' =>'1', 'ca' => '22', 'exam' => '59', 'grade' => 'B+', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),


         # Second Semester
         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF202'), 'semester' =>'2', 'ca' => '23', 'exam' => '65', 'grade' => 'A', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF204'), 'semester' =>'2', 'ca' => '20', 'exam' => '56', 'grade' => 'B+', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF206'), 'semester' =>'2', 'ca' => '21', 'exam' => '39', 'grade' => 'B', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('CEF208'), 'semester' =>'2', 'ca' => '19', 'exam' => '44', 'grade' => 'B', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('EEF210'), 'semester' =>'2', 'ca' => '24', 'exam' => '42', 'grade' => 'B', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),

         array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('EEF218'), 'semester' =>'2', 'ca' => '24', 'exam' => '49', 'grade' => 'B+', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34'),


          array('id'=>$id++, 'user_id' => '28', 'course_id' => self::courseId('ENG102'), 'semester' =>'2', 'ca' => '24', 'exam' => '54', 'grade' => 'B+', 'year' => '2012', 'created_at' => '2014-07-01 10:07:34', 'updated_at' =>'2014-07-01 10:07:34')

		   )
      );
	}

	public static function courseId($id)
	{
	   $course = Course::whereShortName($id)->first();
      if ($course)
         return $course->id;
      return 6;
   }
}

class Course extends Eloquent{
}