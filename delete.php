<?php
include "dbconfig.php";
$link=opencon();
$did=$_REQUEST['id'];
$qr="delete from dblogin where id='$did' ";

echo $qr;
$del=mysqli_query($link, $qr);
header('location:table.php');
?>