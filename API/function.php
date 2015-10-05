<?php

function getData($find){

$movies = array(
	'Premam' => 'nivin pauly',
	'Drishyam' =>'mohanlal',
	'Ennu ninde moideen'=>'prithvirraj');

	foreach($movies as $movie=>$actor)
	{
		if($movie==$find){
			return $actor;
		}
	}
}


?>