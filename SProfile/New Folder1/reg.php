<?php
   $connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
   mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server
   
   
if(isset($_POST['submit']))
{ 
 $Name = $_POST['Fullname'];
 $USN = $_POST['USN'];
 $password = $_POST['PASSWORD'];
 $repassword = $_POST['repassword'];
 $Email = $_POST['Email'];
  $Question = $_POST['Question'];
   $Answer = $_POST['Answer'];
  

 $check = mysql_query("SELECT * FROM slogin WHERE USN='".$USN."'") or die("Check Query");
 if(mysql_num_rows($check) == 0) 
 {
  if($repassword == $password)
  {
    
    
    if($query = mysql_query("INSERT INTO slogin(Name, USN ,PASSWORD,Email,Question,Answer) VALUES ('$Name', '$USN', '$password','$Email','$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This USN already exists</center>"; 
  }
 }
?>