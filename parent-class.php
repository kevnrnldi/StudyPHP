<?php

class house {

    public static $isBig = true;

    public static function price(){
        return "Rp. 10.000.000.000";
    }

    public static function isConvertible() {
        return "This house is convertible.";
    }
}

class houseTest extends house {



    public static function price() {
        if(self::$isBig) {
            echo  parent::price();
        } else {
            echo "Rp.1.000.000.000";
        }
        
    }


    public static function buyingHouse() {
        echo "Buying a house is a big decision.";
        echo parent::isConvertible();
        echo "I buy this house.";
    }
}


echo house::price() . "<br>";
echo houseTest::price() . "<br>";

house::$isBig = false;
echo houseTest::price() ."<br>";

echo house::isConvertible() . "<br>";
echo houseTest::buyingHouse() . "<br>";







?>