<?php

//config file
include ("include/config.inc.php");

$img_obj = img_values(POST_v('img_id'),$dbo);
$img_rate = $img_obj['rate']+1;

$query="UPDATE  `pictures` SET  `rate` =  '". $img_rate ."' WHERE  `pictures`.`id` ='".POST_v('img_id')."';";
echo $query;
$dbo->exec($query);

header("Location:index.php");

?>