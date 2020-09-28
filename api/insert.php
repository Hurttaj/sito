<?php
$con = mysqli_connect("localhost","root","","Sito-PHP");
$response = array();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$company = $_POST['company'];
if($con){
	$sql = "INSERT INTO customers (firstname, lastname, address, company) VALUES ('$firstname', '$lastname', '$address', '$company')";
	$insert = mysqli_query($con,$sql);
	if($insert){
		echo "success.";
	}
	else{
		echo "failure.";	
	}
	}
?>
