<?php
function finddir($dir)
{
	$files = array();
	if(is_dir($dir))
	{
		if($handle = opendir($dir))
		{
			while(($file = readdir($handle)) !== false)
			{
				if($file != "." && $file != "..")
				{
					if(is_dir(rtrim($dir,'/').'/'.$file))
					{
						$files["file"] = finddir(rtrim($dir,'/').'/'.$file);
					}else{
						$files[] = rtrim($dir,'/').'/'.$file;
					}
				}
			}
			closedir($handle);
		}
	}
	return $files;
}
print_r(finddir("D:/"));



















