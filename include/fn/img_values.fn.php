<?php

function img_values($id=-1,$dbo){
	if($id != -1){
		$query="SELECT * FROM  `pictures` WHERE id='".$id."';";
		foreach ($dbo->query($query) as $row) {
			return $row;
		}
	}else{	
			$query= "SELECT * FROM  `pictures` ORDER BY  `pictures`.`rate` DESC";
			return $dbo->query($query);
	}
}

?>