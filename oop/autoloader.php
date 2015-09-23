<?php

function autoLoader($className){

$directories = array( '', 'test/');

$fileformats = array('%s.php', '%s.class.php', 'class.%s.php', '%s.inc.php');

foreach ($directories as $directory) {
	foreach($fileformats as $fileformat){
		 $path = $directory.sprintf($fileformat, $className);
		 if(file_exists($path)){
		 	include_once $path;
		 	return;
		 }
	}
}


}
spl_autoload_register('autoLoader');




?>