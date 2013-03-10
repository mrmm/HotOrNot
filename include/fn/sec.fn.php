<?php
// Entry securisation function
function Sec($var) {
	return addslashes(htmlspecialchars(mysql_escape_string(stripslashes(strip_tags($var)))));
}
?>