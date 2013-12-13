<?php include('includes/Security.php'); ?>
<?php include('includes/AdminSecurity.php'); ?>
<!doctype html>  
<head>
  <meta charset="UTF-8">
  <title>Lucy - Admin</title>
  <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
   <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <?php include('includes/headcontent.php');?>
  <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>
<body>
  <?php include('includes/header.php');?>

  <div id="content">
    <div class="quote">
     <section class="welcome">
      <h2 class="fontface"> <span class="green">Welcome</span>.This is <span class="green">L</span>ucy admin panel!</h2> 
      The following features will be made soon: Edit table items; 
      </section>
    </div>

    <div class="quote">
      <?php include('includes/viewDB.php');?>
    </div>
  </div>

  <?php include('includes/footer.php');?>
 </body>
</html>
