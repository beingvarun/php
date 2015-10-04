<?php
$concerts = array(
	array('title'=>"the magic flute", 'time'=>1232456789),
	array('title'=>'great to see you', 'time'=>879798988080),
	array('title'=>'we are good', 'time'=>1124566677));
$data = json_encode($concerts);
echo $data;
echo "</br>";
$data= json_decode($data,true);
print_r($data);


?>