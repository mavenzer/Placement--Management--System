<?php
  session_start();
 if (isset($_SESSION['priusername'])){
    
	   }
   else {
	   header("location: index.php");
  }  
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
    <title>QUERIES</title>
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
  <div class="bg">
   <div class="templatemo-content-container">
  <div class="templatemo-content-widget no-padding">
<?php
mysql_connect('localhost','root','');
mysql_select_db('details');
if(isset($_POST['s2']))
{ 
$Susn = $_POST['susn'];
$RESULT = mysql_query("SELECT * FROM basicdetails WHERE USN='$Susn'");
$row = mysql_fetch_assoc($RESULT);
echo "<br><h3>Details of Student '$Susn'&nbsp:&nbsp";
echo "</h3>";
            print "<center><tr>"; 
	print "<br><td>First Name :";
    echo $row['FirstName'];
	print "<br></td><td>Last Name :"; 
	echo $row['LastName'];	
	print "<br></td><td>USN :"; 
	echo $row['USN'];
	print "<br></td><td>Mobile :"; 
	echo $row['Mobile'];
	print "<br></td><td>Email :";
    echo $row['Email'];	
	print "<br></td><td>DOB :"; 
	echo $row['DOB'];
	print "<br></td><td>Semister :"; 
	echo $row['Sem'];
	print "<br></td><td>Branch :"; 
	echo $row['Branch'];	
	print "<br></td><td>SSLC Percentage :";
	echo $row['SSLC'];
	print "<br></td><td>PU/Diploma Percentage :";
	echo $row['PU/Dip'];
	print "<br></td><td>BE Aggregate :";
	echo $row['BE'];
	print "<br></td><td>Current Backlogs :";
	echo $row['Backlogs'];
	print "<br></td><td>History of Backlogs :";
	echo $row['HofBacklogs'];
	print "<br></td><td>Detain Years :";
	echo $row['DetainYears'];
print "</td></tr></center>"; 
}
?>
<footer class="text-right">
            <p>Copyright &copy; 2001-2015 CIT-PMS
            |  Developed by <a href="http://znumerique.azurewebsites.net" target="_parent">ZNumerique Technologies</a></p>
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