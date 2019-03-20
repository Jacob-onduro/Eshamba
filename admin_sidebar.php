<div class="thumbnail"style="background-color: green;color: white;text-align:center;margin-top: 10px;">

			<?php
			$admin=$_SESSION['admin'];
			$getAdmin="SELECT fname,lname FROM admin WHERE username='$admin'";
			$getResult=mysqli_query($connect,$getAdmin);
			$rows=mysqli_fetch_array($getResult,MYSQLI_ASSOC);
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			?>
		<p style="font-size: 24px;"><?php echo $fname." ".$lname; ?></p>
		<p style="text-align: center;">Administrator</p>
	</div>
		<ul class="list-group"style="margin-top: -20px;"id="quick_licks">
			<li class="list-group-item"><a href="admin.php?activate">Activate Users</a></li>
			
		
		</ul>
	</div><!--End of col-->