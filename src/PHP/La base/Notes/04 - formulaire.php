<?php
	$showResult = false;

	// $_POST[""]
	if (!empty($_GET["info"]) && $_GET["info"] == "123") {
		$showResult = true;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if ($showResult) {
				?>
				<div style="color:green">
					Well done!
				</div>
				<?php
			}
		?>
		<form action="04 - formulaire.php" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>
