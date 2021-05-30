<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class signupAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$hasConnectionError = false;

			$required = array('username', 'pwd', 'pwd2');
		

			if (isset($_POST["username"])) {
				
				foreach($required as $field) {
					if (empty($_POST[$field])) {
						$hasConnectionError = true;
						return compact("hasConnectionError");
					}
				} 
				if($_POST["pwd"] == $_POST["pwd2"]){

		
					$password = password_hash($_POST["pwd"], PASSWORD_BCRYPT);
					$a = UserDAO::createProfile($_POST["username"],$password);
					if ($a == "ERREUR") {
						echo("ERREUR : UN COMPTE POSSEDE DEJA CE NOM !");
					}
					


				}
				else {
					$hasConnectionError = true;
				}
			}

			return compact("hasConnectionError");
		}
	}
