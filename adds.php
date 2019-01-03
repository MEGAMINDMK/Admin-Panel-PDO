<?php
//error_reporting(0);
include('connection.php'); 	
	if($_POST){
	$fname 	= $_POST['fname'];
	$email 	= $_POST['email'];
	$pass 	= $_POST['pass'];
	
		
		
		
		/* Create a prepared statement */
		$db->exec("INSERT INTO 'data' ('fname','email', 'pass') VALUES ('$fname', '$email', '$pass')");
			/* close connection */
		$db = null;
	}
	header("Location: index.php");
?>