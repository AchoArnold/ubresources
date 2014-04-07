<?php
	class Compress{

	public static function zipFolder($folder, &$zipFile, $subfolder = null)
	{
   	if ($zipFile == null) {
        // no resource given, exit
        return NULL;
    	}
    	// we check if $folder has a slash at its end, if not, we append one
      $temp = str_split($folder);
      $folder .= end($temp) == "/" ? "" : "/";
      $temp = str_split($subfolder);
    	$subfolder .= end($temp) == "/" ? "" : "/";
    	// we start by going through all files in $folder
    	$handle = opendir($folder);
    	while ($f = readdir($handle))
    	{
       	if ($f != "." && $f != "..")
        	{
              if (is_file($folder . $f))
              {
                  // if we find a file, store it
                  // if we have a subfolder, store it there
                  if ($subfolder != null)
                      $zipFile->addFile($folder . $f, $subfolder . $f);
                  else
                      $zipFile->addFile($folder . $f);
              }
              elseif (is_dir($folder . $f))
              {
                 // if we find a folder, create a folder in the zip
                 $zipFile->addEmptyDir($f);
                 // and call the function again
                Compress::zipFolder($folder . $f, $zipFile, $f);
              }
        	}
   	}
	}

}