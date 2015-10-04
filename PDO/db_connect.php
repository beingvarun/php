<?php
try{
	$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');

}
catch(PDOException $e){
	echo "could not connect to the database";
	exit;
}

$sql = "SELECT user_data.client_name,  employee.name FROM  user_data INNER JOIN  employee  ON user_data.client_id = employee.id";
$stmt = $db_connect->prepare($sql);

if($stmt){
$stmt->execute();
}
if($stmt){
$result = $stmt->fetch();

print_r($result);
}
else{
	echo "something went wrong";
}

?>