<?php
    class User {
        private $firstName;
        private $lastName;

        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function getName() {
            return $this->firstName . " " . $this->lastName;
        }
    }

    class Student extends User {
        private $session;
        public static $MAX_LEN = 20;

        public function __construct($firstName, $lastName, $session) {
            parent::__construct($firstName, $lastName);
            $this->session = $session;
        }

        public function getName() {
            return parent::getName() . "(" . $this->session . ")";
        }
    }

    // Appel d'une fonction/variable statique : Student::$MAX_LEN;

    $user = new Student("John", "Smith", "H2021");
    echo $user->getName();