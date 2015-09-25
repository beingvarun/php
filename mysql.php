<?php
$host = 'localhost';
$dbUser = 'varunblack';
$dbPass = 'doublebarrel';
$dbbase = 'social';

function &connectToDb($host, $dbUser, $dbPass, $dbbase){
if (!$dbconn=mysqli_connect($host, $dbUser, $dbPass)){
	return false;
}
//select the database
if(!mysqli_select_db($dbconn, $dbbase)){
	return false;
}
//close the connection when finished

return $dbconn;

}
$DBconn = &connecttoDb($host, $dbUser, $dbPass, $dbbase);
$sql = 'SELECT * FROM user_data';
$result = mysqli_query($DBconn, $sql);
$row = mysqli_fetch_row($result);
echo $row[0];

?>