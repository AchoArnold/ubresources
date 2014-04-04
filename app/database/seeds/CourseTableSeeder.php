<?php

class CourseTableSeeder extends Seeder{
	public function run(){
		$id = 35;
		DB::table('courses')->insert(array(

			array('id' => $id++, 'department_id' => '1', 'name' => 'Use of English I', 'short_name' => 'ENG101', 'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05'),
			array('id' => $id++, 'department_id' => '1', 'name' => 'Civics and Ethics','short_name' => 'CVE100', 'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05'),
			array('id' => $id++, 'department_id' => '1', 'name' => 'Use of English II','short_name' => 'ENG102', 'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05'),
			array('id' => $id++, 'department_id' => '1', 'name' => 'Sports','short_name' => 'SPT100', 'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05'),
			array('id' => $id++, 'department_id' => '1', 'name' => 'Functional French I','short_name' => 'FRE101', 'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05'),
			array('id' => $id++, 'department_id' => '1', 'name' => 'Functional French II','short_name' => 'FRE102', 'created_at'=>'2014-04-01 11:35:05', 'updated_at' => '2014-04-01 11:35:05')
		));
	}
}