<?php 
	session_start();
  	if (isset($_SESSION['pusername'])){
		header("location: login.php");
	}	 
 ?>