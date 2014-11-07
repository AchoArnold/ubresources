	<?php

class CourseTableSeeder extends Seeder{
	public function run(){
		//$id = 55
		$id = 89;
		DB::table('courses')->insert(array(

			/* */

			array('id' => $id++, 'department_id' => '2', 'name' => 'Power Electronics Lab', 'short_name' => 'EEF401', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Electronics Machines I', 'short_name' => 'EEF403', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Micro-controllers and Microprocessors', 'short_name' => 'EEF405', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Power System Components', 'short_name' => 'EEF407', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Technical Drawing', 'short_name' => 'EEF413', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Radio and Television', 'short_name' => 'EEF415', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Basic Telecoms Lab', 'short_name' => 'EEF417', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Radio and Television Lab', 'short_name' => 'EEF419', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Coding Theory', 'short_name' => 'EEF421', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Switching Theory', 'short_name' => 'EEF423', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Antenna and Propagation', 'short_name' => 'EEF425', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Feedback Systems', 'short_name' => 'EEF409', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Digital Telecoms I', 'short_name' => 'EEF427', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Mobile Telecoms', 'short_name' => 'EEF429', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Radio and Communications', 'short_name' => 'EEF431', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Signal Processing', 'short_name' => 'EEF433', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '2', 'name' => 'Telecoms Lab I', 'short_name' => 'EEF435', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),





			array('id' => $id++, 'department_id' => '1', 'name' => 'Operational Research', 'short_name' => 'CEF401', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Unix Administration', 'short_name' => 'CEF403', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Software Engineering', 'short_name' => 'CEF411', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Digital Electronics Lab', 'short_name' => 'CEF423', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Technical Writing', 'short_name' => 'CEF415', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Switching & Routing Protocols', 'short_name' => 'CEF417', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Analysis and Design of Algorithms', 'short_name' => 'CEF405', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Computer Networks Lab', 'short_name' => 'CEF419', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Object Oriented Modeling', 'short_name' => 'CEF407', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => '1', 'name' => 'Fundamentals of Artificial Intelligence', 'short_name' => 'CEF409', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),


			array('id' => $id++, 'department_id' => 2, 'name' => 'Maths for Engineering', 'short_name' => 'EEF209', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Signals and Systems', 'short_name' => 'EEF205', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Physics for Engineering', 'short_name' => 'EEF211', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Algebra', 'short_name' => 'EEF313', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Electromagnetic Measurements', 'short_name' => 'EEF213', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),


			array('id' => $id++, 'department_id' => 2, 'name' => 'Analog Electronics I', 'short_name' => 'EEF201', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Digital Electronics I', 'short_name' => 'EEF203', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Analog Electronics II Lab', 'short_name' => 'EEF305', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

			array('id' => $id++, 'department_id' => 2, 'name' => 'Digital Electronics Lab', 'short_name' => 'EEF307', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ),

		/*	*/

		));
	}
}