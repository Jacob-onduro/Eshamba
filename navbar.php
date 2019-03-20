
<a href="index.php" class="navbar-brand">Eshamba</a>
<button type="button"class="navbar-toggle"data-toggle="collapse"data-target="#collapse">
<span class="icon-bar"style="background-color: white;"></span>
<span class="icon-bar" style="background-color: white;"></span>
<span class="icon-bar" style="background-color: white;"></span>
</button>
		<ul class="nav navbar-nav collapse navbar-collapse pull-right"id="collapse">
			<li><a href="#">ABOUT US</a></li>
			<li><a href="#">CONTACT US</a></li>
			<?php
			if(isset($_SESSION['username']))
			{
				$user=$_SESSION['username'];
				echo "<li><a>$user</a></li>";
				echo "<li><a href='logout.php'>LOGOUT</a></li>";
			}
			else
			{
				echo "<li><a href='register.php'>REGISTER</a></li>";
				echo "<li><a href='login.php'>LOGIN</a></li>";
			}
			?>
		</ul>
	