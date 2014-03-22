<?php

class GistTableSeeder extends Seeder{
	public function run(){
		DB::table('gists')->insert(array(
			array('id'=>1, 'author_id'=>1, 'title' => 'Official School Reopening', 'content' =>'The official reopening date for the start of classes this  2013/2014 academic year is the <strong>14<sup>th</sup> of October 2013</strong>. Matriculation shall take place three weeks later on the 2<sup>nd</sup> of November. Please do check out the  official school calender at <a href="http://ubuea.cm/ub-academic-calendar/r">http://ubuea.cm/ub-academic-calendar/</a> for the dates of other important events', 'created_at'=>'2012-02-12 02:37:30', 'updated_at'=> '1986-03-19 02:37:30' )
		));
	}
}