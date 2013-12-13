<?php
	include ('functions.php');
	if(checkAdmin($_SESSION['UserID'])){
		// do nothing, you are safe
	}else{
		header("Location: /login.php"); /* Redirect browser */
	}
		
?>
