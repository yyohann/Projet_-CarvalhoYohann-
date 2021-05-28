<?php
	require_once("action/HomeAction.php");

	$action = new HomeAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>

	

	<p>Bienvenue !</p>
	<P>Le jeu à fonctionnement très simple</P>
	<p>Vous commencez votre partie avec 70pv, 10 de shield et 5 de mana</p>
	<p>vous commencez avec 4 cartes et à chaque fin de tour une nouvelle carte arrivera dans votre main en plus d'un de mana supplémentaire</p>
	<p>le jeu est "endless", c-a-d, à chaque fin de combat un nouveau démarrera</p>
	<p>un nombre d'ennemi aléatoire apparaîtra jusqu'a 4 maximum </p>
	<p>À chaque nouvelle partie, vous récupérerez 5pv</p>
	<h3>À vous d'allez le plus loin possible</h3>

	<p id="note">*Notez qu'il y a actuellement peut de cartes beaucoup plus arriveront dans le futur</p>

