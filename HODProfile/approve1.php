<?php
  session_start();
 if ($_SESSION['husername']){
    echo "Welcome, ".$_SESSION['husername']."!";
  }
   else {
	   header("location: index.php");
   die("You must be Log in to view this page <a href='index.php'>Click here</a>");}
?>
<html>

<form action="approve.php" method="post">
Enter the USN:<input type="text" name="id"><br><br>
<input type="submit" value="approve">

</form>
</html>