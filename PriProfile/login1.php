<?php
	session_start();
	$priusername = $_POST['Username'];
	$password  = $_POST['Password'];
	
	if ($priusername&&$password)
	{
		$connect = mysqli_connect("localhost","root","","placement") or die("Couldn't Connect");
		// mysql_select_db("placement") or die("Cant find DB");
		
		$query = $connect->query("SELECT * FROM prilogin WHERE Username = '$priusername'");
		
		$numrows = $query->num_rows;
		
		if ($numrows!=0)
		{
			while($row = $query->fetch_assoc())
			{
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];
			}
			if ($priusername == $dbusername && $password == $dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['priusername'] = $priusername;
			} else{
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";}
			
		}else
			die("User not exist");
		
	}
	else
	die("Please enter Username and Password");
	?>