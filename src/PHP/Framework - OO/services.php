<?php
    require_once("action/ServicesAction.php");

    $action = new ServicesAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
Voici mes services
<?php
    require_once("partial/footer.php");