<?php
session_start();
$uid_value = $_SESSION['username'];?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="home.php" >Home</a>
  <a href="#contact">Friends</a>
  <a href="#about">Upload</a>
  <a href="index.html"style="color:red;">Logout</a>
  <a href="profile.php" id="fag" style="color:white;"><?php echo $uid_value;?></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

</div>

<script src="script.js" charset="utf-8"></script>
<div class="h1">
  <h1> <a id="username"><?php echo $uid_value;?></a></h1>


</div>
<div class="settings">
  <a href="#" id="delete">delete account</a>
  <a href="changeusername.php" id="usernam">change username</a>
  <a href="#"id="password">change password</a>
</div>



</body>
</html>
