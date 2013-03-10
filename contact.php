<?php
//config file
include ("include/config.inc.php");

?>
<head>
	<?php
		include("head.php");
	?>
</head>
<body>
<div class="header">
<?php 
get_header();
?>
</div>
<div class="content" style="padding:25px;">
	<div class="content-title">About Us</div>
	<table>
			<tr>
				<td>
					<a href="index.php"><img src="style/images/hotornot-logo.png" style="width: 200px;height: 129px;">
				</td>
				<td style="border-left: 6px solid #E1440D;padding-left:20px;">
					This Application is developped by : <br><br>
		 			[+] Montacer Bac Informatique
		 			<br><br><br>
		 			Tel : -- --- ---
				</td>
			</tr>
	</table>
		
	
</div>
<?php get_sidebar($dbo); ?>

</body>