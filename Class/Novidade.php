<?php
    class Novidade {

        public $email;
        public $id;

        public function __construct($email="", $id=0) {
            $this->id = $id;
            $this->email = $email;
        }

        public function setEmail($email = ""){
            $this->email = $email;
        }
        public function setId($id = 0){
            $this->id = $id;
        }


        public function getEmail(){
            return $this->email;          
        }
        public function getId(){
            return $this->id;
        }
    }
