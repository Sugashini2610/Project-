<?php
 function opencon(){
	$servername="localhost";
	$username="root";
	$password="";
	$db="dbbootstrap_crud";
	$conn=new mysqli($servername, $username, $password, $db);
	if($conn->connect_error) {
	   die("connection failed: ".$conn->connection_error);
	}
	return $conn;
}
?>	