<?php
include 'db.php';
$userid = $_GET['userid'];
$query = "DELETE FROM user WHERE userid='".$userid."'";
$result = mysqli_query($conn,$query);
if($result){
	header ("Location: http://localhost/e_real_estate/admin/registered_users.php");
}else{
	echo "Error in deleting user!";
}

?>