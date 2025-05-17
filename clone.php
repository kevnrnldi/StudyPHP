<?php


class Produk {
    public  $brand = "";
    public function __construct() {
        echo 'nilai dibuat';
    }

    public function __clone() {
        echo 'nilai diduplikat';

    }
}


$motor = new Produk();
$motor->brand = 'Yamaha';

echo '<br>' . $motor->brand . '<br>';


$motor2 = clone $motor;
$motor2 ->brand = 'BMW';
echo '<br>' . $motor2->brand;




?>