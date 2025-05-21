<?php 


interface bumbum {
    public function jalan();
    public function berhenti();
}

class car implements bumbum {
    public function jalan() {
        echo "mobil berjalan";
    }
    public function berhenti() {
        echo "mobil berhenti";
    }
}


$test = new car();
$test->jalan();
echo "<br>";
$test->berhenti();



?>