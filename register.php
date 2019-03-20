<?php
include 'header.php';
include 'inc.php';
if(isset($_POST['register']))
{  
    $code=rand();
	$active='0';
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$idno=$_POST['idno'];
	$dob=$_POST['dob'];
	$kra=$_POST['kra'];
	$mobile=$_POST['mobile'];
    $county=$_POST['constituency'];
    
    $policies=$_POST['policies'];
	$residence=$_POST['residence'];
	$address=$_POST['address'];
	$occupation=$_POST['occupation'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$group_id='1';
	$cpwd=$_POST['cpwd'];
	if(!empty($fname)&&!empty($lname)){
		
	
	$register="INSERT INTO users_table(fname,lname,idno,dob,kra,mobile,county,policies,residence,address,occupation,email,pwd)VALUES('$fname','$lname','$idno','$dob','$kra','$mobile','$county','$policies','$residence','$address','$occupation','$email','$pwd')";
	if(mysqli_query($connect,$register))
	{
	
		echo "<script>alert('registration successful')</script>";
		 echo "<script>window.open('login.php','_self')</script>";
	}
	else
	{
		echo "error occured";
	}
	}
	else{
		echo "<script>alert('all fields required')</script>";
	}
	
}
?>
<div class="navbar"style="background-color: green;;box-shadow: 4px 10px 15px grey;">
	<?php include 'navbar.php'; ?>
</div>
<div class="row" style="margin-top: 50px;">
	<div class="col-sm-2">
		
	</div><!--End of row-->
	<div class="col-sm-8">
		<form method="POST"action="register.php"class="well"style="box-shadow: 4px 4px 6px 6px grey;">
	<div class="row">
	<div style="text-align: center;position: relative;top: -70px;">
	<div class="panel-heading">
	<div class="well"style="background-color: green;color: white;">
		<h4>Register</h4>
      <p>Please provide your personal information</p>
	</div><!--End of well-->
	</div><!--End of panel heading-->
	<div class="panel-body"style="box-shadow: 2px 6px 6px 3px grey;margin: 10px;">
		<div class="col-sm-6">
			<div class="form-group">
			<label for="fname"class="control-label">First Name</label>
		    <input type="text"name="fname"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="lname"class="control-label">Last Name</label>
		    <input type="text"name="lname"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="idno"class="control-label">Id Number</label>
		    <input type="text"name="idno"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="dob"class="control-label">Date of Birth (format: YYYY-MM-DD)</label>
		    <input type="text"name="dob"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="kra"class="control-label">K.R.A PIN</label>
		    <input type="text"name="kra"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="mobile"class="control-label">Mobile Number</label>
		    <input type="text"name="mobile"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="Constituency"class="control-label">County</label>
		    <input type="text"name="constituency"class="form-control"/>
			</div><!--End of form group-->
			
		</div><!--End of row-->
		<div class="col-sm-6">
			<div class="form-group">
			<label for="residence"class="control-label">Place of Residence</label>
		    <input type="text"name="residence"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="address"class="control-label">Current Address</label>
		    <input type="text"name="address"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="occupation"class="control-label">Occupation</label>
		    <input type="text"name="occupation"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="email"class="control-label">Email</label>
		    <input type="email"name="email"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="password"class="control-label">Password</label>
		    <input type="password"name="pwd"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
			<label for="cpassword"class="control-label">Confirm Password</label>
		    <input type="password"name="cpwd"class="form-control"/>
			</div><!--End of form group-->
            <div class="form-group">
			
			<div class="form-group">
			<input type="checkbox"value="yes"name="policies"/> Agree to our policies?
			</div><!--End of form group-->
			<br /><br /><br /><br /><br /><br />
			<div class="form-group">
					 		<input type="submit"name="register"value="REGISTER"class="btn pull-right"style="background-color: green;padding: 15px 30px;color: white;margin-right: 20px;"/>
					 	</div><!--End of form group-->
					 	</div><!--End of col 6-->
		</div><!--End of panel body-->
		</div><!--End of div-->
	</div><!--End of row-->
	<h5 style="text-align: center;color: red;">SECURITY WARNING</h5>
	<p>
		This registration request will be processed together with your device ID number and IP address. Unfortunately, the law does not allow us to publicly display your device ID, but your internet protocol address number. Your IP address is:
	</p>
	<p style="text-align: center;color:red;"><?php echo $_SERVER['SERVER_ADDR']; ?></p>
</form>
	</div><!--End of col-->
</div><!--End of row-->
<?php include 'footer.php'; ?>