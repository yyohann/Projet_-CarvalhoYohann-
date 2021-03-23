<html>
  <head>
	<title>GRR!</title>
  </head>
  <body>
    <?php
    session_start();
	if (!empty($_SESSION["nombre"])) {
		$_SESSION["nombre"]++;
	}
	else {
		$_SESSION["nombre"] = 1;
	}

	echo $_SESSION["nombre"];

    ?>
   <!-- <div><//?= $resultat ?></div> -->
   </body>
</html>
