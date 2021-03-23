<?php
	require_once("action/HomeAction.php");

	$action = new HomeAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>

	

	<p>Bienvenue !</p>
	

