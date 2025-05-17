<?php

class nilai {

    public static $value = 0;
    public $total;
    public $target;

    public function __construct($args = []) {
         self::$value++;
         $this->total = $args['total'] ?? $this->total;
         $this->target = $args['target'] ?? $this->target;
    }

    public function __destruct() {
        self::$value--;
        echo 'halo man' . $this->total .'<br>';
    
    }
}


class test extends nilai {
    public $total = 1;
    public $target = 2;
}


class test2 extends nilai {
    public $total = 2;
    public $target = 3;
}

class test3 extends nilai {
    public $total = 3;
    public $target = 4;
}


$test = new test(['total' => 10, 'target' => 20]);
$test2 = new test2(['total' => 20, 'target' => 30]);
$test3 = new test3(['total' => 30, 'target' => 40]);


echo "Total: " . $test->total . "<br>";
echo "Target: ". $test->target ."<br>";
echo "<br>";
echo "Total: " . $test2->total . "<br>";    
echo "Target: ". $test2->target ."<br>";
echo "<br>";
unset($test2);
echo "Total: ". $test3->total . "<br>";
echo "Target: ". $test3->target ."<br>";
echo "<br>";
echo "Value: " . test::$value . "<br>";

?>