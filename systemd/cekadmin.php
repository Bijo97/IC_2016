<?php
	session_start();
	include "connect.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT COUNT(*) AS login FROM admin WHERE username = '".$username."' and password = '".$password."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if ($row['login'] >= 1){
		$_SESSION['admin'] = $username;
		header("Location: 4dm1n.php");
	} else {
		header("Location: login_admin.php");
	}
?>