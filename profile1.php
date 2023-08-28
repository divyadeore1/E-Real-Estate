<!doctype html>
<?php
$conn = mysqli_connect("localhost","root","","non_angular2");
?>


    <head>

        <title>Pune Real Estate - Company Details</title>




    </head>


<!-- php code -->
<?php 


/* 
$query_current_user = "SELECT *  FROM user WHERE username ='".$current_user."'";
					$result_current_user = mysql_query($query_current_user);
							if (mysql_num_rows($result_current_user) > 0) {
					while($row = mysql_fetch_assoc($result_current_user)) {
						$dob=$row["DOB"];
						$age = (date('Y') - date('Y',strtotime($dob)));
						?>
							
					<h4>Full Name : <?php echo $row["name"];?></h4>
					<h4>Address : <?php echo $row["address"];?></h4>
					<h4>Age : <?php echo $age;?></h4>
					<h4>Email : <?php echo $row["email"];?></h4>
					<h4>Date Of Birth : <?php echo $row["DOB"];?></h4>
					
*/



include 'dbcontroller.php';
$db_handle = new DBController();  
	if(!isset($message)) {
		$query = "UPDATE user SET name='".$_POST['name']."', address='".$_POST['address']."', emailid='".$_POST['emailid']."',
		phoneno ='".$_POST['phoneno']."', aadharno='".$_POST['aadharno']."', username='".$_POST['username']."', password ='".$_POST['password']."' id=1;";
		
		$result = $db_handle->updateQuery($query);
		
		if(empty($result)) {
			
			$message = "Problem in Updating property. Please Try Again!";	
		}
	}
	

?>
<?php include 'includes/header.php'; ?>
<?php include 'dbcontroller.php'; ?>	

 <div class="tile-body">

<?php


$sql = "SELECT * FROM user WHERE id='1'";
$select_sql = mysqli_query($conn,$sql);
if (mysqli_num_rows($select_sql) > 0) {
while($row = mysqli_fetch_assoc($select_sql)) {					 
?>							 
							 <form action="" method="POST">
							 <div class="row">
							 <div class="col-md-3">
							 Full Name
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="name" size="45" value="<?php echo $row["name"];?>" class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Address
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="address"  size="45" value="<?php echo $row["address"];?>" class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Emailid
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="emailid"  size="45" value="<?php echo $row["emailid"];?>" class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Phone
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="phoneno" size="45" value="<?php echo $row["phoneno"];?>"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Aadhar No
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="aadharno" size="45" value="<?php echo $row["aadharno"];?>" class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 User Name
							 </div>
							 <div class="form-group col-md-9" style="text-align: left;">
							 <textarea rows="3" type="text" name="username" class="form-control"><?php echo $row["username"];?></textarea>
							 </div>
							 </div>
							  
                                                         <div class="row">
							 <div class="col-md-3">
							 Password
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="password" size="45" value="<?php echo $row["password"];?>"  class="form-control">
							 </div>
							 </div>
			                                 
                                                         <div class="row">
							 <div class="col-md-3">
							 Date of Birth
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="dob" size="45" value="<?php echo $row["dob"];?>"  class="form-control">
							 </div>
							 </div>

							 </div>
							 
							 </div>
							 
<div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    
                                        <input type="submit" name="submit" class="btn btn-warning" value="Submit">
										  </div>
							 </form>
						 <!-- tile body -->
<?php

}   }
?>
								
								
                            </section>
                            <!-- /tile -->
											
											
											

		
                        </div>
                        <!-- /col -->



                    </div>
                    <!-- /row -->					
							
		</div>
       </div>
      </section>
   </div>	  
							
	



    </body>
</html>