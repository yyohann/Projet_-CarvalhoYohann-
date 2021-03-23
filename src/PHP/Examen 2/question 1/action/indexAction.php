<?php
    function execute() {
        $names = file_get_contents("data/names.txt");
        $showSuccess = false;


        if (!empty($_POST["searchBox"])){
            $result = array();
            if($_POST["searchBox"][0] == "/"){
                $showSuccess = true;
                $line ="\n" . str_replace("/","",$_POST["searchBox"]);
                file_put_contents("data/names.txt", $line, FILE_APPEND);
            }
            else{
                $names = explode("\n",$names);
                foreach($names as $name){
                    if (strpos($name, $_POST["searchBox"]) !== FALSE) {
                        $result[] = $name;
                    }
                }
            }  
            return compact("result"); 
        }
    }
  