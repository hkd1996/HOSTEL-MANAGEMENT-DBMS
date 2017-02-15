     <?php

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
$imgFile = $_FILES['image']['name'];
$tmp_dir = $_FILES['image']['tmp_name'];
$imgSize = $_FILES['image']['size'];

$sql= "INSERT INTO student VALUES ('$appno','$name','$dob','$college','$course','$duration','$contact','$jdate','$emergency','0')";


if(!mysqli_query($connect,$sql))
	echo "Not Inserted. Error! part 1";
else
{}

$sql= "INSERT INTO parent VALUES ('$fathername','$mothername','$income','$subcaste','$address','$pcontact','$appno')";
if(!mysqli_query($connect,$sql))
	echo "Not Inserted. Error! part 2";
else
{}

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

$sql= "INSERT INTO images VALUES ('$appno','$userpic')";

if(!mysqli_query($connect,$sql))
	echo "Image not inserted";
else
	echo "Successful! Page will now refresh...";

header("refresh:2; url=rooms.html");

?>