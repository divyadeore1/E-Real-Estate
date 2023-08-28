<html>
<head>
<title>Pune  Real Estate</title>
<link rel="stylesheet" href="style.css"></link>
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
					<li>Property Details</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3>Property Details</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	 </div>
<div  class="container" style="width:100%;">	
<div class="row">
<div class="col-sm-8">
<?php
include "db.php";
$property_id = $_GET['id'];
$query = "SELECT * FROM user where id='".$userid."'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
?>
<div style="margin: 15px 25px;"><h2>Property Description</h2></div>
<div style="float:left; padding: 10px 20px 10px 20px;">

<?php echo $row['property_desc']; ?>

</div>
<div class="clearfix"></div>
<div style="float:left;">
<table style="margin-left: 20px; margin-bottom:10px;" >
<tr><td class="col-sm-2" style="padding: 5px;">Purpose</td>
<td class="col-sm-4" style="padding: 5px;"> <?php echo $row['purpose'] ?> </td></tr>

<tr><td class="col-sm-2" style="padding: 5px;">Type</td> 
<td class="col-sm-4" style="padding: 5px;"> <?php echo $row['type'] ?> </td></tr>

<tr><td class="col-sm-2" style="padding: 5px;">Location</td> 
<td class="col-sm-4" style="padding: 5px;"> <?php echo $row['location'] ?> </td></tr>

<tr><td class="col-sm-2" style="padding: 5px;"> Owner </td> 
<td class="col-sm-2" style="padding: 5px;"> <?php echo $row['owner'] ?> </td></tr>

<tr><td class="col-sm-2" style="padding: 5px;"> Size</td> 
<td class="col-sm-4" style="padding: 5px;"> <?php echo $row['size'] ?> </td></tr>

<tr><td class="col-sm-2" style="padding: 5px;"> Prize </td> 
<td class="col-sm-2" style="padding: 5px;"> <?php echo $row['prize'] ?> </td></tr>

</table>

</div><br>





</div>
<div class="col-sm-4">
<div class="contact_block">
<div style=" color: red;"><?php if(isset($message))echo $message; ?></div><br>
					
<form action=" " method="POST">
<table>
                            <tr><td><label for="name"> Name </label><br>
							<input type="text" name="name" placeholder="name" class="form-control" size="35" required=""></td></tr>
							
							<tr><td><label>Email</label><br>
							<input type="text" name="email" placeholder="Email"  class="form-control" size="35" required=""></td></tr>
							
							<tr><td><label>Phone</label><br>
							<input type="text" name="phone" placeholder="Phone"  class="form-control" size="35" required=""></td></tr>
							
							<tr><td><label>Subject</label><br>
							<input type="text" name="subject" placeholder="Subject"  class="form-control" size="35" required=""></td></tr>
							
							<tr><td><label>Message</label><br>
							<textarea rows="4" name="message" placeholder="message" class="form-control" cols="35" required=""></textarea></td></tr>
</table>
<div class="m2" style="text-align:center;">
<a href="contact-us.php" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1"> Contact Owner </a>
</div> 
</form>
</div>
</div>
</div>

<div class="clearfix"> </div>

<div class="row">

<div style="margin: 15px 20px;"><h2>Property Photos</h2></div>

<div class="col-sm-3"><img src="admin/images/<?php echo $row['property_img_one'];?>" alt=" " class="img-responsive" style="margin-top: 10px; margin-bottom: 10px; height:200px;"></div>
<div class="col-sm-3"><img src="admin/images/<?php echo $row['property_img_two'];?>" alt=" " class="img-responsive" style="margin-top: 10px; margin-bottom: 10px; height:200px;"></div>
<div class="col-sm-3"><img src="admin/images/<?php echo $row['property_img_three'];?>" alt=" " class="img-responsive" style="margin-top: 10px; margin-bottom: 10px; height:200px;"></div>
<div class="col-sm-3"><img src="admin/images/<?php echo $row['property_img_four'];?>" alt=" " class="img-responsive" style="margin-top: 10px; margin-bottom: 10px; height:200px;"></div>

</div>
</div>


<?php
}       } 
?>


<?php
include 'includes/footer.php';
?>
<?php
include'includes/jsscripts.php';
?>
</body>
</html>