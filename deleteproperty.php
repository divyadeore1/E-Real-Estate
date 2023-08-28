<?php
include 'db.php';
$property_id = $_GET['id'];
$query = "DELETE FROM property WHERE id='".$property_id."'";
$result = mysqli_query($conn,$query);
if($result){
	header ("Location: http://localhost/e_real_estate/admin/properties.php");
}else{
	echo "Error in deleting Property!";
}

?>