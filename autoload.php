<?php 


function myAutoLoad($class){

    if(preg_match("/\A\w+\Z/",$class))
        include 'classes/' . $class .'.php';
        {
    }
}

spl_autoload_register('myAutoLoad');

$dataku = new Testing();
echo 'dataku' . $dataku;