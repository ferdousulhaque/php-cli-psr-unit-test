<?php

// AutoLoader
require './vendor/autoload.php';

use Src\Calculate;

try{
    $t = new Calculate();
    echo $t->add(3,9);
}catch (\Exception $ex){
    echo $ex->getMessage();die;
}

