<?php
//PDO database connection 
$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');
if($db_connect){

//perform query	
	$stmt =$db_connect->query("SELECT * FROM user_data");


//fetching the result

$result = $stmt->fetch(PDO::FETCH_BOTH);
print_r($result);

}else{
	echo "not connected";
}





?>