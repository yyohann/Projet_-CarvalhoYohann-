<?php
    require_once("action/CommonAction.php");

    class LoginAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $hasConnectionError = false;

			if (isset($_POST["username"])) {
				if ($_POST["username"] == "john" && $_POST["pwd"] == "qwerty") {
                    $_SESSION["visibility"] = CommonAction::$VISIBILITY_ADMINISTRATOR;
                    
					header("location:admin-index.php");
					exit;
				}
				else {
					$hasConnectionError = true;
				}
			}

			return compact("hasConnectionError");
        }
    }