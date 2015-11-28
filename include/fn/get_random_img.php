<?php
	function get_random_img($img_number,$dbo){
		$query="SELECT * FROM  `pictures` ";
		// $dbo->query($query);
		$img_list=array();
		foreach ($dbo->query($query) as $row) {
			array_push ($img_list,$row['id']);
		}
		
		$count=1;
		$slected_img = array_rand ( $img_list ,  $img_number);
		// print_r($slected_img);
		foreach ($dbo->query($query) as $row) {
			
			if(($count<$img_number)){
			if(in_array($row['id'],$slected_img)){
				$count ++;
				
				?><center>
				<table class="HotOrNot">
					<tr>
						<td>
							<img src="<?php echo $row['path'] ?>"><br>
							<!-- Rating : <?php echo $row['rate'] ?>-->
						</td>
					</tr>
					<tr>
						<td><br><br><center>
							<form action="img_rating.php" method="POST" id="rateForm">
								<input type="hidden" name="img_id" value="<?php echo $row['id'] ?>">
								<button class="Hot" onClick="submitForm('rateForm');">HOT</button> OR 
								
							</form>
							<button class="Not" onClick="reload();">NOT</button>
						</td>
					</tr>
				</table></center>
				<?php
			}
		}}
	}
?>
