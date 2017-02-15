<?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$empname= $_POST['empname'];
$designation=$_POST['designation'];
$empaddress=$_POST['empaddress'];
$empcontact= $_POST['empcontact'];

$sql= "INSERT INTO employee VALUES ('$empname','$designation','$empaddress','$empcontact')";

if(!mysqli_query($connect,$sql))
	echo "Not Inserted. Error!";
else
	echo "Successful! The page will now refresh...";

header("refresh:2; url=employee.html");

?>