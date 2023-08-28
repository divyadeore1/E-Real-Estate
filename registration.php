<!DOCTYPE html>
<html>
<head>
<title>Pune Real Estate</title>
<?php
include'includes/cssscripts.php';
?>
</head>

<body>
<?php
include 'includes/header.php';
?>

<?php include 'dbcontroller.php';?>

<?php
$db_handle = new DBController();
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	
	/* username Validation */
	if(!isset($message))	{
		if(isset($_POST['username']))
		{		
		  $chkusernamequery = "SELECT username FROM user WHERE username = '" . $_POST['username'] . "'";
		  $chkusernamequeryresult = $db_handle->numRows($chkusernamequery);		 
		  if($chkusernamequeryresult) {
			  $message= "Username Already Exit!";
		  }
		}
	}
	
	if(!isset($message))
	{
	/* Password matching Validation */
	
	if($_POST['password'] !=$_POST['c_password']){
	$message = " Password should be same";
	}
	}
	
	/* Email Validation */
	if(!isset($message))
	{
		if(!filter_var($_POST["emailid"],FILTER_VALIDATE_EMAIL))
		{
			$message="Invalid Email id";
		}
	}
	
	/* Mobile Validation */
	if(!isset($message))
	{
		if(!preg_match('/^[0-9]{10}$/',$_POST['phoneno']))
		{
			$message="Invalid Mobile Number";
		}
	}
	
	/* First Name Validation */
	if(!isset($message))
	{
		if(!preg_match('/^[a-zA-Z]*$/',$_POST['name']))
		{
			$message="First name should contain only characters.";
		}
	}

  
	if(!isset($message)) {
		$query ="INSERT INTO user(name,username,aadharno,password,emailid,address,dob,phoneno,user_photo)
VALUES('".$_POST['name']."','".$_POST['username']."','".$_POST['aadharno']."','".$_POST['password']."','".$_POST['emailid']."','".$_POST['address']."','".$_POST['dob']."','".$_POST['phoneno']."','".$_POST['user_photo']."')";
		$result = $db_handle->insertQuery($query);
		
		if(!empty($result)) {
			$message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$message = "Problem in registration. Please Try Again!";	
		}
	}
	}
?>

<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="index.php">Home</a> <i>/</i></li>
					<li>Registration</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3>Registration</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<div class="container">
   <div class="reg-left">
				<h3><span>USER REGISTRATION</span></h3>
				<br>
				<div class="reservation">
				<div class="keywords">
				<div style=" color: red;"><?php if(isset($message))echo $message; ?></div><br>
						<form action="" method="POST">
						
							<div class="col-md-4" style="padding-top:10px;">
							Name
							</div>
							<div class="col-md-8">
							<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" placeholder="Enter Name" required="">
							</div>
						
							<div class="col-md-4" style="padding-top:10px;">
							Username
							</div>
							<div class="col-md-8">
							<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" placeholder="Enter username" required="">
							<span id="user-availability-status"></span>
							
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Aadhar No
							</div>
							<div class="col-md-8">
							<input type="text"  name="aadharno" value="<?php if(isset($_POST['aadharno'])) echo $_POST['aadharno'];?>" placeholder="Enter Aadhar No" required="">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Password
							</div>
							<div class="col-md-8">
							<input type="Password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>" placeholder="Enter password" required="">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Confirm Password
							</div>
							<div class="col-md-8">
							<input type="password" name="c_password" value="<?php if(isset($_POST['c_password'])) echo $_POST['c_password'];?>" placeholder="Enter Confirm_Password" required="true">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Email ID
							</div>
							<div class="col-md-8">
							<input type="text" name="emailid" value="<?php if(isset($_POST['emailid'])) echo $_POST['emailid'];?>" placeholder="Enter Email_ID" required="true">
							</div>						
							
							
						   <div class="col-md-4" style="padding-top:10px;">
							Address
							</div>
							<div class="col-md-8">
							<input type="text"  name="address" value="<?php if(isset($_POST['address'])) echo $_POST['address'];?>" placeholder="Enter Address" required="">
							</div>
						   <div class="col-md-4" style="padding-top:10px;">
							DOB
							</div>
							<div class="col-md-8">
							<input type="date"  name="dob" style="width:100%; margin-bottom: 10px;" value="<?php if(isset($_POST['dob'])) echo $_POST['dob'];?>" placeholder="Enter DOB" required="">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Mobile no
							</div>
							<div class="col-md-8">
							<input type="text"  name="phoneno" value="<?php if(isset($_POST['phoneno'])) echo $_POST['phoneno'];?>" placeholder="Enter Mobile no" required="">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Profile Photo
							</div>
							<div class="col-md-8">
							 <div class="form-group">
							    <input type="file" class="filestyle" name="user_photo" value="<?php if(isset($_POST['user_photo'])) echo $_POST['user_photo'];?>">
                             </div>
							</div>
							
							
				          
						   </div>
							<div class="col-md-8">
							<input type="submit" name="button"  class="button" value="submit"
                              style="margin-top:10px;"	size="10">
						</div>
							
					</form>	
						
				</div>
				</div>
   </div>
</div>		
	
<?php include'includes/jsscripts.php'; ?>
<?php include'includes/footer.php'; ?>
</body>
</html>