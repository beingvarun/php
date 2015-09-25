<?php


class MySQL{
	
var $host;
var $dbUser;
var $dbpass;
var $dbname;
var $dbconn;
var $connectError;
function MySQL($host, $dbUser, $dbpass, $dbname){

$this->host = $host; //database host name
$this->dbUser = $dbUser;// database user name
$this->dbpass = $dbpass;// database  password
$this->dbname = $dbname;// database name
$this->connectToDb();// database function to connection to database
} 




function connectToDb(){

//make connection to mysql database
if(!$this->dbconn = @mysqli_connect($this->host, $this->dbUser, $this->dbpass))
//if the database connection is not 
  {

  	trigger_error("could not connect to the server");
     $this->connectError = true;
  }

  //select the database . selecting the atabase if the server connection is true
else if(!mysqli_select_db($this->dbconn, $this->dbname)){
   trigger_error("could not select the database"); 
    $this->connectError = true;

}
return $this->dbconn;
}

// if any error return true or false
function isError(){

	if($this->connectError){
		return true;
	}


	$error = mysqli_error($this->dbconn);
	if(empty($error)){
		return false;
	}else{
		return true;
	}

}
}
$db = new MySQL('localhost', 'varunblack', 'doublebarrel', 'social');	 
$dbconn = $db->connectToDb();

$sql = 'SELECT * FROM user_data';
$query = mysqli_query($dbconn, $sql);
$row = mysqli_fetch_array($query, MYSQL_ASSOC);
while($row){
echo $row['email'];
echo "</br>";
echo $row['client_id'];
echo "</br>";
} 
  






?>