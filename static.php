<?php

class car { 
     static $brand = ["Toyota", "BMW", "Porsche"];
    private static $wheels = 4;
    public static function getWheels() {
        return self::$wheels;
    }

    public static function getBrand() {
        return self::$brand;
    }
}

class test extends car {
}

echo "Brand: " . car::getBrand()[0] . "<br>";
echo "Wheels: " . car::getWheels() . "<br>";

test::$brand[]="Mercedes";
echo implode(", ", test::$brand) . "<br>";


?>