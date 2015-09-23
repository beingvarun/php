<?php
//usage of autoload.php          
function __autoload($classname){

	include_once $classname'.php';
}
$test1 = new Test1();
$test2 = new Test2();
$test3 = new Test3();
$test4 = new First();



?>