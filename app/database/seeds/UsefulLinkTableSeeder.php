<?php

class UsefulLinkTableSeeder extends Seeder{
	public function run(){
		$id = 1;
		DB::table('useful_links')->insert(array(
			array('id'=>$id++, 'author_id'=>'1', 'title' => 'Study Advice', 'content' => 'The <a href="http://www.reading.ac.uk" target="_blank">University of Reading</a> offers <a href="http://www.reading.ac.uk/internal/studyadvice/Studyresources/Time/sta-distractions.aspx" target="_blank">great study advice</a> on how to manage time and avoid distractions while studying etc', 'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05'),
			array('id'=>$id++, 'author_id'=>'1', 'title' => 'Raise Your GPA', 'content' => 'Raise your Grade point average easily by using this <a href="http://www.back2college.com/raisegpa.htm" target="blank">advanced GPA Calculator</a>',  'created_at' => '2014-04-01 11:35:05', 'updated_at' =>'2014-04-01 11:35:05')
		));
	}
}