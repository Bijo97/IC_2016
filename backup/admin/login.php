<?php
session_start();
if(isset($_POST['login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if($user=="admin" && $pass=="1cPetr@@") {
		$_SESSION["username"] = $user;
		header("Location:index.php");
	}
	else {
		echo "Password dan Username yang diinputkan salah";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="images/png" href="img/icon.png">

    <title>Industrial Competition 2015</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
	<link href="assets/css/soon.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body id="page-top" class="index">
    <form method="post" align="center" style="margin-top:30px; font-family: Montserrat;">
		Username : <input type="text" name="user" required><br>
		Password : <input type="password" name="pass" required><br>
		<input type="submit" name="login" value="Login">
	</form>
</body>

</html>
