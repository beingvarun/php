<form method="post" action="#">
<input type="text" name="data" >
<input type="submit" name="submit">
</form>
<?php if(isset($_POST['submit']))
{     
    $movie = $_POST['data'];

//resource Address

	$url = "http://localhost/github/API/$movie"; 
//send Request to resource
//curl
	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec($client);
	$response = json_decode($response);
	echo $response->data;

}





?>