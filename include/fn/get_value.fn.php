<?php

function GET_v($vname){
	return (isset($_GET[$vname])?$_GET[$vname]:NULL);
}

function POST_v($vname){
	return (isset($_POST[$vname])?$_POST[$vname]:NULL);
}
?>