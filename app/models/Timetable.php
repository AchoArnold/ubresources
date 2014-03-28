<?php

class Timetable extends Eloquent
{

	public static function departments()
	{
		$lists = DB::table('timetables')
			->select('level', 'department_id', 'departments.name AS department_name', 'faculty_id', 'faculties.name AS faculty_name')
    		->join('departments', 'departments.id', '=', 'timetables.department_id')
    		->join('faculties', 'faculties.id', '=', 'departments.faculty_id')
    		->get();

      $i = 0;
      $data = Array();

   	foreach ($lists as $list)
   	{
   		$filled = false;
     		// Check if faculty is already present
      	for ($j = 0; $j < count($data); $j++)
      	{
        		// If faculty is present
         	if($data[$j][0] == $list->faculty_id)
         	{
         		$filled = true;
            	// Check for the same department
            	for($k = 0; $k < count($data[$j][2]); $k++)
            	{
               	if( $list->department_id == $data[$j][2][$k][0])
                	{
                		for($l = 0; $l < count($data[$j][2][$k][2]); $l++)
                		{
                			if( $list->level == $data[$j][2][$k][2][$l] )
                			{
                				break;
                			}
                		}

                		if( $l == count($data[$j][2][$k][2]))
                		{
                			$data[$j][2][$k][2][] = $list->level;
                		}
                		break;
         	      }
            	}
     
            	// If department was not found
            	if($k == count($data[$j][2]))
            	{
	              	$data[$j][2][$k][0] = $list->department_id;
	              	$data[$j][2][$k][1] = $list->department_name;
	              	$data[$j][2][$k][2][0]  = $list->level;
            	}
         	}
         }

         // if faculty was not found
         if( $j == count($data) && $filled == false )
         {
            $data[$i][0] = $list->faculty_id;
            $data[$i][1] = $list->faculty_name;
            $data[$i][2][0][0] = $list->department_id;
            $data[$i][2][0][1] = $list->department_name;
            $data[$i][2][0][2][0]  = $list->level;
            $i++;
         }
      }

      echo "<pre>";
      return var_dump($data);
	}
}