<?php 
	session_start();
  	if (isset($_SESSION['husername'])){
		header("location: login.php");
	}	 
 ?>