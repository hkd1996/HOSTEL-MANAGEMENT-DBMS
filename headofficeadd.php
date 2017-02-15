     <?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$amount= $_POST['amount'];
$month=$_POST['month'];

$sql= "INSERT INTO headoffice VALUES ('$month','$amount')";

if(!mysqli_query($connect,$sql))
{
	echo "Not Inserted. Error!";
	header("refresh:2; url=headofficeadd.html");
}
else
{
	echo "Successful! Page will now refresh...";
	header("refresh:2; url=mess.html");

}


	
?>