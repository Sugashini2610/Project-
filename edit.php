<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Edit Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="
sha384-9ndCyUaIbzAi2FUVXJi@cjmCapSm07SnpJef0486qhLnuZ2cdeRh002iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity=" sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" cross origin="anonymous"></script>
<style>
body{
width: 400px;
height: 400px;
border: 5px solid white;
margin-left: 550px;
margin-top: 100px;
background-image:url("daylight-environment-forest-459225.jpg");
background-repeat: no-repeat;
background-size: cover;
}
label{
font-size: 2em;
color: white;
background-color: red;
border: 3px solid white;
margin-left: 130px;
border-radius: 10px;
}
#a{
width: 300px;
height: 100%;
color: blue;
border-inline: white;
border: 3px solid red;
margin-left: 50px;
}
#btn{
background-color: red; 
border: 3px solid white;
margin-left: 170px;
}
</style>
</head>
<body>
<br>
<div>
<label>UPDATE</label>
</div>
<form action="update.php" method="POST">
<div>
<br>
<?php
include"dbconfig.php";
$link=opencon();
$del=$_GET['id'];
//echo $del;
//echo $qr;

$qr="select * from dblogin where id='$del'";
$qr_exe=mysqli_query($link, $qr);
while($fetch_qr=mysqli_fetch_array($qr_exe)){
?>
<input type="text" class="form-control" name="id" value="<?php echo $fetch_qr['id']; ?>" hidden> <br>
<input type="text" class="form-control" id="a" name="name" value="<?php echo $fetch_qr['name']; ?>"> <br>
<br>
<input type="text" class="form-control" id="a" name="phone" value="<?php echo $fetch_qr['phone']; ?>"> <br>
<br>
<button type="submit" id="btn" class="btn btn-primary">Update</button>
<?php
}
?>
</div>
</form>
</body>
</html>

















