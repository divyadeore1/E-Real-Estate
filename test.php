<?php
$conn = mysqli_connect("localhost","root","","non_angular");
if(!$conn)
{
	echo "Database is not connected!";
}

$sql = "INSERT INTO company_details(website_title, address, gps_coord, phone, fax, email, email_alert, address_footer) VALUES ('".$_POST['1']."','".$_POST['www.oriange.in']."','".$_POST['Latur']."','".$_POST['72 lattitude']."','".$_POST['9087654367']."','".$_POST['296576']."','".$_POST['abc@example.com']."','".$_POST['0']."','".$_POST['Latur']."')"; 	

if (mysqli_query($conn,$sql))
{
	echo "Data inserted successfully!";
}else{
	echo "data is not inserted";
}
	
	
?>	
	