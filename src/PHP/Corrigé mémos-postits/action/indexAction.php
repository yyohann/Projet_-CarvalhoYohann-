<?php
	session_start();

	function execute() {				
		if (isset($_POST["text"])) {
			$post = array();
			$post["text"] = $_POST["text"];
			$post["x"] = $_POST["x"];
			$post["y"] = $_POST["y"];
			$_SESSION["posts"][] = $post;
		}
		else if (isset($_GET["clear"])) {
			session_unset();
			session_destroy();
			session_start();
		}
		
		if (!isset($_SESSION["posts"])) {
			$_SESSION["posts"] = array();
		}
		
		$memos = $_SESSION["posts"];
		
		return compact("memos");
	}

