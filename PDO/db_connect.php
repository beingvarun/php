<?php
try{
	$db_connect = new PDO('mysql:host=localhost;dbname=social', 'varunblack', 'doublebarrel');

}
catch(PDOException $e){
	echo "could not connect to the database";
	exit;
}

$sql = "SELECT client_name FROM user_data WHERE email= :email";
$stmt = $db_connect->prepare($sql);

if($stmt){
$stmt->execute(array(':email'=>'varunrajvn007@gmail.com'));
}
if($stmt){
$result = $stmt->fetch();

print_r($result);
}
else{
	echo "something went wrong";
}

?>