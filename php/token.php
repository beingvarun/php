<?php
session_start();



if(isset($_POST['submit']) && $_POST['token'] == $_SESSION['token'])
{
	$firstname =  $_POST['firstname'];
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	echo filter($firstname);
	echo "</br>";
	echo filter($email);
	echo "</br>";
	echo filter($password);
}
function filter($var){

	return preg_replace('/[^a-zA-Z0-9\s]/', "", $var);	
}





$token = $_SESSION['token'] = sha1(uniqid(mt_rand(), true));
// usage of token in php
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





