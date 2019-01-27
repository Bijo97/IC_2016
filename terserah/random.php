<?php
	include "connect.php";
	$nama = $_POST['form-nama'];
	$telepon = $_POST['form-telepon'];
	$sekolah = $_POST['form-sekolah'];
	$email = $_POST['form-email'];

	function generateUsername($length = 6) {
	    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	function generatePassword($length = 6){
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	function generateKodeunik($length = 3){
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$username = generateUsername();
	$password = generatePassword();
	$kodeunik = generateKodeunik();

	$sqluser = "SELECT COUNT(*) as register FROM user WHERE username like '".$username."'";
	$sqlpass = "SELECT COUNT(*) as register FROM user WHERE password like '".$password."'";
	$sqlkode = "SELECT COUNT(*) as register FROM user WHERE kodeunik like '".$kodeunik."'";
	$cekuser = "SELECT COUNT(*) as register FROM user WHERE username like '".$password."'";
	$cekpass = "SELECT COUNT(*) as register FROM user WHERE password like '".$username."'";
	$cek = true;
	while ($cek == true){
		$kueri1 = mysql_query($sqluser);		//user cek user
		$fets1 = mysql_fetch_array($kueri1);
		$kueri2 = mysql_query($sqlpass);		//pass cek pass
		$fets2 = mysql_fetch_array($kueri2);
		$kueri3 = mysql_query($sqlkode);		//kode cek kode
		$fets3 = mysql_fetch_array($kueri3);
		$kueri4 = mysql_query($cekuser);		//user cek pass
		$fets4 = mysql_fetch_array($kueri4);	
		$kueri5 = mysql_query($cekpass);		//pass cek user
		$fets5 = mysql_fetch_array($kueri5);
		if ($fets1{'register'} == 0 && $fets2{'register'} == 0 && $fets3{'register'} == 0 && $fets4{'register'} == 0 && $fets5{'register'} == 0){
			mysql_query("INSERT INTO user VALUES ('', '".$nama."', '', '', '".$kodeunik."', '".$sekolah."', '".$telepon."', '', '', '".$email."', '".$username."', '".$password."')");
			$cek = false;
		} else if ($fets1{'register'} > 0 or $fets5{'register'} > 0){
			$username = generateUsername();
		} else if ($fets2{'register'} > 0 or $fets4{'register'} > 0){
			$password = generatePassword();
		} else if ($fets3{'register'} > 0){
			$kodeunik = generateKodeunik();			
		}
	}

	require 'PHPMailer-master/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'kandangmonyet16@gmail.com';                 // SMTP username
	$mail->Password = 'kapokmukapan';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('kandangmonyet16@gmail.com', 'IT Division');
	$mail->addAddress($email);               // Name is optional
	$mail->addReplyTo('kandangmonyet16@gmail.com', 'IT Division');
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Account Information';
	$mail->Body = "Selamat ".$nama.", registrasi berhasil!<br>
		Ini adalah account anda untuk login ke halaman IC:<br>
		Username: ".$username."<br>
		Password: ".$password."<br>
		Anda sudah bisa login ke halaman IC, terima kasih.<br>
		- Divisi IT Industrial Competition 2016.";

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    header('Location: login.php');
	}
?>