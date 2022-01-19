<?php

    class User{
        private $username;
        private $password;
        private $age;

        public function __construct($username, $password){
            $this -> setUsername($username);
            $this -> setPassword($password);
        }

        public function setUsername($username){
            
            if(strlen($username) < 3 || strlen($username) > 16)
                throw new Exception("L'username deve essere maggiore di 3 caratteri e minore di 16");

            $this -> username = $username;
        }
        
        public function setPassword($password){

            if(ctype_alnum($password))
                throw new Exception("La password deve contenere un carattere speciale");

            $this -> password = $password;
        }

        public function setAge($age){

            if(!is_numeric($age))
                throw new Exception("L'età deve essere un valore numerico");
            $this -> age = $age;
        }

        public function getUsername(){
            return $this -> username;
        }
        
        public function getPassword(){
            return $this -> password;
        }
        
        public function getAge(){
            return $this -> age;
        }

        public function printMe(){
            echo $this . "<br>";
        }

        public function __toString(){
            return $this-> username . ": " . $this -> age . " [" . $this -> password . "]"; 
        }
    }

    try {

        $user1 = new User("Andrea","Paris_i");
        $user2 = new User("Francesco","cia?o");
        $user3 = new User("piero","cia+o");

        $user1 -> setAge(20);
        $user2 -> setAge(10);
        $user3 -> setAge(4);

        echo $user1 ."<br>";
        echo $user2 ."<br>";
        echo $user3 ."<br>";

    } catch (Exception $e) {

        echo $e . "<br><h1>" . $e -> getMessage() . "</h1>";

    }
?>