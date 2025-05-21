<?php 



require __DIR__ . '/../vendor/autoload.php';

use Faker\Factory as Faker;

$faker = Faker::create();

for ( $i = 0; $i < 20; $i++) {
    echo '<br>'; 
    echo $faker->name.'<br>';
    echo $faker->address.'<br>';
    echo '<br>';
}

