<?php
@include 'connect.php';
$username = $_POST['username'];
$userid= $_POST['userid'];
$changetype = $_POST['type'];
$text = $_POST['text'];
$time = $_POST['time'];

$save = $con->query("INSERT INTO lit_track (lit_username,lit_userid,type,lit_description,time)
 VALUE ('".$username."','".$userid."','".$changetype."','".$text."','".$time."') ");

$response;

if ($save) {

    $response = array(

        'Flag' => true

    );
}
else{
    $response = array(

        'Flag' => false

    );
}
    return json_encode($response);