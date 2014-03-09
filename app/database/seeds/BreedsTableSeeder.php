<?php

class BreedsTableSeeder extends Seeder{
	public function run(){
		DB::table('breeds')->insert(array(
			array('id'=>1, 'name'=>'Domestic'),
			array('id'=>2, 'name'=>'Persian'),
			array('id'=>3, 'name'=>'Siamese'),
			array('id'=>4, 'name'=>'Abyssinian'),
		));
	}
}