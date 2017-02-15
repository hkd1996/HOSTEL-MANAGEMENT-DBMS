     <?php

$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$grocery= $_POST['grocery'];
$milk=$_POST['milk'];
$vegetables= $_POST['vegetables'];
$month=$_POST['month'];
$extra=$_POST['extras'];

$v1=intval($grocery);
$v2=intval($milk);
$v3=intval($vegetables);

$totalamount= $v1+$v2+$v3;


$sql= "INSERT INTO fooditems VALUES ('$grocery','$milk','$vegetables','$totalamount','$month')";

$fees=$totalamount+$extra;

if(!mysqli_query($connect,$sql))
{
	echo "Not Inserted. Error!";
	header("refresh:2; url=mess.html");
}
else
	{
		$qry="SELECT * FROM student";
		$cnt=mysqli_query($connect,$qry);
		$count=mysqli_num_rows($cnt);

		while($rows = mysqli_fetch_array($cnt))
		{
			$name=$rows['name'];
			$sql= "INSERT INTO mess VALUES ('$name','$fees','$month')";
			if(!mysqli_query($connect,$sql))
			{
				echo " Mess Not Inserted. Error! 2nd";
				header("refresh:2; url=mess.html");
			}
		}
		
		
	}
	
?>
<html>
<head>
<title> MESS BILL - BSS </title>
<body bgcolor=#9fc6c1>
</BR>
</BR>
</div>
<div style="position:relative;left:180px;top:80-15px;background-color:#9fc6c1;">
<form action=" " method="post">
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: lightgray; background-color: #434349
 ; border: 1pt ridge black; height:80px; width:900px"" value="<?php echo $totalamount; ?> " />				
</form>
</div>
<form action="home.html" method="post">
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: lightgray; background-color: #2a6bd3
 ; border: 1pt ridge black; height:40px; width:200px"" value=" Back to Homepage " />				
</form>
</div> 