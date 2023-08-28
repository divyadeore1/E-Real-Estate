<?php
$dbHost='localhost:3306';
$dbusername='root';
$dbpassword='';
$dbName='non_angular3';

$conn=mysqli_connect($dbHost,$dbusername,$dbpassword,$dbName);
if(!$conn)
{
echo"Database not Connected";
}

?>

