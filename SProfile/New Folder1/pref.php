<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];
if($USN !=''||$email !='')
{
	if($USN == $sun)
    {
    if($query = mysql_query("INSERT INTO `details`.`basicdetails` ( `FirstName`, `LastName`, `USN`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`) 
          VALUES ('$fname', '$lname', '$USN', '$phno', '$email', '$date', '$cursem', '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$detyear', '0')"))
    {
				echo "<center>Data Inserted successfully...!!</center>";
      }
	  
     
		else echo "FAILED";
}

else{
	  echo "<center>enter your usn only...!!</center>";
}
}
}
?>


<?php
$connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];

if($USN !=''||$email !='')
{
	if($USN == $sun)
	{
		
	$sql = mysql_query("SELECT * FROM `details`.`basicdetails` WHERE `USN`='$USN'");
	if(mysql_num_rows($sql) == 1)
	{
  
		if($query = mysql_query("UPDATE `details`.`basicdetails` SET `FirstName`='$fname', `LastName`='$lname', `Mobile`='$phno', `Email`='$email', `DOB`='$date', `Sem`='$cursem', `Branch`= '$branch', `SSLC`='$per', `PU/Dip`='$puagg', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisofbk', `DetainYears`='$detyear' ,`Approve`='0'
           WHERE `basicdetails`.`USN` = '$USN'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	}
else
	echo "<center>enter your usn only</center>";
}
}
?>