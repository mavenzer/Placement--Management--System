<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    
	
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
			
mysql_connect('localhost','root','');
mysql_select_db('details');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];

$date= $_POST['date'];

$RESULT=mysql_query("SELECT count(Attendence) from updatedrive where Attendence=1 and CompanyName='$cname' and Date='$date'");
$data=mysql_fetch_assoc($RESULT);
echo "<br>Number of Students Attended&nbsp:&nbsp";
echo $data['count(Attendence)'];

$RESULT=mysql_query("SELECT count(WT) from updatedrive where WT=1 and CompanyName='$cname' and Date='$date'");
$data=mysql_fetch_assoc($RESULT);
echo "<br>Number of Students Cleared WT&nbsp:&nbsp";
echo $data['count(WT)'];

echo "<br>Number of Students Cleared GD&nbsp:&nbsp";
$RESULT1=mysql_query("SELECT count(GD) from updatedrive where GD=1 and CompanyName='$cname' and Date='$date'");
$data1=mysql_fetch_assoc($RESULT1);
echo $data1['count(GD)'];

echo "<br>Number of Students Cleared Technical&nbsp:&nbsp";
$RESULT1=mysql_query("SELECT count(Techical) from updatedrive where Techical=1 and CompanyName='$cname' and Date='$date'");
$data1=mysql_fetch_assoc($RESULT1);
echo $data1['count(Techical)'];

echo "<br>Number of Students Placed&nbsp:&nbsp";
$RESULT1=mysql_query("SELECT count(Placed) from updatedrive where Placed=1 and CompanyName='$cname' and Date='$date'");
$data1=mysql_fetch_assoc($RESULT1);
echo $data1['count(Placed)'];
}
?>
</center>
</body>
</html>