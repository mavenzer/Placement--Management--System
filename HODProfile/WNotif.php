<?php
  session_start();
 if (($_SESSION['husername'])){

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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOD - Preferences</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
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
          echo "<h1>" . $Welcome . "<br>". $_SESSION['husername']. "</h1>";
		  echo "<h1>(</h1>";
		    echo "<h1>" . $_SESSION['department']. "</h1>";
            echo "<h1>)</h1>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" GET IN TOUCH

NH4, Heruralt="Profile Photo" class="img-responsive">
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
            <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="manage-student.php"><i class="fa fa-users fa-fw"></i>Manage Students</a></li>
            <li><a href="#"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                  <li><a href="../../Homepage/indes.php">Home CUSAT-SOE</a></li>
                <li><a href="">Drives Home</a></li>
                 <li><a href="Notif.php">Notification</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Write Messages</h2>
            <p>Department Notifications to Students</p>
            <form action="WN.php" method="POST">
              <div class="row form-group">
                <div class="col-lg-12 form-group">
                    <label class="control-label" for="inputNote">Subject:</label>
                    <textarea class="form-control" id="inputNote" rows="2"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">
                    <label class="control-label" for="inputNote">Message:</label>
                    <textarea class="form-control" id="inputNote" rows="5"></textarea>
                </div>
              </div>


              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">POST</button>
                <button type="reset" class="templatemo-white-button">Clear</button>
              </div>


<center><label class="control-label" for="inputNote"><center><h2>OR</h2></center> <br/> <br/>To Upload an Image Click the Link below:</label><br/>
			   <br/>
			   <a href="upload.html" class="templatemo-blue-button">Post an Image</a></center>
            </form>
          </div>


          <footer class="text-right">
           <p>Copyright &copy; 2018 CUSAT-SOE |
              <a href="http://znumerique.azurewebsites.net" target="_parent">HyperMine</a>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
