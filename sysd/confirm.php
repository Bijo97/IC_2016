<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/sysd/login.php'" />
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Verification Page</title>
    <?php include 'assets.header.php';?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<?php
	include "connect.php";
	$code = $_GET['code'];
	$sql = "SELECT COUNT(*) as cek FROM user WHERE kodeverifikasi = '".$code."'";
	$kueri = mysql_query($sql);
	$fets = mysql_fetch_array($kueri);
	$sqll = "SELECT * FROM user WHERE kodeverifikasi = '".$code."'";
	$kuerii = mysql_query($sqll);
	$fetss = mysql_fetch_array($kuerii);
	if($fets{'cek'} == 1 && $fetss['validasi'] == 0){
		$sql2 = "SELECT * FROM user WHERE kodeverifikasi = '".$code."'";
		$kueri2 = mysql_query($sql2);
		$fets2 = mysql_fetch_array($kueri2);
		$sql3 = "UPDATE user SET validasi = 1 WHERE kodeverifikasi = '".$code."'";
		$kueri3 = mysql_query($sql3);
		$nama = $fets2['nama_anggota1'];
		$username = $fets2['username'];
		$password = $fets2['password'];
		$email = $fets2['email'];

		require 'PHPMailer-master/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'icpetra2k16@gmail.com';                 // SMTP username
		$mail->Password = 'icpetra16';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('icpetra2k16@gmail.com', 'Industrial Competition Division');
		$mail->addAddress($email);               				// Name is optional
		$mail->addReplyTo('icpetra2k16@gmail.com', 'Industrial Competition Division');
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Account Information';
		$mail->Body = "Selamat ".$nama.", registrasi berhasil!<br>
			Ini adalah account anda untuk login ke halaman IC:<br>
			Username: ".$username."<br>
			Password: ".$password."<br>
			Anda sudah bisa login ke halaman IC, terima kasih.<br>
			- Panitia Industrial Competition 2016.";
		
		if(!$mail->send()) {
	   		echo 'Message could not be sent.';
	    	echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo '<script language="javascript">';
			echo 'alert("Success! Please check your email again for your Account Information. Redirecting you to login page...")';
			echo '</script>';
		}

	} else if($fetss['validasi'] > 0){
		echo '<script language="javascript">';
		echo 'alert("Already verified! Redirecting you to login page...")';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Failed! Redirecting you to login page...")';
		echo '</script>';
	}
?>