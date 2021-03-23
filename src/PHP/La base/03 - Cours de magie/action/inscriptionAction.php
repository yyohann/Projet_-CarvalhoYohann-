<?php
    function execute() {
        $counter = file_get_contents("counter.txt");
        $showSuccess = false;

        if (!empty($_POST["name"])) {
            $showSuccess = true;
            $line = $_POST["name"] . ";" . $_POST["course"] . ";" . $_POST["message"] . "\n";
            file_put_contents("inscriptions.txt", $line, FILE_APPEND);
        }

        return compact("counter", "showSuccess");
    }