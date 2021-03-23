<?php
session_start();
function execute() {

  
    $chickens = $_SESSION["pos"];
    if (sizeof($chickens ) > 0) {
        foreach ($chickens as &$pos) {
            
            $pos["x"] = rand(1, 400);
            $pos["y"] = rand(1, 400);
         
        }
        $_SESSION["pos"][] = $pos;
    }
    else{
        $pos["x"] = rand(1, 400);
        $pos["y"] = rand(1, 400);
        $_SESSION["pos"][] = $pos;
    }
  
 
  
    return compact("chickens");
}
   