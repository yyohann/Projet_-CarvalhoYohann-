<?php
	// snippet phpt = php tags

	$username = "John";
	// $username = 123;
	// $username = true;

	if ($username === 0) {
		$username = $username . " Smith";
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />

	</head>
	<body>
		<?php
			// phpe = php echo <?php echo $username;
		?>
		Nom : <?= $username ?>
	</body>
</html>
