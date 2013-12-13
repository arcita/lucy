<header>
    <div class="container">
      <!--start title-->
      <h1 class="fontface" id="title"><span class="green">L</span>ucy Chatbot</h1>

      <!--end title-->
      <!--start menu-->
      <nav>
        <ul>
          <li><a href="/home.php">Settings</a></li>
		<?php
			if(checkAdmin($_SESSION['UserID'])){
				echo "<li><a href=\"/Admin.php\">Admin</a></li>";
			}
		?>
          <li>
		<?php
			if($_SESSION['UserID']){
				echo "<a href=\"/Logout.php\">Logout</a>";
			}else{
				echo "<a href=\"/login.php\">Login</a>";
			}
		?>
		</li>
        </ul>
      </nav>
    </div>
  </header>
