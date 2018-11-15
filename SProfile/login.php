<?php
  session_start();
  if($_SESSION["username"]){

  }
   else {
	   header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
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
              <a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li>
            <li>
              <a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a>
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
                  <a href="../../Homepage/index.php">Home CUSAT-SOE</a>
                </li>
                <li>
                  <a href="../../Drives/index.php">Drives Homepage</a>
                </li>
                <li>
                  <a href="Notif.php">Notifications</a>
                </li>
                <li>
                  <a href="Change Password.php">Change Password</a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">Welcome to CUSAT-SOE</h2>
              <hr>
              <p>Work is Magic and it defines you at every aspect of ur life. As you Work Hard u will become smart and the Irony is Every Smart worker will be a Successfull man where as worthless hardwork is like a monkey finding gold in a sea.
                <a href="preferences.php""
                target="_parent">Go and Fill your Details in Preferences Tab</a>
                </p>
              <p>We have got number of Partners from the companies who are tied up to our college and it is Incresasing. We are doing our Job of getting u Placed and
                Being a Student its your duty to acompolish ur responsibilities.</p>
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <h4 class="text-uppercase">Assigned Projects</h4>
              <h5 class="text-uppercase margin-bottom-10">Projects (Beta)</h5>
              <img src="images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
            </div>
            <div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times"></i>
              <h4 class="text-uppercase">Academics Progress</h4>
              <h5 class="text-uppercase">Grades of Progress</h5>
              <hr>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                style="width: 60%;"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                style="width: 50%;"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                style="width: 60%;"></div>
              </div>
            </div>
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Latest Drive</h2>
                    <p>Click on and get the Latest Drive and Upcomming Drive Details</p>
                  </div>
                </div>
              </div>
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Upcomming Events</h2>
                    <p>Brace yourself for the Events that will take ur breath away. Get Started and be a Part of CUSAT-SOE Family</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative">
                  <h2 class="text-uppercase">Lately Placed Students</h2>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>USN</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>@jS</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Bill</td>
                        <td>Jones</td>
                        <td>@bJ</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Mary</td>
                        <td>James</td>
                        <td>@mJ</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Steve</td>
                        <td>Bride</td>
                        <td>@sB</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Paul</td>
                        <td>Richard</td>
                        <td>@pR</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Second row ends -->
          <footer class="text-right">
            		<p>Copyright &copy; 2018 CUSAT-SOE | Developed by
              <a href="http://znumerique.azurewebsites.net" target="_parent">HyperMine </a>
			  </p>
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>
