<?php
$host = 'localhost';
$dbUser = 'varunblack';
$dbPass = 'doublebarrel';
$dbbase = 'social';
if (!$dbconn=mysql_connect($host, $dbUser, $dbPass)){
	die('could not connect to the server');
}
//select the database
if(!mysql_select_db($dbbase, $dbconn)){
	die('could not select the database');
}
echo "connection successfull!!";
//close the connection when finished

mysql_close($dbconn);




?>