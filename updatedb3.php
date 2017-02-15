<?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$appno= $_POST['appno'];

$sql= "UPDATE hostel SET totalfees=5000,exemption=5000,studenttype='old' WHERE appno=$appno";

if(!mysqli_query($connect,$sql))
	echo "Not Inserted. Error!";
else
	echo "Successful! The page will now refresh...";

header("refresh:2; url=fees.html");

?>