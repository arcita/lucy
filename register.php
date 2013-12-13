<?php 
	if($_SESSION['UserID']){
		header("Location: /home.php"); /* Redirect browser */
	}else{
		// do nothing, you are safe
	}
	?>
<!doctype html>  
<head>
    <meta charset="UTF-8">
    <title>Lucy - Register</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
     <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
<?php include('includes/headcontent.php');?>
<?php include('includes/functions.php');?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $(function() {
    $("#datepicker").datepicker();
  });
  </script>
  
</head>
<body>
  <?php include('includes/header.php');?>

  <div id="content">
    <div class="quote">
     <section class="welcome">
      <h2 class="fontface"> <span class="green">P</span>lease Fill Out Form</h2> 
      </section>
    </div>
	<?php
	echo "username: " . $_SESSION['UserID'] . "<br>";
    	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['displayname']) && isset($_POST['bday']))	{
    		echo "<br>Processing Request<br>";
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$displayname = $_REQUEST['displayname'];
			$birthdate = $_REQUEST['bday'];
			echo "collected data<br>";

			// check username is used
			if(checkloginNameExists($userName)){
				echo "Username is taken<br>";
			}
			
			// check display name is used
			else if (checkDisplayNameExists($displayname)){
				echo "Displayname is taken<br>";
			}

			// save data
			else if(createUser($username, $password, $displayname, $birthdate)){
				echo "Registration Worked<br>";
				$_SESSION['UserID'] = $username;
				echo "Session Set<br>";
				header("Location: /home.php");
			}else{
				echo "Registration Failed<br>";
			}
		}else{
			echo "data not set<br>";
		}
?>
		<form method="post" action="?">
		Username: <input type="text" name="username" /><br>
		Password: <input type="password" name="password" /><br>
		Birth Date: <input type="text" name="bday" id="datepicker" /><br>
		Display Name: <input type="text" name="displayname"><br>
		<tr><td> <input type="submit" name="submit_response" value="Submit"/><input type="reset" value="Clear" /></td></tr>
		</form>
  </div>

  <?php include('includes/footer.php');?>
 </body>
</html>
