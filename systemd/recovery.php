<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/login.php'" />
<?php
	include "connect.php";
	$code = $_GET['code'];
	
	function generatePassword($length = 6){
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$sql = "SELECT COUNT(*) as cek FROM user WHERE kodeverifikasi = '".$code."'";
	$kueri = mysql_query($sql);
	$fets = mysql_fetch_array($kueri);
	$sqll = "SELECT * FROM user WHERE kodeverifikasi = '".$code."'";
	$kuerii = mysql_query($sqll);
	$fetss = mysql_fetch_array($kuerii);
	if ($fets{'cek'} > 0){
		$newpassword = generatePassword();

		$sqlpass = "SELECT COUNT(*) as register FROM user WHERE password like '".$password."'";
		$cekuser = "SELECT COUNT(*) as register FROM user WHERE username like '".$password."'";
		$cek = true;
		while ($cek == true){
			$kueri2 = mysql_query($sqlpass);		//pass cek pass
			$fets2 = mysql_fetch_array($kueri2);
			$kueri3 = mysql_query($cekuser);		//user cek pass
			$fets3 = mysql_fetch_array($kueri3);

			if ($fets2{'register'} == 0 && $fets3{'register'} == 0){
				$sql_ = "UPDATE user SET password = '".$newpassword."' WHERE kodeverifikasi = '".$code."'";
				mysql_query($sql_);

				$nama = $fetss['nama_anggota1'];
				$username = $fetss['username'];
				$password = $newpassword;
				$email = $fetss['email'];

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
				$mail->Body = "Selamat ".$nama.", recovery berhasil!<br>
					Ini adalah account anda untuk login ke halaman IC:<br>
					Username: ".$username."<br>
					Password: ".$password."<br>
					Anda sudah bisa login ke halaman IC, terima kasih.<br>
					- Divisi IT Industrial Competition 2016.";
				
				if(!$mail->send()) {
			   		echo 'Message could not be sent.';
			    	echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					echo '<script language="javascript">';
					echo 'alert("Success! Please check your email again for your Account Information. Redirecting you to login page.")';
					echo '</script>';
				}
				
				$cek = false;
			} else {
				$newpassword = generatePassword();
			}
		}	
	} else {
		echo '<script language="javascript">';
		echo 'alert("Failed! Wrong Link. Redirecting you to login page.")';
		echo '</script>';
	}

?>