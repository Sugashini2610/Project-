<?php
include "dbconfig.php";

$link=opencon();

$id=$_POST['id'];

$n1=$_POST['name'];

$n2=$_POST['phone'];
$qr="update dblogin set name='$n1', phone='$n2' where id='$id'";
echo $qr;
if(mysqli_query($link, $qr)){
echo "Updated Success";

}

header('location:table.php');

?>