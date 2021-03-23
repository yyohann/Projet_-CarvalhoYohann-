<?php

    function execute() {
        // traiter l'information du formulaire
        // et retourner le résultat pour influencer l'affichage
        $version = "1.0";
        $hasError = false;

        if (!empty($_POST["champCourriel"])) {
            if ($_POST["champCourriel"] == "a@a.com" &&
                $_POST["champMotDePasse"] == "AAAaaa111") {

                header("location:prive.php");
                exit;
            }
            else {
                $hasError = true;
            }
        }

        return compact("version", "hasError");
    }

    /*
        Dictionnaire :
        $data = [];
        $data["version"] = "1.0";
        $data["hasError"] = true;
    */