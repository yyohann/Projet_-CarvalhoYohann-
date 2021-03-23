<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>

		<?php
			for ($i = 0; $i < 150; $i++) {
				?>
				<div>
					<input type="radio" name="age" value="<?= $i ?>"> <?= $i ?>
				</div>
				<?php
			}

			$length = 10;

			while ($length > 0) {
				$length--;
				?>
				<div><?= $length ?></div>
				<?php
			}

			$tab = array(); // []
			$tab[] = "John"; // comme un push
			$tab[] = "Smith";

			// tab.forEach(element => {...})
			foreach ($tab as $element) {
				// phpr = contraire de phpt
				?>
				<div><?= $element ?></div>
				<?php
			}
		?>

	</body>
</html>
