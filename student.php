<?php

require_once 'dbconfig.php';
$connect=mysqli_connect('localhost','root','linux123');

if(!$connect)
	echo "Connection to server failed!";

if(!mysqli_select_db($connect,'hostelmanagement'))
	echo "Database could not be selcted!";

$appno= $_POST['appno'];
$name=$_POST['name'];
$dob= $_POST['dob'];
$college=$_POST['college'];
$course= $_POST['course'];
$duration=$_POST['duration'];
$contact= $_POST['contact'];
$jdate=$_POST['jdate'];
$emergency=$_POST['emergency'];
$fathername= $_POST['fathername'];
$mothername=$_POST['mothername'];
$income= $_POST['income'];
$subcaste=$_POST['subcaste'];
$address= $_POST['address'];
$pcontact=$_POST['pcontact'];

$imgFile = $_FILES['user_image']['name'];
$tmp_dir = $_FILES['user_image']['tmp_name'];
$imgSize = $_FILES['user_image']['size'];

$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
			
		

	
	

$sql= "INSERT INTO student VALUES ('$appno','$name','$dob','$college','$course','$duration','$contact','$jdate','$emergency','0')";


if(!mysqli_query($connect,$sql))
	echo "Not Inserted. Error! part 1";
else
{}

$stmt = $DB_con->prepare('INSERT INTO images(image,appno) VALUES(:upic,:pno)');
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':pno',$appno);
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
			}
			else
			{
				echo "Image not inserted";
			}
$sql= "INSERT INTO parent VALUES ('$fathername','$mothername','$income','$subcaste','$address','$pcontact','$appno')";



if(!mysqli_query($connect,$sql))
	echo "Not Inserted. Error! part 2";
else
	echo "Successful! Page will now refresh...";

//header("refresh:2; url=student.html");

?>

<html>
<head>
<title> INSERT INTO STUDENT- HOSTELMANAGEMENT </title>
</head>

<body bgcolor= #9fc6c1

 >
	<form method="post">
	<h2>
	APPLICATION NUMBER:</h2> <input type="text" name="appno" style="height:30px;font-size:14pt;width:350px" >
				 
				 <br/><h2>
	NAME OF THE STUDENT:<br/><br/>
	<input type="text" name="name" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				
				<h2>
	DATE OF BIRTH ( DD-MM-YYYY ):</h2>
	<input type="date" name="dob" value="2016-01-01" style="height:30px;font-size:14pt;width:350px" >
				 
				 <br/><h2>
	
	<h2>
	FATHER NAME:</h2> <input type="text" name="fathername" style="height:30px;font-size:14pt;width:350px" >
				 
				 <br/><h2>
	MOTHER NAME:<br/><br/>
	<input type="text" name="mothername" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				
				<h2>
	INCOME:</h2>
	<input type="text" name="income" style="height:30px;font-size:14pt;width:350px" >
				 
				 <br/><h2>
	SUB-CASTE:<br/><br/>
	<input type="text" name="subcaste" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				<h2>
	ADDRESS:</h2>
	<textarea rows="50" cols="50" name="address" style="height:100px;font-size:14pt;width:350px" >
	</textarea>
				 
				 <br/><h2>
	PARENT'S CONTACT NUMBER:<br/><br/>
	<input type="text" name="pcontact" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				<h2>
	COLLEGE NAME:<br/><br/>
	<input type="text" name="college" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				<h2>
	COURSE:</h2>
	<input type="text" name="course" style="height:30px;font-size:14pt;width:350px" >
				 
				 <br/><h2>
	DURATION OF THE COURSE:<br/><br/>
	<input type="text" name="duration" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				<h2>
	STUDENT'S CONTACT NUMBER:</h2>
	<input type="text" name="contact" style="height:30px;font-size:14pt;width:350px" >
				 
				 <br/><h2>
	JOINING DATE OF THE STUDENT ( DD-MM-YYYY ):<br/><br/>
	<input type="date" name="jdate" value="2016-01-01" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>
				
				<h2>
	EMERGENCY CONTACT:<br/><br/>
	<input type="text" name="emergency" style="height:30px;font-size:14pt;width:350px" >
				 <br/>
	</h2>

	<h2>
	UPLOAD STUDENT IMAGE:<br/><br/>
			<h2/>
	<input type="file" name="user_image" accept="image/*" />
	<br/><br/>
     <body>
	
</body>
</form>
</br> 
</br>
<input type="submit" name="upload" style="font-face: 'Comic Sans MS'; font-size: medium; color: lightgray; background-color: #434349

 ; border: 1pt ridge black; height:40px; width:120px"" value=" Submit " />
				
	</form>
	
</br>
</br>
</div>
<div style="position:relative;left:1px;top:80-15px;background-color:#9fc6c1;">
<form action="home.html" method="post">
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: lightgray; background-color: #2a6bd3
 ; border: 1pt ridge black; height:40px; width:200px"" value=" Back to Homepage " />				
</form>
</div>
</body>
</html>
				 
	
	