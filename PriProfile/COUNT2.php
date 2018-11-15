<?php
  session_start();
 if (isset($_SESSION['priusername'])){
	   }
   else {
	   header("location: index.php");
   }
   
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center>
<?php
			
$connect = mysqli_connect('localhost','root','','details');
// mysql_select_db('details');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];
$sql = $connect->query("SELECT * FROM addpdrive WHERE `CompanyName`='$cname'");

while($row = $sql->fetch_assoc())
{
	            print "<tr>"; 
	print "<br><td>Date:";
    echo $row['Date'];
	print "<br></td><td>Campus/Pool:"; 
	echo $row['C/P'];
	print "<br></td><td>Pool Venue:"; 
	echo  $row['PVenue'];
	print "<br></td><td>SSLC:"; 
	echo $row['SSLC'];
	print "<br></td><td>PU/Dip:"; 
	echo $row['PU/Dip'];
	print "<br></td><td>BE Aggregate:";
    echo $row['BE'];	
	print "<br></td><td>Current Backlogs:"; 
	echo $row['Backlogs'];
	print "<br></td><td>History of Backlogs:"; 
	echo $row['HofBacklogs'];
	print "<br></td><td>Detain Years:"; 
	echo $row['DetainYears'];
	print "<br></td><td>Other Details:";
	echo $row['ODetails'];
print "</td></tr><br><br><br>"; 
}
}
?>
<!--while ($row = mysql_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 

print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['USN'] . "</td>"; 
print "<td>" . $row['Mobile'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>"; 
print "<td>" . $row['DOB'] . "</td>"; 
print "<td>" . $row['Sem'] . "</td>"; 
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['SSLC'] . "</td>"; 
print "<td>" . $row['PU/Dip'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";




print "</tr>"; 

}-->
</center>
</body></html>