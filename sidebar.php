
<div class="thumbnail"style="background-color: green;color: white;text-align:center;margin-top: 10px;">

			<?php
			$user=$_SESSION['username'];
			$getNames="SELECT fname,lname FROM users_table WHERE email='$user'";
			$getResult=mysqli_query($connect,$getNames);
			$row=mysqli_fetch_array($getResult,MYSQLI_ASSOC);
			$fname=$row['fname'];
			$lname=$row['lname'];
			?>
		<p style="font-size: 24px;"><?php echo $fname." ".$lname; ?></p>
		<p style="text-align: center;">Client</p>
	</div>
	
		<ul class="list-group noprint"style="margin-top: -20px;"id="quick_licks">
			<li class="list-group-item"><a href="user.php?loans">Loans/bank</a></li>
			<li class="list-group-item"><a href="user.php?reports">Reports</a></li>
			<li class="list-group-item"><a href="user.php?my_profile">My Profile</a></li>
			<li class="list-group-item"><a href="user.php?settings">Settings</a></li>
			
		</ul>
	