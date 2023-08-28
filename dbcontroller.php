<?php
session_start();
class DBController {
	private $host = "localhost:3306";
	private $user = "root";
	private $password = "";
	private $database = "non_angular3";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,  $this->user,$this->password,$this->database);
		return $conn;
	}
	
	function selectDB($conn) {
		mysqli_select_db($conn,$this->database);
	}
	
	function runQuery($query) {
		$result = mysqli_query($this-> connectDB(),$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this-> connectDB(),$query);
		if(!$result){ return 0;}
		else{
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
		}
	}
	
	function updateQuery($query) {
		$result = mysqli_query($this-> connectDB(),$query);
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		} else {
			return $result;
		}
	}
	
	function insertQuery($query) {
		$result = mysqli_query($this-> connectDB(),$query);
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		} else {
			return $result;
		}
	}
	
	function deleteQuery($query) {
		$result = mysqli_query($this-> connectDB(),$query);
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		} else {
			return $result;
		}
	}
	function LogincheckQuery($query) {
		$result = mysqli_query($this-> connectDB(),$query);
		$result1 ="";
		if ( $this->numRows($query) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
        $username = $row["username"];
		$password = $row["password"];
		$user_type = $row["user_type"];
		$result1 =  $password;
		session_start();
		$_SESSION["current_user"] =  $username;
		$_SESSION["user_type"] =  $user_type;
		
    }
		}
		
		if ($result1) {
			if($result1 == $_POST["password"])
			{
				return TRUE;
			}
		}
	}
	
	
}
?>