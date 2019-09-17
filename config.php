<?php
	$host = "remotemysql.com";
	$user = "EukRWuQJzc";
	$pass = "0AtgxFwNmC";
	$db = "EukRWuQJzc";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
