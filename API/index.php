<?php
header('Content-Type:application/json');
include('function.php');
if(!empty($_GET['movie'])){
	$movie = $_GET['movie'];
	$actor = getData($movie);
if(empty($actor)){
deliver_response(200, 'movie not found', NULL);

}else{
 deliver_response(200, 'movie found', $actor);
}


}else{
deliver_response(400, 'invalid request', NULL);
}

function deliver_response($status, $statusText, $data){
 header("HTTP/1.1 $status $statusText");
 $response['status'] =$status;
 $response['statusText'] = $statusText;
 $response['data'] = $data;
 $json_response = json_encode($response);
 echo $json_response;
}

?>