<!DOCTYPE html>
<html lang="fr">
    <head>
        <link href="css/global.css" rel="stylesheet" />
		<title>lays the prise</title>
		<meta charset="utf-8" />
    </head>
    <body>
		<div class="header">
				<div class="username-section">
					Bonjour, <?= $data["username"] ?> !
				</div>
				<div class="clear"></div>
				<div class="menu">
					<ul>
						<?php
							if (!$data["isLoggedIn"]) {
								?>
								<li><a href="index.php">Accueil du site</a></li>
								<li><a href="login.php">Se connecter</a></li>
								<li><a href="signup.php">Se creer un compte</a></li>
								<?php
							}
						?>	
						<?php
							if ($data["isLoggedIn"]) {
								?>
								<li><a href="home.php">Mon accueil perso</a></li>
								<li><a href="game.php">Jouer</a></li>
								<li><a href="index.php">Accueil du site</a></li>
								<li><a href="?logout=true">Déconnexion</a></li>
								<?php
							}
						?>
					</ul>
				</div>
			</div>

		<div class="container">