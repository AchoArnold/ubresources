<?php

class PastQuestion extends Eloquent
{
	public static function departments()
	{
		$lists = DB::table('past_questions')
			->select('level', 'department_id','departments.name AS department_name', 'faculty_id', 'faculties.name AS faculty_name')
    		->join('departments', 'departments.id', '=', 'past_questions.department_id')
    		->join('faculties', 'faculties.id', '=', 'departments.faculty_id')
         ->distinct()
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
                			sort($data[$j][2][$k][2]);
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

      return $data;
    }

    public static function past_question_array($department_id, $level, $semester)
    {
      $lists = DB::table('past_questions')
      	->select('level', 'short_name', 'name','semester', 'course_id')
      	->join('courses', 'courses.id', '=', 'past_questions.course_id')
      	->where('level', '=', $level)
      ->where('semester', '=',  $semester)
      	->where('past_questions.department_id', '=', $department_id)
      ->distinct()
      	->get();

      return $lists;
    }

    public static function meta_data($faculty_id, $department_id)
    {
      $meta = DB::table('faculties')
      			->select('faculties.name as faculty_name', 'departments.name as department_name')
      			->join('departments','departments.faculty_id', '=', 'faculties.id')
                        ->where('faculties.id', '=', $faculty_id)
                        ->where('departments.id', '=', $department_id)
                        ->get();
      return $meta;
    }

    public static function compress($faculty_id,$department_id,$level, $semester, $course_id)
    {
      $questions = DB::table('past_questions')
        ->select('courses.short_name')
        ->join('courses', 'courses.id', '=', 'past_questions.course_id')
        ->where('courses.id', '=', $course_id)
        ->where('past_questions.department_id', '=', $department_id)
        ->where('semester', '=', $semester)
        ->where('level', '=', $level)
        ->first();

      if ($questions  == NULL )
        return 'hello';
        //return NULL;

      $zip_file = new ZipArchive();
      $zip_folder = public_path().'/packages/past_questions/'.$faculty_id.'/'.$department_id.'/'.$level.'/'.$semester.'/'.$course_id;
      $zip_name = storage_path().'/past_questions/'.$questions->short_name.'-past-questions.zip';

      $zip_file ->open($zip_name, ZIPARCHIVE::CREATE);
      Compress::zipFolder($zip_folder, $zip_file);

      if ($zip_file->close())
        return $zip_name;
      return NULL;
    }
}