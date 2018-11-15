<?php
  session_start();
 if (isset($_SESSION['priusername'])){

	   }
   else {
	   header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Search By</h2>
<center>
					<form  action="COUNT3s1.php" method="POST">
						Student Name :
						<input type="text" name="sname">
						<button type="submit" name="s1" >Search</button>
						<br><br>
					</form>
					<form  action="COUNT3s2.php" method="POST">
						Student USN : &nbsp
						<input type="text" name="susn">
						<button type="submit" name="s2" >Search</button>
						<br><br>
					</form>
					<form  action="COUNT3s3.php" method="POST">
						Semister Wise :
						<input type="text" name="csem">
						<button type="submit" name="s3" >Search</button>
						<br><br>
					</form>
					<form  action="COUNT3s4.php" method="POST">
						Branch : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="cbranch">
						<button type="submit" name="s4" >Search</button>
						<br><br>
					</form>
					<form  action="COUNT3s5.php" method="POST">
						SSLC : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="text" name="csslc">
						<button type="submit" name="s5" >search</button>
						<br><br>
					</form>
					<form  action="COUNT3s6.php" method="POST">
						PU/Diploma : &nbsp
						<input type="text" name="cpu">
						<button type="submit" name="s6" >search</button>
						<br><br>
					</form>
					<form  action="COUNT3s7.php" method="POST">
						BE Aggregate :
						<input type="text" name="cbe">
						<button type="submit" name="s7" >search</button>
						<br><br>
					</form>
</center>
<footer class="text-right">
            <p>Copyright &copy; 2018 CUSAT-SOE
            | Developed by <a href="http://www.Wafferdevelopers.com" target="_parent">HyperMine</a></p>
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
