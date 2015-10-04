<?php
//PDO database connection 
$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');
if($db_connect){

//fetch all

	$sql = 'DELETE FROM user_data WHERE email = :email' ;
	$stmt =$db_connect->prepare($sql);


//perform query


//fetching the result all
$stmt->execute(array(':email'=>'varun@gmail.com'));
echo $stmt->rowCount();

}

?>