<?php include 'header.php';
include 'inc.php';
if(!isset($_SESSION['admin'])){
	header('location:admin_validate.php');
}
?>

<div class="navbar"style="background-color: green;box-shadow: 4px 10px 15px grey;">
	<?php include 'admin_navbar.php'; ?>
</div>
<div class="row">
	<div class="col-sm-3">
	<?php include 'admin_sidebar.php'; ?>
	<div class="col-sm-9">
		<?php
		if(isset($_GET['activate']))
		{
			include 'activate_users.php';
		}else if(isset($_GET['activate_id'])){
			$id=$_GET['activate_id'];
			$update="UPDATE users_table SET active='Active' WHERE user_id='$id'";
			if(mysqli_query($connect,$update)){
				echo "<div class='alert alert-success'>Activated successfully</div>";
			}


		}else if(isset($_GET['deactivate_id'])){
			$id=$_GET['deactivate_id'];
			$update="UPDATE users_table SET active='Inactive' WHERE user_id='$id'";
			if(mysqli_query($connect,$update)){
				echo "<div class='alert alert-danger'>Deactivated successfully</div>";
			}
		}
		
		else if(!isset($_GET['activate']) && !isset($_GET['view']))
		{
			include 'activate_users.php';
		
		}
		
		?>
	</div><!--End of col-->
</div><!--End of row-->
<?php include 'footer.php'; ?>