<?php
  session_start();
  if(isset($_SESSION["pusername"])){
  }
   else
	   header("location: index.php");
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
    <title>Company Details</title>
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
          echo "<h1>" . $Welcome . "<br>". $_SESSION['pusername']. "</h1>";
		 echo "<br>";

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
            <li><a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="Placement Drives.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>
            <li><a href="manage-users.php"><i class="fa fa-users fa-fw"></i>View Students</a></li>
            <li><a href="queries.php"><i class="fa fa-users fa-fw"></i>Queries</a></li>
            <li><a href="Students Eligibility.php" class="active"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
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
               <li><a href="../../Homepage/index.php">Home CIT-PMS</a></li>
                <li><a href="">Drives Home</a></li>
                <li><a href="Notif.php">Notifications</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
<div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
					<td><a href="" class="white-text templatemo-sort-by">First Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Last Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">USN<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Mobile<span class="caret"></span></a></td>
					   <td><a href="" class="white-text templatemo-sort-by">Email<span class="caret"></span></a></td>
                       <td><a href="" class="white-text templatemo-sort-by">Dob <span class="caret"></span></a></td>
   <td><a href="" class="white-text templatemo-sort-by">current sem<span class="caret"></span></a></td>
   <td><a href="" class="white-text templatemo-sort-by">Branch<span class="caret"></span></a></td>
   <td><a href="" class="white-text templatemo-sort-by">SSLC percentage <span class="caret"></span></a></td>
   <td><a href="" class="white-text templatemo-sort-by">PU percentage<span class="caret"></span></a></td>
			      <td><a href="" class="white-text templatemo-sort-by">BE aggregate<span class="caret"></span></a></td>
			      <td><a href="" class="white-text templatemo-sort-by">current backlogs <span class="caret"></span></a></td>
				     <td><a href="" class="white-text templatemo-sort-by">history of backlogs <span class="caret"></span></a></td>
				     <td><a href="" class="white-text templatemo-sort-by">Detain years<span class="caret"></span></a></td>
				  </thead>
			   </tr>

			   <?php

$num_rec_per_page=15;
$connect = mysqli_connect('localhost','root','','details');
// mysql_select_db('details');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;
$sql = "SELECT * FROM basicdetails where Approve='1' DESC LIMIT $start_from, $num_rec_per_page";
$rs_result = $connect->query ($sql); //run the query
?>
<?php


if(isset($_POST['submit']))
{
$branch = $_POST['Branch'];
$sslc= $_POST['sslc'];
$puaggregate = $_POST['pugg'];
$beaggregate= $_POST['beagg'];
$backlogs = $_POST['curback'];
$hisofbk = $_POST['hob'];
$dety = $_POST['dy'];
$sql = "SELECT * FROM basicdetails where Approve=1 and Branch='$branch' and SSLC>='$sslc' and `PU/Dip`>='$puaggregate' and BE>='$beaggregate' and Backlogs='$backlogs' and HofBacklogs='$hisofbk' and DetainYears='$dety'" ;
 //run the query

 $sql1 = $connect->query($sql);

while ($row = $sql1->fetch_assoc())
{


            print "<tr>";

print "<td>" . $row['FirstName'] . "</td>";
print "<td>" . $row['LastName'] . "</td>";
print "<td>" . $row['USN'] . "</td>";
print "<td>" . $row['Mobile'] . "</td>";
print "<td>" . $row['Email'] . "</td>";
print "<td>" . $row['DOB'] . "</td>";
print "<td>" . $row['Sem'] . "</td>";
print "<td>" . $row['Branch'] . "</td>";
print "<td>" . $row['SSLC'] . "</td>";
print "<td>" . $row['PU/Dip'] . "</td>";
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";

print "</tr>";

}
}
?>
 </tbody>
              </table>
			  </div>
			  </div>
			  </div>
			  <div class="pagination-wrap">
          <ul class="pagination">
			  <?php

$num_rec_per_page=15;
$connect = mysqli_connect('localhost','root','','details');
// mysql_select_db('details');
$sql = "SELECT * FROM basicdetails where Approve='1'";
$rs_result = $connect->query($sql); //run the query
$total_records = $rs_result->num_rows();  //count number of records
$totalpage = ceil($total_records / $num_rec_per_page);

$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
	 if($currentpage == 0)
	{

	}
	else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
	{

		if( $currentpage > 1 && $currentpage <= $totalpage)
			{

				$prev = $currentpage-1;
				echo "<li><a  href='eligibility.php?page=".$prev."'><</a></li>";

			}

	if($totalpage > 1){
$prev = $currentpage-1;
	for ($i=$prev+1; $i<=$currentpage+2; $i++){
		echo "<li><a href='eligibility.php?page=".$i."'>".$i."</a></li>";
  }
  }


	if($totalpage > $currentpage  )
	{
		$nxt = $currentpage+1;
		echo "<li><a  href='eligibility.php?page=".$nxt."' >></a></li>";
	}

	 echo "<li><a>Total Pages:".$totalpage."</a></li>";
}
 ?>

</ul>
</div>

			  <footer class="text-right">
           		<p>Copyright &copy; 2018 CUSAT-SOE| Developed by
              <a href="http://znumerique.azurewebsites.net" target="_parent">HyperMine</a>
			  </p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();
      });
    </script>
  </body>
</html>
