<?php 
	$sid = session_id();
	if($sid){
		// do nothing, session started
	}
	else{
		session_start();
	}
	
	if($_SESSION['UserID']){
		header("Location: /home.php"); /* Redirect browser */
	}else{
		// do nothing, you are safe
	}
	?>
<!doctype html>  
<head>
    <meta charset="UTF-8">
    <title>Lucy - Login</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
     <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
<?php include('includes/headcontent.php');?>
<?php include('includes/functions.php');?>
</head>
<body>
  <?php include('includes/header.php');?>

  <div id="content">
    <div class="quote">
     <section class="welcome">
      <h2 class="fontface"> <span class="green">P</span>lease Log In</h2> 
      If you dont have an account, please <a href="/register.php">Regiter Here</a>.
      </section>
    </div>
    <div class="quote">
		<?php
		    	if(isset($_POST['username']) && isset($_POST['password']))	{
				echo "starting registration <br>";
		    		$username = $_POST['username'];
				$password = sha1 ($_POST['password']);
		echo "get login test <br>";
				echo "results: " . login($username, $password);
				if(login($username, $password)){
					$_SESSION['UserID'] = $username;
					echo "logged in!!<br>";
					echo $_SESSION['UserID'] . " ?<br>";
					header("Location: /home.php"); /* Redirect browser */
				}
				else{
					echo "login failed, username or password dont match or dont exist";
				}
			}
		?>
		<form method="post" action="?">
		<table>
			<tr>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="username" />
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
		</table>
		<input type="submit" name="submit_response" value="Submit"/>
		<input type="reset" value="Clear" />
	</form>
    </div>
	
		
  </div>

  <?php include('includes/footer.php');?>
 </body>
</html>
