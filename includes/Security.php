<?php
	$sid = session_id();
	if($sid){
		// do nothing, session started
	}
	else{
		session_start();
	}

	if($_SESSION['UserID']){
		// do nothing, you are safe
	}else{
		header("Location: /login.php"); /* Redirect browser */
	}
		


?>
