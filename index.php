<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	@include('connect.php');
	//	@include "action_page.php";
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tracking online changes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="./ice-master/css/style.css">
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	<script src="assets/js/script.js" type="javascript"></script>
<style>
	input, textarea, button {
		width: 100%;
	}
</style>
</head>
<body>
<div class="container" style="margin-left: 30%; float: left;">
	<div class="form-container">
		<h4 style="text-align: center">
			Add Literature Text
		</h4>
		
		<form name="data" target="_self" method="post">
			<input id="heading" type="text" placeholder="Subject" name="heading" required maxlength="80">
			<br>
			<input id="username" type="text" placeholder="Username" name="username" required maxlength="80">
			<br>
			<textarea id="description" name="des" placeholder="description" rows="10" maxlength="6000"
			          required style="resize: none"></textarea>
			<button id="btn" name="btn" class="button-primary" type="submit">Add</button>
		</form>
	</div>
</div>

<?php
if (isset($_POST['btn'])) {
	$head = $_POST['heading'];
	$desc = $_POST['des'];
	$uname = $_POST['username'];
	
	$qu = $con->query("Insert into lit_track (lit_title,lit_description,lit_username) VALUES ('" . $head . "','" . $desc . "','".$uname."')");
	if($qu){
		
		session_start();
		$var_value = "success";
		$_SESSION['varname'] = $var_value;
		header('location: home.php');
	}
	else{
		session_start();
		$var_value = "fail";
		$_SESSION['varname'] = $var_value;
		header('location: home.php');
	}
}




?>

</body>