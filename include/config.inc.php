<?php
/* 
Including function  
====================================
*/
include("fn/file_list.fn.php"); //Function to list images list
include("fn/PDO.fn.php"); //Function to get PDO object
include("fn/get_random_img.php"); //Function to get random value from array
include("fn/get_header.fn.php"); //Function to get header value
include("fn/get_value.fn.php"); //Function to get GET or POST value
include("fn/img_values.fn.php"); //Function to get rate of img from ID
include("fn/get_sidebar.fn.php"); //Function to get side barre


/* 
PDO object  
====================================
*/
$dbo=GetPDO('mysql','localhost','zooz_webapp','root','');//Generating PDO object
?>