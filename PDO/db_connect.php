<?php
//PDO database connection 
$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');
if($db_connect){

//fetch all

	$sql = 'INSERT INTO user_data(email, client_name, client_password, activated, login_time) VALUES(:email, :client_name, :client_password, :activated, NOW())' ;
	$stmt =$db_connect->prepare($sql);


//perform query


//fetching the result all
$stmt->execute(array('email'=>'james@gmail.com',
 ':client_name'=>'sean',
 ':client_password'=>'hellohosss',
 ':activated'=>0));
echo "New client_Id id:".$db_connect->lastInsertId();

}

?>