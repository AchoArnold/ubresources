<?php

class FacultyTableSeeder extends Seeder{
	public function run(){
		DB::table('faculties')->insert(array(
			array('id'=>1, 'name'=>'Engineering and Technology', 'short_name' => 'FET'),
			array('id'=>2, 'name'=>'College of Technology', 'short_name' => 'COT')
		));
	}
}