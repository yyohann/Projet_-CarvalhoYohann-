<?php
	require_once("action/priveAction.php");

	$data = execute();

	require_once("partials/header.php");
?>

Vous êtes dans une page privée!!

<h2>Liste d'espions</h2>
<ul style="list-style-position:inside">
	<?php
		// var_dump($data["spyList"]);
		foreach($data["spyList"] as $spy) {
			?>
			<li><?= $spy ?></li>
			<?php
		}
	?>
</ul>


<?php
	require_once("partials/footer.php");