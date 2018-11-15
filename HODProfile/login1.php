<?php
	session_start();
	$branch = ($_POST['Branch']);
	$husername = ($_POST['username']);
	$password  = ($_POST['password']);


	if ($husername&&$password&&$branch)
	{
		$connect = mysqli_connect("localhost","root","","placement") or die("Couldn't Connect");
		// mysql_select_db("placement") or die("Cant find DB");

		$query = $connect->query("SELECT * FROM hlogin WHERE Username='$husername'");

		$numrows = $query->num_rows;

		if ($numrows!=0)
		{
			while($row = $query->fetch_assoc())
			{
				$dbbranch = $row['Branch'];
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];

			}
			if ($branch==$dbbranch&&$husername==$dbusername&&$password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['husername'] = $husername;
				$_SESSION['department'] = $branch;
			}
			else {
				$message = "Username and/or Password and/or Department are/is incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
			  } else
			   die("User not exist");
	}
	else {
	$message = "Feild Can't be Left Blank";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			  }
		?>
