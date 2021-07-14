<?php
	include 'dbconnect.php';

	function register( $firstname ,$lastname, $gender,$dob,$religion, $email , $username ,$password,$paddress,$peraddress ,$phone, $websitelink)
	{
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO USERS (firstname,lastname,gender ,dob ,religion ,email ,username,password,paddress ,peraddress,phone,websitelink)
		VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssss",$firstname , $lastname ,  $gender, $dob, $religion,  $email ,  $username, $password, $paddress, $peraddress, $phone,  $websitelink);

	return $stmt->execute();
	}


?>