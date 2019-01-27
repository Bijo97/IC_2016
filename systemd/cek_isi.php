<?php
	session_start();
	if (isset($_SESSION['username'])){
		include "connect.php";
		$id = $_SESSION['id'];

		$sql = "SELECT * FROM user WHERE id = ".$id;
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
	}
 ?>