<?php
//PDO database connection 
$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');
if($db_connect){

//fetch all

	$sql = 'SELECT client_name, client_id FROM user_data WHERE email= ?';
	$stmt =$db_connect->prepare($sql);


//perform query

$stmt ->execute(array('varunrajvn007@gmail.com'));
$result = $stmt->fetch();
print_r( $result);
}

?>