<?php
//Function to get PDO Object
function GetPDO($type,$host,$base,$user,$pass){
	try{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$par=$type.":host=".$host.";dbname=".$base;
		$bdd = new PDO($par, $user, $pass, $pdo_options);
		$bdd->exec('SET NAMES utf8');

	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
	return $bdd;
}
?>
