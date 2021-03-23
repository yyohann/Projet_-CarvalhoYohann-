<?php
    require_once("action/indexAction.php");

    $data = execute();

    $data["pageTitle"] = "Accueil";
?>
<html lang="fr">
    <head>
        <title>Spy Lookup Service</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<form action="" method="post">
				<div class="search-line">
					<div class="form-left">
						<input type="text" name="searchBox" value="" />
					</div>



					<div class="form-right">
						<input type="image" src="images/search-btn.png" />
					</div>
					<div class="clear"></div>
				</div>
			</form>
			<ul>
				<?php
					foreach($data["result"] as $person) {
						?>
						<li><?= $person ?></li>
						<?php
					}
				?>
			</ul>
			

		</div>
	</body>
</html>