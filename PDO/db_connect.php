<?php
//PDO database connection 
$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');
if($db_connect){

//fetch all

	$sql = 'SELECT client_name, client_id FROM user_data WHERE email= :email';
	$stmt =$db_connect->prepare($sql);


//perform query

$stmt->bindValue(':email', 'varunrajvn007@gmail.com');
$stmt->execute();
$result=$stmt->fetch();
print_r( $result);
}

?>