<?php

class PastQuestionTableSeeder extends Seeder{
	public function run(){
		$id =1;
		DB::table('past_questions')->insert(array(
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'22', 'type' => '2', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/22', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'24', 'type' => '2', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/24', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'25', 'type' => '1', 'date'=>' 02/07/2012', 'file_path' => 'assets/past_questions/1/1/200/1/25', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'25', 'type' => '11', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/25', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'23', 'type' => '2', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/23', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'35', 'type' => '2', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/35', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'35', 'type' => '2', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/35', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),

			array('id'=>$id++, 'department_id'=>'1', 'level' => '200', 'course_id' =>'26', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/1/1/200/1/26', 'semester'=>'1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s'))
		));

	}
}