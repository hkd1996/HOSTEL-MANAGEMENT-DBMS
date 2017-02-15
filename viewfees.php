<?php
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'linux123';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysqli_select_db($connect,"hostelmanagement");

$query = "SELECT * FROM hostel";
$result = mysqli_query($connect,$query) 
or die(mysql_error()); 
$query = "SELECT * FROM student";
$name = mysqli_query($connect,$query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#9fc6c1\"><<tr>
      <th>Application Number</th>
	  <th>Name</th>
	  <th>Student Type</th>
	  <th>Student Category</th>
	  <th>Total fees</th>
      <th>Exemption</th>
	  <th>Fees paid</th>
      </tr>";
l:
while($rows = mysqli_fetch_array($result) ) 
{ 
while($row = mysqli_fetch_array($name))
{
if($rows['appno']==$row['appno'])
{
print "<tr>"; 
print "<td>" . $rows['appno'] . "</td>"; 
print "<td>" . $row['name'] . "</td>"; 
print "<td>" . $rows['studenttype'] . "</td>"; 
print "<td>" . $rows['studentcat'] . "</td>"; 
print "<td>" . $rows['totalfees'] . "</td>"; 
print "<td>" . $rows['exemption'] . "</td>"; 
print "<td>" . $rows['feespaid'] . "</td>";
print "</tr>";
}
goto l;
}

} 
print "</table>"; 
print "<br>";
?>
<HTML>
<BODY>
<div style="position:relative;left:550px;top:80-15px;">
<form action="fees.html" method="post">
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: lightgray; background-color: #2a6bd3
 ; border: 1pt ridge black; height:40px; width:200px"" value=" Back " />				
</form>
</div>
</html>