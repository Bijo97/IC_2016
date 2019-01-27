<?php
	session_start();
	include "connect.php";
	if (!isset($_SESSION['admin'])){
		header("Location: login_admin.php");
	}
	set_time_limit(0);
	$sql = "SELECT * FROM user";
	$result = mysql_query($sql);
   	$file_name = $_GET['file'];
    $file = $_SERVER["DOCUMENT_ROOT"] . '/sysd/kartu_pelajar' . '/' . $file_name;
    header("Content-type: image/jpeg");
    header('Content-Disposition: attachment; filename="ktm_' . basename($file) . '"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    //var_dump(filesize($file));
?>