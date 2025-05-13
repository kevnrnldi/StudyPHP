<?php

 class user {

    var $firstname;
    protected $lastname;
    private $location;


    function isiLocation($value) {
        $this->location = $value;
    }

    function tempatTinggal() {
        return $this->location;
    }
    
};

class pemanggilan extends user {
    var $firstname;
    var $lastname;
    function fullname() {
        return $this->firstname . " " . $this->lastname;
    }
};

$u = new user();
$s = new pemanggilan();
$s->firstname = "Yudi";
$s->lastname = "Setiawan";
$s->isiLocation("Papua");
echo "User: " . $s->fullname() . "<br>";
echo "User: " . $s->tempatTinggal() . "<br>";

?>