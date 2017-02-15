<?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$appno= $_POST['appno'];
$newcollege=$_POST['newcollege'];
$newcourse= $_POST['newcourse'];
$newduration=$_POST['newduration'];

if($newcollege!=NULL)
{
	$sql= "UPDATE student SET college='$newcollege' WHERE appno=$appno;";
	if(!mysqli_query($connect,$sql))
	echo " College Not Updated. Error!";
}
if($newcourse!=NULL)
{
	$sql= "UPDATE student SET course='$newcourse' WHERE appno=$appno;";
	if(!mysqli_query($connect,$sql))
	echo " Course Not Updated. Error!";
}	
if($newduration!=NULL)
{
	$sql= "UPDATE student SET duration=$newduration WHERE appno=$appno;";
	if(!mysqli_query($connect,$sql))
	echo " Course Not Updated. Error!";
}				
echo "Successful! Page will now refresh...";
header("refresh:2; url=/hostelmanagement/update.html");

?>