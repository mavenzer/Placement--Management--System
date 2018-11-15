<?php
	session_start();
	if(isset($_SESSION['pusername'])){
		session_destroy();
		header("location: index.php");
	}
	?>