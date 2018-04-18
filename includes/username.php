<?php
include 'dhb.inc.php';
$uid =  $_GET['uid'];


$query = "UPDATE users SET uid = '$uid' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ('Error Updating');

header("Location: ../profile.php");
