<?php

class DepartmentTableSeeder extends Seeder{
	public function run(){
		DB::table('departments')->insert(array(
			array('id'=>1, 'name'=>'Computer Engineering', 'faculty_id' => '1'),
			array('id'=>2, 'name'=>'Electrical Engineering', 'faculty_id' => '1'),
			array('id'=>3, 'name'=>'Computer Engineering', 'faculty_id' => '2'),
		));
	}
}