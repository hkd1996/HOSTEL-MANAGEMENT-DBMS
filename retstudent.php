<?php
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'linux123';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysqli_select_db($connect,"hostelmanagement");

$query = "SELECT * FROM student natural join parent";
$result = mysqli_query($connect,$query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#9fc6c1\"><<tr>
      <th>Application Number</th>
      <th>Name</th>
      <th>Father's Name</th>
      <th>Mother's Name</th>
      <th>Date of birth</th>
      <th>Income</th>
      <th>Subacaste</th>
      <th>Address</th>
       <th>Parent contact</th>
      <th>College</th>
      <th>Course</th>
      <th>Duration</th>
      <th>Contact</th>
      <th>Join Date</th>
      <th>Emergency Contact</th>
    </tr>";

while($rows = mysqli_fetch_array($result)) 
{ 
print "<tr>"; 
print "<td>" . $rows['appno'] . "</td>"; 
print "<td>" . $rows['name'] . "</td>";
print "<td>" . $rows['fathername'] . "</td>"; 
print "<td>" . $rows['mothername'] . "</td>";
print "<td>" . $rows['dob'] . "</td>"; 
print "<td>" . $rows['income'] . "</td>";
print "<td>" . $rows['subcaste'] . "</td>";
print "<td>" . $rows['address'] . "</td>";
print "<td>" . $rows['pcontact'] . "</td>";
print "<td>" . $rows['college'] . "</td>";
print "<td>" . $rows['course'] . "</td>";
print "<td>" . $rows['duration'] . "</td>";
print "<td>" . $rows['contact'] . "</td>";
print "<td>" . $rows['joindate'] . "</td>"; 
print "<td>" . $rows['emercontact'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 
?>
<HTML>
<BODY>
<div style="position:relative;left:550px;top:100px;">
<form action="retstudent.html" method="post">
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #2a6bd3
 ; border: 1pt ridge black; height:40px; width:200px"" value=" Back " />				
</form>
</div>
</html>