<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
   
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
      
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preferences</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
         
		  <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['username']. "</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li>
              <a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li>
            <li>
              <a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li>
                  <a href="../../Homepage/index.html" >Home CIT-PMS</a>
                </li>
                <li>
                  <a href="">Drives Homepage</a>
                </li>
                <li>
                  <a href="">Overview</a>
                </li>
                <li>
                  <a href="login.html">Change Password</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Preferences</h2>
            <p>Update Your Details</p>
            <form action="pref.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputFirstName">First Name</label>
                  <input type="text" name="Fname" class="form-control" id="inputFirstName" placeholder="Ram">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputLastName">Last Name</label>
                  <input type="text"  name="Lname" class="form-control" id="inputLastName" placeholder="Laxman">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="usn">USN</label>
                  <input type="text" name="USN" class="form-control" id="usn" placeholder="1CG12IS000" >
                </div>
               
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Phone">Phone:</label>
                  <input type="text" name="Num" class="form-control" id="Phone" placeholder="91xxxxxxxx">
                </div>
				
				 <div class="col-lg-6 col-md-6 form-group">
                  <label for="Email">Email</label>
                  <input type="Email" name="Email" class="form-control" id="Email" placeholder="abc@example.com">
                </div>
				
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date of Birth</label>
                  <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Semester</label>
                  <select name="Cursem" class="form-control">
                    <option value="select">Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
				  </div>
				  
				
				  <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Branch of Study</label>
                  <select name="Branch" class="form-control">
                    <option value="select">Branch</option>
                    <option value="BScience">Basic Science</option>
                    <option value="ISE">ISE</option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CVE">CVE</option>
                  </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="sslc">SSLC/10th Aggregate</label>
                  <input type="text" name="Percentage" class="form-control" id="sslc" placeholder="">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Pu">12th/Diploma Aggregate</label>
                  <input type="text" name="Puagg" class="form-control" id="Pu" placeholder="">
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="BE">BE Aggregate</label>
                  <input type="text" name="Beagg" class="form-control" id="BE" placeholder="">
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Current Backlogs</label>
                  <select name="Backlogs" class="form-control">
                    <option value="select">Numbers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">History of Backlogs</label>
                  <select name="History" class="form-control">
                    <option value="Y/N">Y/N</option>
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Detained Years</label>
                  <select name="Dety" class="form-control">
                    <option value="select">Years</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                
              </div>               
              </div>
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">Upload your Profile Pic</label>
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true"
                  data-icon="false">
                  <p>Maximum upload size is 5 MB.</p>
                </div>
              </div>
              <div class="form-group text-right">
                
				<button type="submit"  name="submit" class="templatemo-blue-button">add</button>
				<button type="submit"  name="update" class="templatemo-blue-button">update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
              </div>
            </form>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2015 CIT-PMS | Developed by
              <a href="http://www.wafferdevelopers.com" target="_parent">Waffer Developers</a>
            </p>
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>