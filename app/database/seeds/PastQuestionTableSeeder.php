<?php

class PastQuestionTableSeeder extends Seeder{
	public function run(){
		$id =4;
		DB::table('past_questions')->insert(array(
			array('id'=>3, 'department_id'=>'1', 'level' => '300', 'course_id' =>'7', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/FET/1/2/1.odt', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
			array('id'=>$id, 'department_id'=>'1', 'level' => '300', 'course_id' =>'7', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/FET/1/2/'.$id++.'.odt', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
			array('id'=>$id, 'department_id'=>'1', 'level' => '300', 'course_id' =>'7', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/FET/1/2/'.$id++.'.odt', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
			array('id'=>$id, 'department_id'=>'1', 'level' => '300', 'course_id' =>'7', 'type' => '1', 'date'=>' 02/07/2013', 'file_path' => 'assets/past_questions/FET/1/2/'.$id.'.odt', 'semester'=>'2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s'))
		));

	}
}