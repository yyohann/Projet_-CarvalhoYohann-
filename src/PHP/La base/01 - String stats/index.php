<?php
	$shownLen = 0;

	if (!empty($_GET["searchBox"])) {
		$shownLen = strlen($_GET["searchBox"]);
	}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<form action="" method="get">
				<div id="analyze-icon"></div>
				<div id="analyze-result">
					<?php
						if ($shownLen > 0) {
							?>
							La longueur est : <?= $shownLen ?>
							<?php
						}
						else {
							?>
							Entrez une chaîne de caractères et appuyez sur analyser
							<?php
						}
					?>
				</div>
				<div id="search-line">
					<div>
						<input type="text" value="<?= $shownLen > 0 ? $shownLen : "" ?>" name="searchBox" placeholder="Texte à analyser" />
					</div>
					<div class="btn">
						<button>Analyser</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>