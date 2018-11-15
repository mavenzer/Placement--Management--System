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

$date= $_POST['date'];

$RESULT=$connect->query("SELECT count(Attendence) from updatedrive where Attendence=1 and CompanyName='$cname' and Date='$date'");
$data=$RESULT->fetch_assoc();
echo "<br>Number of Students Attended&nbsp:&nbsp";
echo $data['count(Attendence)'];

$RESULT=$connect->query("SELECT count(WT) from updatedrive where WT=1 and CompanyName='$cname' and Date='$date'");
$data=$RESULT->fetch_assoc();
echo "<br>Number of Students Cleared WT&nbsp:&nbsp";
echo $data['count(WT)'];

echo "<br>Number of Students Cleared GD&nbsp:&nbsp";
$RESULT1=$connect->query("SELECT count(GD) from updatedrive where GD=1 and CompanyName='$cname' and Date='$date'");
$data1=$RESULT1->fetch_assoc();
echo $data1['count(GD)'];

echo "<br>Number of Students Cleared Technical&nbsp:&nbsp";
$RESULT1=$connect->query("SELECT count(Techical) from updatedrive where Techical=1 and CompanyName='$cname' and Date='$date'");
$data1=$RESULT1->fetch_assoc();
echo $data1['count(Techical)'];

echo "<br>Number of Students Placed&nbsp:&nbsp";
$RESULT1=$connect->query("SELECT count(Placed) from updatedrive where Placed=1 and CompanyName='$cname' and Date='$date'");
$data1=$RESULT->fetch_assoc();
echo $data1['count(Placed)'];
}
?>
</center>
</body>
</html>