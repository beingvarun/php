<?php
//PDO database connection 
$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');
if($db_connect){

//fetch all

	$sql = 'UPDATE user_data SET client_name=:name WHERE email="varun@gmail.com"' ;
	$stmt =$db_connect->prepare($sql);


//perform query


//fetching the result all
$stmt->execute(array(':name'=>'james faulkner'));
echo $stmt->rowCount();

}

?>