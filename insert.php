<?php
include "dbconfig.php";
$link=opencon();
 $name=$_POST['name'];
 $phone=$_POST['phone'];

$sql="INSERT INTO dblogin(name,phone) values('$name','$phone')";

echo $sql;


if(mysqli_query($link,$sql)){
	echo "Record Success";
 }
 header('location:table.php');
 ?>