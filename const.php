<?php
class time{

    const DAY_IN_SEC = 60 * 60 * 24;


    function timer() {
        return time() + self::DAY_IN_SEC;
    } 

}

echo "Current time: " . time::DAY_IN_SEC . "<br>";
$waktu = new time();
echo "Time after 1 day: " . $waktu->timer() . "<br>";
    


?>