<?php
$servername = "localhost";
$username = "icpetraa_admin";
$password = "1cPetr@@";
//$username = "root";
//$password = "";
$dbname = "icpetraa_2015";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error); 
}
?>