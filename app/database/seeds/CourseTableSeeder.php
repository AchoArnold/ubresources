	<?php

class CourseTableSeeder extends Seeder{
	public function run(){
		$id = 41;
		DB::table('courses')->insert(array(

			array('id' => '21', 'department_id' => '2', 'name' => 'Sequence Control', 'short_name' => 'EEF315', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => 33, 'department_id' => '2', 'name' => 'Circuit Analysis', 'short_name' => 'EEF210', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => 28, 'department_id' => '2', 'name' => 'Basic Electronics', 'short_name' => 'EEF317', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => 34, 'department_id' => '2', 'name' => 'Basic Electronics Practicum', 'short_name' => 'EEF318', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => 13, 'department_id' => '2', 'name' => 'Sequence control Lab', 'short_name' => 'EEF314', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => 12, 'department_id' => '2', 'name' => 'Systems Engineering', 'short_name' => 'EEF316', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

		));
	}
}