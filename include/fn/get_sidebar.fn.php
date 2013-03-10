<?php

function get_sidebar($dbo){
	//edit to show top rating images
	$top_number = 5;
	?>
	<div class="sidebar">
		<script>
			function hide_wm(id){
				document.getElementById("hwm"+id).style.display="none";
				// alert("Out : "+document.getElementById("hwm"+id).style.display);
			}
			function show_wm(id){
				document.getElementById("hwm"+id).style.display = null;
				// alert("Over : "+document.getElementById("hwm"+id).style.display);
			}
		</script>
		<br><div class="sidebar-title">Top rating pictures</div><br>
		<?php
			$top = img_values(-1,$dbo);
			$i=0;
			foreach ($top as $row) {
				if($i<$top_number){
					?>
						<img src="<?php echo $row['path'] ?>" style="width:100%; height:200px" onMouseOver="show_wm(<?php echo $i;?>);" onMouseOut="hide_wm(<?php echo $i;?>);"/>
						<img class="watermark" src="style/images/by-zouz-<?php echo($i+1);?>.png">
						<!--<img class="watermark" src="style/images/by-zouz.png" id="hwm<?php echo $i;?>" >-->
						<?php if($i != $top_number-1) { ?>
							<img class="hr-sidebar" src="style/images/hr_sidebar.png">
							
						<?php } ?>
					<?php
				}
				$i++;
			}
		
		?>
	
	</div>
	<?php
}

?>