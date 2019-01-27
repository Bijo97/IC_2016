<?php
	session_start();
	include "connect.php";

	$username = $_POST['form-username'];
	$password = $_POST['form-password'];

	$sql = "SELECT COUNT(*) AS login FROM user WHERE username = '".$username."' and password = '".$password."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	if ($row['login'] >= 1){
		echo "SUKSES!!!";
	} else {
		echo "GAGAL!!!";
	}
?>