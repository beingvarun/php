<?php
session_start();
if(isset($_POST['submit'])){
$register = new Register();
if($register->process()){
	header("Location:http://www.google.com");
}
else{
	echo $register->show_error();
}
}

$token = $_SESSION['token'] = sha1(uniqid(mt_rand(), true));
?>


<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">


Name:
</br>
<input type="text" name="firstname" />
</br>
Email
</br>
<input type="email" name="email"/>
</br>
Password:
</br>
<input type="password" name="password">
</br>
<input type="hidden" name="token" value="<?=$token;?>"/>
<input type="submit" name="submit" value="signUP">
</br>

</form>

<?php

class Register{

private $firstname;
private $email;
private $password;
private $hash;
private $errors;
private $token;

public function  __construct(){

$this->errors = array();

$this->firstname =$this-> filter($_POST['firstname']);
$this->email =$this-> filter($_POST['email']);
$this->password =$this-> filter($_POST['password']);
$this->hash = sha1($this->password);
$this->token = $_POST['token'];


}
public function process(){
	

if($this->valid_token() && $this->valid_data()){
	$this->register();
	if($this->register()== true){
		return true;
	}

}


}

public function filter($var){    

 return preg_replace('/[^a-zA-Z0-9\s]/', "", $var);
}

public function register(){
$db_host ='localhost';
$db_username ='varunblack';
$db_password ='doublebarrel';
$db_database = 'social';

//connecting to the database

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_database)or  mysqli_error();
$q = "INSERT INTO user_data(email, client_name, client_password, activated, login_time) VALUES('($this->email)', '($this->firstname)', '($this->hash)', 0, now())";
mysqli_query($db_connect, $q);
$row = mysqli_affected_rows($db_connect);
if($row<1){
	$this->errors[] ="could not process the form";
}else{
	return true;
}

}
public function show_error(){

	foreach ($this->errors as $key => $value) {
		echo $value;
		echo "<br>";
	}


}
public function valid_data(){


	if(empty($this->firstname)){
		$this->errors[] = "cant validate name";
	}
	if(empty($this->password)){
		$this->errors[]= "cant validate the password";
 	}
 	if(empty($this->email)){
 		$this->errors[] = "can't  validate the email";
 	}
 	return count($this->errors)?0:1;


}
public function valid_token(){

       
	if(!isset($_SESSION['token']) || $this->token != $_SESSION['token']){
	    $this->errors[] = "Invalid submission";
		

}
return count($this->errors)?0 :1;



}
}



