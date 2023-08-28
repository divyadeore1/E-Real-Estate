<!DOCTYPE html>
<html>
<head>
<title>Pune Real Estate</title>
<?php include'includes/cssscripts.php'; ?>
</head>

<body>

<?php 
include 'includes/header.php'; ?>
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
	
        /* First Name Validation */
	if(!isset($message))
	{
		if(!preg_match('/^[a-zA-Z]*$/',$_POST['name']))
		{
			$message="First name should contain only characters.";
		}
	}

         /* Mobile Validation */
	if(!isset($message))
	{
		if(!preg_match('/^[0-9]{10}$/',$_POST['phone']))
		{
			$message="Invalid Mobile Number";
		}
	}
           

	/* Email Validation */
	if(!isset($message))
	{
		if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
		{
			$message="Invalid Email id";
		}
	}
	
	
	if(!isset($message)) {
		$query ="INSERT INTO tblcontact(name,email,phone,msg)
VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['msg']."')";
		$result = $db_handle->insertQuery($query);
		
		if(!empty($result)) {
			$message = "Your response submitted successfully!";	
			unset($_POST);
		} else {
			$message = "Problem in contacting. Please Try Again!";	
		}
	}
}	

?>

<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="index.php">Home</a> <i>/</i></li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3>Contact US</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	 </div>

<div class="contact">
     <div class="container">
			<h3><span>Contact Us</span></h3>
			
			<div class="contact-grids">
                             <div class="contact-grid">

                                <div style=" color: red;"><?php if(isset($message))echo $message; ?></div><br>
					<div class="col-md-6 contact-grid-left">
					
						<form action="" method="post">
							<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" placeholder="Enter Name" required="">
							<input type="text"  name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>" placeholder="Enter Mobile no" required="">
						
					</div>
					<div class="col-md-6 contact-grid-left">
						
							<input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" placeholder="Enter Email_ID" required="true">
							
						
					</div>

                                         <div class="clearfix"> </div>

					<form action="#" method="post">
					<div class="col-md-6 contact-grid-left">
						<textarea name="msg" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'msg';}" required="">Message...</textarea>
						<input type="submit" value="Submit Now">
                                         </div>
                                        
                                        </form>
                                  </form>
				</div>
                      </div>
			</div>
			<div class="contact-grid1">
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<h4>Contact By Email</h4>
						
						<ul>
							<li>Mail1: <a href="mailto:contact@example.com">info@real.com</a></li>
							<li>Mail2: <a href="mailto:contact@example.com">info@realestate.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<h4>Contact By Phone</h4>
						
						<ul>
							<li>Phone: 02382 200300</li>
							<li>Mobile: 8180935437</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<h4>Looking For Address</h4>
						
						<ul>
							<li>Address: Pune Real Estate</li>
							<li>NavshantiSadan, Akurdi.</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
<!-- //mail -->	
	 

	 
	 
<?php include 'includes/footer.php'; ?>
<?php include'includes/jsscripts.php'; ?>
</body>
</html>