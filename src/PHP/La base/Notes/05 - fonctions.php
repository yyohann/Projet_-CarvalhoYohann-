<?php
	function hasher($mot, $optionalParam = null) {
		$hash = $mot;

		if (!empty($optionalParam)) {
			$hash .= $optionalParam;
		}

		// md5
		return sha1($hash);
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<?php
			$result = hasher("test", "asdf");
			echo $result;
		?>
	</body>
</html>
