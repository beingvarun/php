<?php
//usage of autoload.php          
include_once('autoloader.php');
$test1 = new Test1();
$test2 = new Test2();
$test3 = new Test3();
$test4 = new First('Johns');
echo $test4->beat();




?>