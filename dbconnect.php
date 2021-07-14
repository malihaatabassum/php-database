<?php
	function connect(){
	$conn=new mysqli("localhost","mmm","1234","php database");
	if($conn->connect_errno)
	{
		die( "Connection failed due to" . $conn->connect_error);
	}
	return $conn;
}






?>