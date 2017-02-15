<?php
$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'linux123';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

mysqli_select_db($connect,"hostelmanagement");

$query = "SELECT * FROM employee ";
$result = mysqli_query($connect,$query) 
or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#9fc6c1\"><<tr>
      <th>Name</th>
      <th>Designation</th>
      <th>Address</th>
      <th>Contact</th>
    </tr>";

while($rows = mysqli_fetch_array($result)) 
{ 
print "<tr>"; 
print "<td>" . $rows['empname'] . "</td>";
print "<td>" . $rows['designation'] . "</td>";
print "<td>" . $rows['empaddress'] . "</td>";
print "<td>" . $rows['empcontact'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 
?>
<HTML>
<BODY>
<div style="position:relative;left:550px;top:100px;">
<form action="employee.html" method="post">
<input type="submit" style="font-face: 'Comic Sans MS'; font-size: large; color: white; background-color: #2a6bd3
 ; border: 1pt ridge black; height:40px; width:200px"" value=" Back " />				
</form>
</div>
</html>