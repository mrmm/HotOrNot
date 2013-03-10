<?php
function get_img_lists($dir){
	//path to directory to scan
	$directory = "images/";
	 
	//get all image files with a .jpg extension.
	$images = glob($directory . "*.jpg");
}
?>