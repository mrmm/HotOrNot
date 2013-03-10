<?php
function get_img_lists($dir){ // $dir is the path to directory to scan
	 
	//get all image files with a .jpg extension.
	$images = glob($dir . "*.jpg");
	
	return $images;
}


//print each file name
/* 
foreach($images as $image)
{
	echo "- ".$image."<br>";
} 
*/

?>