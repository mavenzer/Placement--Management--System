<?php 
	session_start();
  	if (isset($_SESSION['priusername'])){
		header("location: login.php");
	}	 
 ?>