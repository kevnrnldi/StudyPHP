<?php

class kendaraan {
    var $merk;
    var $tipe;
    var $warna;
    var $pintu;
    var $roda;

    function bagusSaatHujan() {
        return true;
    }
  }

class mobil extends kendaraan {
    var $merk = "Toyota";
    var $tipe = "GR Yaris";
    var $warna = "Merah";
    var $pintu = 2;
    var $roda = "4";
    var $convertible = false;

    function bagusSaatHujan() {
        return !$this->convertible;
    }
  }

class motor extends kendaraan {
    var $merk = "Yamaha";
    var $tipe = "R6";
    var $warna = "Hitam";
    var $pintu = 0;
    var $roda = "2";

    function bagusSaatHujan() {
        return false;
    }
  }

$mobil = new mobil();
$motor = new motor();
$mobil->merk = "Toyota";
$mobil->tipe = "GR Yaris";
$motor->merk = "Yamaha";
$motor->tipe = "R6";

echo "Mobil: " . $mobil->merk . " " . $mobil->tipe . "<br>";
echo "Motor: " . $motor->merk . " " . $motor->tipe . "<br>";

echo "Mobil bagus saat hujan: " . ($mobil->bagusSaatHujan() ? "Ya" : "Tidak") . "<br>";
echo "Motor bagus saat hujan: " . ($motor->bagusSaatHujan() ? "Ya" : "Tidak") . "<br>";

?>