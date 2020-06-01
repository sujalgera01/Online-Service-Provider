<?php

$fname = val($_POST["fname"]);
$lname = val($_POST["lname"]);
$mail = val($_POST["mail"]);
$mobile = val($_POST["mobile"]);
$location1 = val($_POST["location1"]);
$location2 = val($_POST["location2"]);

function val($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername = "localhost";
$username = "root";
$password = ""; //Add your database password
$dbName = "osp";

$conn = new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}


$sql = "INSERT INTO services (firstname,lastname,email,mobile,pickup,droploc) 
		VALUES ('$fname','$lname','$mail','$mobile','$location1','$location2')";
		$conn->query($sql);
		header('location: form.php');


?>
