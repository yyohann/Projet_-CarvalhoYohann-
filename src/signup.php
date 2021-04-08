<?php

    require_once("action/signupAction.php");

	$action = new signupAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>


<h1>Inscription</h1>

<div class="signup-form-frame">
	<form action="signup.php" method="post">
		<?php
			if ($data["hasConnectionError"]) {
				?>
				<div class="error-div"><strong>Erreur : </strong>Inscription erronée</div>
				<?php
			}
		?>

		<div class="form-label">
			<label for="username">Nom d'usager : </label>
		</div>
		<div class="form-input">
			<input type="text" name="username" id="username" />
		</div>
		<div class="form-separator"></div>

		<div class="form-label">
			<label for="password">Mot de passe : </label>
		</div>
		<div class="form-input">
			<input type="password" name="pwd" id="password" />
		</div>
		<div class="form-separator"></div>

		<div class="form-label">
			<label for="password2">Confirmer le mot de passe : </label>
		</div>
		<div class="form-input">
			<input type="password" name="pwd2" id="password2" />
		</div>
		<div class="form-separator"></div>

		<div class="form-label">
			&nbsp;
		</div>
		<div class="form-input">
			<button type="submit">S'inscrire</button>
		</div>
		<div class="form-separator"></div>

		<p>
			Déjà un compte ? <a class="connect" href="login.php">Se connecter</a>
		</p>

	</form>
</div>