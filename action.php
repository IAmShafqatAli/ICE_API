<?php
header('Content-type: application/json');
@include 'connect.php';
$id = $_GET['id'];

$result = $con->query("SELECT `lit_description` FROM `lit_track` WHERE `lit_id` =  '".$id."' ");

	$data = mysqli_fetch_array($result);
	
	$lit_data = $data['lit_description'];
	
$response = array(

	'literatur'=> $lit_data
);

echo json_encode($response);
