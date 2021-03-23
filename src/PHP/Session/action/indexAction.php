<?php
	session_start();

	function execute() {
		$email = null;
		$connectionError = false;

		if (!empty($_SESSION["email"] )) {
			$email = $_SESSION["email"];
		}

		// Si elle n'existe pas encore, alors initialise ma variable de session
		if (empty($_SESSION["isConnected"])) {
			$_SESSION["isConnected"] = false;
		}

		// isset = !empty()
		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {

				$email = $_POST["courriel"];
				$_SESSION["isConnected"] = true;
				$_SESSION["email"]  = $email;
			}
			else {
				$connectionError = true;
			}
		}

		return compact("email", "connectionError");
	}