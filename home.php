<?php include('includes/Security.php'); ?>
<!doctype html>  
<head>
    <meta charset="UTF-8">
    <title>Lucy - Home</title>
    <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
     <!--[if lt IE 9]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
<?php include('includes/headcontent.php');?>
<?php include('includes/functions.php');?>

</head>
<body>
<!-- Include Header -->
  <?php include('includes/header.php');?>
<!-- End Header -->

  <div id="content">
    <div class="quote">
     <section class="welcome">
      <h2 class="fontface"> <span class="green">Welcome</span> <?php echo GetDisplayName($_SESSION['UserID'])?>.This is <span class="green">L</span>ucy the Chatbot!</h2> 
      Go ahead and talk to her, she doesn't bite!
      </section>
    </div>
    <div class="quote">
      <div id="conversation" class="chatLocation">
	<?php
		
	?>
      </div>
      <div id="chatsector" class="chatLocation">


<?php
    	if(isset($_POST['submit_response']))	{
    		$message = $_REQUEST['message'];
		$message = preg_replace("/[^a-zA-Z 0-9]+/", " ", $message);	//strips non alpha-numerics.
		$message = strtolower($message);	//looks odd, but is best for searching
		if ($message !== '') {
			if (filterInput($message)) {	//contains banned words
				echo "I refuse to accept that.";
			}
			else {
				echo add_response($message)  ; // the -1 needs to be replaced with LUCY's given response. -1 if no response given.
			}
		}
		else
			echo "You didn't enter anything...";
	}
?>
		<form method="post" action="?">
		<input type="text" name="message" /><br>
		<tr><td> <input type="submit" name="submit_response" value="Submit"/><input type="reset" value="Clear" /></td></tr>
		</form>




      </div>
    </div>
  </div>

  <?php include('includes/footer.php');?>
 </body>
</html>
