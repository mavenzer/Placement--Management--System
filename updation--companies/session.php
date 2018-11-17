<?php 
	include_once("connect.php");
	$abc="i am BITW";
	session_start();
	if (!isset($_SESSION['username']))
	{
		//echo "not set";
		$username="";
	}
	else
	{
		//echo 'in head_index'.$_SESSION['uname'];
		$username = $_SESSION['username'];
		//include 'head_menu.php';
		//$adm_na="";
		
	}
	
?>