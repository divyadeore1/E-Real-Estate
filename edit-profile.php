<!DOCTYPE html>
<html>
<head>
<title>Pune  Real Estate</title>
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

$id = $_GET['userid'];
if(count($_POST)>0) {


	
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
		$target_dir = "admin/images/";
$target_file = $target_dir . basename($_FILES["user_photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["user_photo"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["user_photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

		if(isset($_POST['submit'])){
		$query ="UPDATE user SET name='".$_POST['name']."',username='".$_POST['username']."',password='".$_POST['password']."',
		aadharno='".$_POST['aadharno']."',emailid='".$_POST['emailid']."',address='".$_POST['address']."',dob='".$_POST['dob']."'
        ,phoneno='".$_POST['phoneno']."',user_photo='".$_POST['upload_user_photo']."'	 WHERE userid ='".$id."'	";
		$result = $db_handle->updateQuery($query);
		
		if(!empty($result)) {
			$message = "Updated Records successfully!";	
			unset($_POST);
		} else {
			$message = "Problem in updating data. Please Try Again!";	
		}
	}
} }
?>

<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="index.php">Home</a> <i>/</i></li>
					<li>Edit Profile</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3>Edit Profile</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<div class="container">
   <div class="reg-left">
				<h3><span>My Profile</span></h3>
				<br>
				
				<div class="reservation">
				<div class="keywords">
				<div style=" color: red;"><?php if(isset($message))echo $message; ?></div><br>
						<form action="" method="POST" enctype="multipart/form-data">
<?php
include "db.php";
$query = "SELECT * FROM user where userid='".$id."' ";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){

?>						
							<div class="col-md-4" style="padding-top:10px;">
							Name
							</div>
							<div class="col-md-8">
							<input type="text" name="name" value="<?php echo $row['name'];?>">
							</div>
						
							<div class="col-md-4" style="padding-top:10px;">
							Username
							</div>
							<div class="col-md-8">
							<input type="text" name="username" value="<?php echo $row['username'];?>">
							<span id="user-availability-status"></span>
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Aadhar No
							</div>
							<div class="col-md-8">
							<input type="text"  name="aadharno" value="<?php echo $row['aadharno'];?>">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Password
							</div>
							<div class="col-md-8">
							<input type="Password" name="password" value="<?php echo $row['password'];?>">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Confirm Password
							</div>
							<div class="col-md-8">
							<input type="password" name="c_password" value="<?php echo $row['password'];?>">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Email ID
							</div>
							<div class="col-md-8">
							<input type="text" name="emailid" value="<?php echo $row['emailid'];?>">
							</div>						
							
							
						   <div class="col-md-4" style="padding-top:10px;">
							Address
							</div>
							<div class="col-md-8">
							<input type="text"  name="address" value="<?php echo $row['address'];?>">
							</div>
						   <div class="col-md-4" style="padding-top:10px;">
							DOB
							</div>
							<div class="col-md-8">
							<input type="date"  name="dob" style="width:100%; margin-bottom: 10px;" value="<?php echo $row['dob'];?>">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Mobile no
							</div>
							<div class="col-md-8">
							<input type="text"  name="phoneno" value="<?php echo $row['phoneno'];?>">
							</div>
							
							<div class="col-md-4" style="padding-top:10px;">
							Profile Photo
							</div>
							<div class="col-md-8">
							 <div class="form-group">
							 
							    <input style="display:none;"type="text" class="filestyle" id="upload_user_photo" name="upload_user_photo" placeholder="Choose File">
								 <input type="file" class="filestyle" name="user_photo" id="user_photo">
                             </div>
							</div>
								<script type="text/javascript">
	document.getElementById("user_photo").onchange = function(){
		var a = document.getElementById("user_photo").files[0].name;
		 
		document.getElementById("upload_user_photo").value = a;
	};
	
	</script>
							
				           <div class="col-md-4" style="padding-top:10px;">
						   </div>
							<div class="col-md-8">
							<input type="submit" name="submit"  class="button" value="Update"
                              style="margin-top:10px;"	size="10">
						</div>
						<?php    }  ?>	
					</form>	
						
				</div>
				</div>
				
   </div>
</div>		

<?php include'includes/jsscripts.php'; ?>
<?php include'includes/footer.php'; ?>
</body>
</html>