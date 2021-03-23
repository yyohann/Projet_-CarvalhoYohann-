<?php
    require_once("action/indexAction.php");

    $data = execute();

?>
<html>
	<head>
		<title>La basse-cour</title>
		<link rel="stylesheet" href="css/global.css">
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Bienvenue à la basse-cour</h1>
		<div class="frame">
			<div id="container">	
				<?php
					if (sizeof($data["chickens"]) > 0) {
						foreach ($data["chickens"] as $pos) {
							?>
							<img class="chicken" style="top:<?= $pos["y"] ?>px;left:<?= $pos["x"] ?>px"></img>
							<?php
						}
					}	
				?>
			</div>
		</div>	
	</body>
</html>