<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/sysd'" />
<?php
	include "connect.php";
	$nama = $_POST['nama'];
	$telepon = $_POST['telp'];
	$sekolah = $_POST['sekolah'];
	$email = $_POST['email'];

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

	function generateKodeverifikasi($length = 60){
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
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
	$kodeverifikasi = generateKodeverifikasi();

	$sqluser = "SELECT COUNT(*) as register FROM user WHERE username like '".$username."'";
	$sqlpass = "SELECT COUNT(*) as register FROM user WHERE password like '".$password."'";
	$sqlkode = "SELECT COUNT(*) as register FROM user WHERE kodeunik like '".$kodeunik."'";
	$cekuser = "SELECT COUNT(*) as register FROM user WHERE username like '".$password."'";
	$cekpass = "SELECT COUNT(*) as register FROM user WHERE password like '".$username."'";
	$cekemail = "SELECT COUNT(*) as register FROM user WHERE email like '".$email."'";
	$cekverifikasi = "SELECT COUNT(*) as register FROM user WHERE kodeverifikasi like '".$kodeverifikasi."'";
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
		$kueri6 = mysql_query($cekverifikasi);	//kode cek kodeverifikasi
		$fets6 = mysql_fetch_array($kueri6);
		$kueri7 = mysql_query($cekemail);		//cek email
		$fets7 = mysql_fetch_array($kueri7);
		if ($fets1{'register'} == 0 && $fets2{'register'} == 0 && $fets3{'register'} == 0 && $fets4{'register'} == 0 && $fets5{'register'} == 0 && $fets6{'register'} == 0 && $fets7{'register'} == 0){
			mysql_query("INSERT INTO user VALUES ('', '".$nama."', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '".$kodeunik."', '".$sekolah."', '".$telepon."', '', '', '".$email."', '".$username."', '".$password."', 0, '".$kodeverifikasi."', 0, '', '', '', '', '', '')");
			$cek = false;

			require 'PHPMailer-master/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'icpetra2k16@gmail.com';            // SMTP username
			$mail->Password = 'icpetra16';                        // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('icpetra2k16@gmail.com', 'Industrial Competition Division');
			$mail->addAddress($email);               // Name is optional
			$mail->addReplyTo('icpetra2k16@gmail.com', 'Industrial Competition Division');
			$mail->isHTML(true);                                  // Set email format to HTML

			$base_url = "http://ic.petra.ac.id/sysd/confirm.php";

			$mail->Subject = 'Verification Account';
			$mail->Body = "Silahkan klik <a href='".$base_url."?code=".$kodeverifikasi."'>disini</a> untuk verifikasi email anda.";

			if(!$mail->send()) {
			    echo '<script language="javascript">';
				echo 'alert("Cannot send email. Please check your email!")';
				echo '</script>';
			} else {
			    echo '<script language="javascript">';
				echo 'alert("Please check your email for verify your account.")';
				echo '</script>';
			}
		} else if ($fets1{'register'} > 0 or $fets5{'register'} > 0){
			$username = generateUsername();
		} else if ($fets2{'register'} > 0 or $fets4{'register'} > 0){
			$password = generatePassword();
		} else if ($fets3{'register'} > 0){
			$kodeunik = generateKodeunik();			
		} else if ($fets6{'register'} > 0){
			$kodeverifikasi = generateKodeverifikasi();
		} else if ($fets7{'register'} > 0){
			echo '<script language="javascript">';
			echo 'alert("Your email has been used for registration.")';
			echo '</script>';
			$cek = false;
		}
	}
?>