<a href="index.php" class="navbar-brand">EShamba</a>
<button type="button"class="navbar-toggle"data-toggle="collapse"data-target="#collapse">
<span class="icon-bar"style="background-color: white;"></span>
<span class="icon-bar" style="background-color: white;"></span>
<span class="icon-bar" style="background-color: white;"></span>
</button>
		<ul class="nav navbar-nav collapse navbar-collapse pull-right"id="collapse">
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<?php
			if(isset($_SESSION['admin']))
			{
				$admin=$_SESSION['admin'];
				echo "
				<li><a href='#'>$admin</a></li>
				<li><a href='admin_logout.php'>LOGOUT</a></li>
				
				";
			}
			else
			{
				echo "<li><a href='admin_validate.php'>LOGIN</a></li>";
			}
			?>
		</ul>
	