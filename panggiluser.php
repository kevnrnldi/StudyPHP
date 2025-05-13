<?php

    class user {
        var $firstname;
        var $lastname;
        var $location;
        var $age;
        var $gender;


        function fullname() {
            return $this->firstname . " " . $this->lastname;
        }
    }

    class costumer extends user {
        var $age = 20;

        var $location = "Jakarta";
        var $gender = "Laki-laki";

        function fullname() {
            return $this->firstname . " " . $this->lastname . "(" . $this->age . ")";
        }
        
        function location() {
            return $this->location . " " . "(" . $this->gender . ")";
        }
    }

$s = new user();
    $s->firstname = "Siti";
    $s->lastname = "Aisyah";
    $s->age = "20";

 $U = new costumer();
    $U->firstname = "Budi";
    $U->lastname = "Santoso";
    $U->age = "25";


echo "User: " . $s->fullname() . "<br>";
echo "User2: ". $U->fullname() . "<br>";
echo "User2: ". $U->location() . "<br>";
?>