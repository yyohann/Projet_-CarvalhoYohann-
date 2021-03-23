<?php
    session_start();

    session_unset(); // Détruit mes variables!
    session_destroy(); // Détruit/invalide le cookie

    // $username = "asdf";
    // $_SESSION["nomUsager"] = "johnny";

    echo $_SESSION["nomUsager"];