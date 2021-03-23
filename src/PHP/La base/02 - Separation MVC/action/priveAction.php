<?php

    function execute() {
        $version = "1.0";

        // 4 espions
        $spyList = [];
        $spyList[] = "Ethan Hunt"; // push!
        $spyList[] = "Austin Powers";
        $spyList[] = "Jason Bourne";
        $spyList[] = "James Bond";

        return compact("version", "spyList");
    }
