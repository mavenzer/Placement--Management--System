<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Student Register</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
		<!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">

		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Student Register</h1>
	        </header>
	        <form method="POST" class="templatemo-login-form" action="reg.php">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" name="Fullname" class="form-control" placeholder="FullName*" >
		          	</div>
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" name="USN" class="form-control" placeholder="USN*" >
		          	</div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input type="password" name="PASSWORD" class="form-control" placeholder="******" >
		          	</div>
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
		              	<input type="password" name="repassword" class="form-control" placeholder="Retype Password" >
		          	</div>
				</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" name="Email" class="form-control" placeholder="Email*" >
		          	</div>
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<select type="text" name="Question" class="form-control" placeholder="Security Question*" >
								<option value="What is your nickname?">What is your nickname?</option>
								<option value="What is your fav spot?">What is your fav spot?</option>
							<option value="What is your fav dish?">What is your fav dish?</option>
							<option value="What is your dream land address?">What is your dream land address?</option>
		          	<option value="What is your first mobile number?">What is your first mobile number?</option>
						<option value="What is your one truth which ohers donot know?">What is your one truth which ohers donot know?</option>
								<option value="What is your detained years in life?">What is your detained years in life?</option>
						<option value="What is your enemy name?">What is your enemy name?</option>
						<option value="What is your pet name?">What is your petname?</option>
					</div>

	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
		              	<input type="text" name="Answer" class="form-control" placeholder="Answer*" >
		          	</div>
	        	</div>


				<div class="form-group">
					<button type="submit" name="submit" class="templatemo-blue-button width-100">Register</button>
				</div>
	        </form>
		</div>

		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Have an Account? <strong><a href="index.php" class="blue-text">Sign in here!</a></strong></p>
		</div>
		<!--footer-->
		<div class="footer">
			<div class="container">
				<div class="col-md-3 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
					<li>
							<a href="../../Homepage/index.php">Home</a>
						</li>
						<li>
							<a href="../SProfile/index.php">Student Login</a>
						</li>
						<li>
							<a href="../PProfile/index.php">Placement Login</a>
						</li>
						<li>
							<a href="../HODProfile/index.php">HOD Login</a>
						</li>
						<li>
							<a href="../PriProfile/index.php">Administrative Login</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 ftr_navi ftr">
					<h3>MEMBERS</h3>
					<ul>
						<li>
							<a href="#">Customer Support</a>
						</li>
						<li>
							<a href="#">Placement Support</a>
						</li>
						<li>
							<a href="#">Faculty Support</a>
						</li>
						<li>
							<a href="#">Registered Companies</a>
						</li>
						<li>
							<a href="#">Training</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 get_in_touch ftr">
					<h3>GET IN TOUCH</h3>
					<p>University Hills</p>
					<p>South Kalamessery, Kochi, India</p>
					<p>08301-79790/223365</p>
					<a href="mailto:soumen1696@gmail.com">soumen1696@gmail.com</a>
				</div>
				<div class="col-md-3 ftr-logo">
					<p>Copyright &copy; 2018 CUSAT-SOE | Developed by
              <a href="http://znumerique.azurewebsites.net" target="_parent">HyperMine</a>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
	</body>
</html>
<!--<
// define variables and set to empty values
$nameErr = $usnErr = $passErr = $emailerr = $Qerr = $Anserr = "";
$Name = $USN = $password = $repassword = $Email = $Question = $Answer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["Fullname"])) {
     $nameErr = "Name is required";
   } else {
     $Name = test_input($_POST["Fullname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

	if (empty($_POST["USN"])) {
     $usnErr = "USN is required";
   } else {
     $USN = test_input($_POST["USN"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/[a-zA-Z0-9]*$/",$USN)) {
       $nameErr = "Only letters and white space allowed";
     }
   }

   if (empty($_POST["password"])) {
     $passErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     }

   if (empty($_POST["repassword"])) {
     $passErr = "Feild is required";
   } else {
     $repassword = test_input($_POST["repassword"]);
   }

   if (empty($_POST["Email"])) {
     $emailErr = "Email is required";
   } else {
     $Email = test_input($_POST["Email"]);
     // check if e-mail address is well-formed
     if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

     $Question = ($_POST["Question"]);

    if (empty($_POST["Answer"])) {
     $AnsErr = "Answer is required";
   } else {
     $Answer = test_input($_POST["Answer"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$Answer)) {
       $nameErr = "Only letters and white spaces allowed";
     }
   }
}

   function test_input($data)
   {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
   $connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
  		mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server

		$check = mysql_query("SELECT * FROM slogin WHERE USN='".$USN."'") or die("Check Query");
 		if(mysql_num_rows($check) == 0)
 		{
  			if($repassword == $password)
  			{
    			if($query = mysql_query("INSERT INTO slogin(Name,USN,PASSWORD,Email,Question,Answer) VALUES ('$Name','$USN','$password','$Email','$Question','$Answer')"))
    			{
					$message = " You have registered successfully...!!";
  					echo "<script type='text/javascript'>alert('$message');</script>";
                    //echo "<center> You have registered successfully...!! Go back to  </center>";
					//echo "<center><a href='index.php'>Login here</a> </center>";
    			}
  			}
   			else
    		{
      			// echo "<center>Your Password don't Match</center>";
				$message = "Your Password don't Match";
  				echo "<script type='text/javascript'>alert('$message');</script>";
    		}
   		}
   		else
   		{
       		//echo "<center>This USN already exists</center>";
			$message = "This USN already exists/Dont Leave any Field Blank";
  			echo "<script type='text/javascript'>alert('$message');</script>";

		}-->
