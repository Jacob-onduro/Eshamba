<?php
include 'header.php';
include 'inc.php';
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$login="SELECT * FROM users_table WHERE email='$username' AND pwd='$pwd'";
	$result=mysqli_query($connect,$login);
	if(mysqli_num_rows($result)>0)
	{
		$validate_user="SELECT active FROM users_table WHERE email='$username' AND pwd='$pwd'";
		$active_result=mysqli_query($connect,$validate_user);
		$data_returned=mysqli_fetch_array($active_result);
		$active_id=$data_returned['active'];
		if($active_id !="Active")
		{
			echo "<div>Account not verified by the Admin</div>";
		}
		else
		{
			echo "<script>window.open('user.php','_self')</script>";
		    $_SESSION['username']=$username;
		}
		
	}
	else
	{
		echo "Wrong Username and/or password";
	}
}
?>
<div class="navbar"style="background-color: green;box-shadow: 4px 10px 15px grey;">
	<?php include 'navbar.php'; ?>
</div>
<div class="row">
	<div class="col-sm-4">
		
	</div><!--End of col-sm-4-->
	<div class="col-sm-4 well">
		<div style="padding: 20px auto;box-shadow: 2px 3px 4px 4px grey;">
			<div class="panel-heading"style="background-color: green;border-radius: 5px;position: relative;top: -30px;">
				<h4 style="text-align: center;padding: 10px;color: white;">Login</h4>
			</div><!--End of panel heading-->
			<div class="panel-body">
				<form method="POST"action="login.php">
			<div class="form-group">
				<label for="username"class="control-label">Username</label>
				<input type="text"name="username"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
				<label for="password"class="control-label">Password</label>
				<input type="password"name="pwd"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
				<input type="checkbox"value="remember"name="remember"/> Remember Me 
				<span class="form-helper"><br /><a href="#"style="color: green;">Forgot your password?</a></span>
			</div><!--End of form group-->
			<div class="form-group">
					 		<input type="submit"name="login"value="LOGIN"class="btn pull-right"style="background-color: green;padding: 15px 30px;color: white;margin-right: 20px;"/>
					 	</div><!--End of form group-->
		</form>
			</div><!--End of panel body-->
		</div><!--End of div-->
	</div><!--End of col-sm-4-->
</div><!--End of row-->
<?php include 'footer.php';?>