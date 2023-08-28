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

$Uname=$Post["Uname"];
$Upassword=$Post["Upassword"];
include'conn.php';
$find_user_name_into_db="select*from user where User_Name=$Uname";
?>
<body>
</html>