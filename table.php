<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Table Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="
sha384-9ndCyUaIbzAi2FUVXJi@cjmCapSm07SnpJef0486qhLnuZ2cdeRh002iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity=" sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" cross origin="anonymous"></script>
<style>
body{
width: 1300px;
margin-left: 110px;
background-image: url("daylight-environment-forest-459225.jpg");
background-repeat: no-repeat;
background-size: cover;
}

label{
color: yellow;
font-size: 2em;
}

button{
color: white;
background-color: red;
width: 100px;
height: 40px;
border: 4px solid white;
}
</style>
<body>
<center>
<div>
<label>TABLE PAGE</label>
</div>
<br>
<table class="table table-striped table-hover" border="2" style="border-collapse: collapse; text-align: center;">
<thead>
<tr>
<th>S.NO</th>
<th>Name</th>
<th>Phone Number</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include "dbconfig.php";
$link=opencon();
$qr="select * from dblogin";
$qr_exe=mysqli_query($link,$qr);
while($fetch_qr=mysqli_fetch_array($qr_exe)){
?>
<tr>
<td><?php echo $fetch_qr['id']; ?></td>
<td><?php echo $fetch_qr['name']; ?></td>
<td><?php echo $fetch_qr['phone']; ?></td>
<td><a href="edit.php?id=<?php echo $fetch_qr['id']; ?>"><span class="material-symbols-outlined" style="color: darkgreen;">
edit_square</span></a></td>
<td><a onclick="return confirm('Are you delete this item?')" href="delete.php?id=<?php echo $fetch_qr['id'];?>"><span class=" material-symbols-outlined" style="color: red;">delete</span></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</center>
<div>
<a href="welcome.php"><button>Add</button></a> </div>
</body>
</html>