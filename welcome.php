<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale-1">
<title>Welcome Page</title>
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
background-image: url("daylight-environment-forest-459225.jpg");
background-repeat: no-repeat;
background-size: cover;
}
#a{
width: 300px;
height: 100%;
color: blue;
border-inline: white;
border: 3px solid red;
}
label{
font-size: 2em;
background-color: red;
}
#btn{
background-color: red;
border: 3px solid white;
}
</style>
</head>
<body>
<form action="insert.php" method="POST">
<center>
<br>
<div>
<label>REGISTER</label>
</div>
<div>
<br>
<br>
<input type="text" class="form-control" name="name" placeholder="name" aria-label="Server" id="a"><br><br>
<input type="text" class="form-control" name="phone" placeholder="Phone Number" aria-label="Server" id="a">
<br>
<br>
<button type="submit" id="btn" class="btn btn-primary"> Confirm </button>
</div>
</center>
</form>
</body>
</html>



