<?php
include ("../include/config.inc.php");

$query="INSERT INTO  `pictures` (`id` ,`path` ,`rate`)VALUES";
$dbo->exec("TRUNCATE TABLE pictures;");
$images=get_img_lists("../images/");

foreach($images as $image)
{
	$query.="(NULL , '".substr($image, 3 , strlen($image)-1) ."', 0),";
	// echo "--------- <br>";
} 
$query[strlen($query)-1]=";";

echo ($query);

$dbo->exec($query);
?>