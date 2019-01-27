<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location:login.php");
}
include "../connect.php";
$sql = "select * from information";
//$result = mysqli_query($conn, $sql);
$result = mysql_query($sql);
$print="";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $print.= $row["id"]. " " . $row["title"]. " " . $row["tanggal"]. " " . $row["detail"]. " " . $row["picture"]. " " . $row["status"]. "<br>";
    }
} else {
    $print.= "0 results";
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
	<link rel="icon" type="images/png" href="../img/icon.png">

    <title>Industrial Competition 2015</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link href="../css/industrial.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<!-- CKEditor -->
	<script src="ckeditor/ckeditor.js"></script>
	
	<!-- Javascript -->
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/npm.js"></script>
	<script>
	$(document).ready(function () {
		$('.dropdown-toggle').dropdown();
	});
	</script>

<style>
.container {color:white;}
</style>

</head>

<body id="page-top" class="index" style="background-color:black;">

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php"><img src="../img/title.png" height=24/></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="manage_berita.php">Manage News</a></li>
			<li><a href="manage_regis.php">Manage Registrations</a></li>
			<li><a href="logout.php">Logout</a></li>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>