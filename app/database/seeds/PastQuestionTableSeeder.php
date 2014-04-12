<?php

class PastQuestionTableSeeder extends Seeder{
	public function run(){
		$id =9;
		DB::table('past_questions')->insert(array(
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'36', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/2/36', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'37', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/2/37', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'29', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/2/29', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'32', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/32', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'32', 'type' => '2', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/32', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s'))

		));

	}
}