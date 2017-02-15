<?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$room= $_POST['roomno'];
$appno= $_POST['appno'];
$query = "SELECT vacancy FROM rooms where roomno=$room";
$result =mysqli_query($connect,$query) 
or die(mysql_error());
$row = mysqli_fetch_row($result); 
$result=intval($row[0]);
if($result==0)
	echo "No Vacancy in Room $room";
else
{
	$vacancy=$result-1;
	$sql= "update rooms set vacancy=$vacancy where roomno=$room";
	if(!mysqli_query($connect,$sql))
		echo "Not Inserted. Error!";
	else
	{
		$sql= "update student set roomno=$room where appno=$appno";
		if(!mysqli_query($connect,$sql))
			echo "Not Inserted. Error!";
		else
		{
			echo "Successful! The page will now refresh...";
		}
	}
		
}

header("refresh:2; url=fees.html");

?>