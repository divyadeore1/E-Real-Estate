<!Doctype html>
<html>
<head>
<title>Pune Real Estate</title>
<?php include'includes/cssscripts.php'; ?>
<?php
$conn = mysqli_connect("localhost","root","","non_angular3");
?>
</head>

<body>
<?php include 'includes/header.php'; ?>
<?php include 'dbcontroller.php'; ?>

<?php 
session_start();
if(isset($_SESSION["current_user"]))
{
	$c_user = $_SESSION["current_user"];
	echo $c_user;
}

error_reporting(0);

?>
<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="index.php">Home</a> <i>/</i></li>
					<li>My Profile</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3>My Profile</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<div class="container">
				
<?php
		$db_handle = new DBController();
		$username=$_SESSION['username'];
                $query=mysqli_query($db,"SELECT * FROM user where username='$username'")
?>	
					<div class="col-md-4">
					 <img src="admin/images/<?php echo $row['user_photo']; ?>" alt="" width="250px" >
					</div>
					<div class="col-md-6">
					
                                        <table class="table">
					
					<tr><td><label>Name</label></td><td><?php echo $row["name"];?></td></tr>
					<tr><td><label>Address</label></td><td><?php echo $row["address"];?></td></tr>
					<tr><td><label>Email id</label></td><td><?php echo $row["emailid"];?></td></tr>
					<tr><td><label>Aadhar number</label></td><td><?php echo $row["aadharno"];?></td></tr>
					<tr><td><label>Username</label></td><td><?php echo $row["username"];?></td></tr>
					<tr><td><label>DOB</label></td><td><?php echo $row["dob"];?></td></tr>
					<tr><td><label>Mobile number</label></td><td><?php echo $row["phoneno"];?></td></tr>
					</table>
					</div>
					
					<div class="col-md-2">
					<div class="example">
                          <a href="edit-profile.php" style="width:100%;" class="link-effect link-effect-21">Edit Profile</a>
                          <a href="sign-out.php" class="link-effect link-effect-21" style="width:100%;" >Logout</a>
                     </div></div>


					 
		
							
						
</div>
<?php include'includes/jsscripts.php'; ?>
<?php include'includes/footer.php'; ?>
</body>
</html>