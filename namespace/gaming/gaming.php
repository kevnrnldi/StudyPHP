<?php 


namespace gaming;

include "../coding/code.php";

use coding\Coding;

class Gaming {

    public static function playing(){
        echo 'saya bermain game';
    }
}


Gaming::playing();

$panggil = new Coding();
$panggil->playing();