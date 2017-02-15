<?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$old= $_POST['old'];
$new=$_POST['new'];

$sql= "UPDATE student SET appno=$new WHERE appno=$old";

if(!mysqli_query($connect,$sql))
	echo "Not Updated. Error!";
else
	echo "Successful! The page will now refresh...";

header("refresh:2; url=/hostelmanagement/update.html");

?>