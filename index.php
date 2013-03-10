<?php
//config file
include ("include/config.inc.php");
include("head.php");
?>

<body>
<div class="header">
<?php 
	get_header();
?>
</div>
<div class="content">
	<div class="content-title">Acceuil</div>
	<?php
		//to load 2 Image u must pass 3 in the function parameter : get_random_img(3,$dbo);
		get_random_img(2,$dbo);
	?>
</div>
<?php get_sidebar($dbo); ?>

</body>