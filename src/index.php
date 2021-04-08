<?php
    require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
	//echo(password_verify("test",'$2y$10$dPxMAPPpzzK5ARFRvoNf9.ClF/IJg6L6MzOFBuHRRKF1lTUtqTxzS'));
	require_once("partial/header.php");
?>

	<h1>Bienvenue sur le jeu Lays the prise</h1>

	<p>Jeu fait pour projet synthese</p>
	<p>Dans le cadre d'un projet pour le cours de B65 au CVM</p>
	