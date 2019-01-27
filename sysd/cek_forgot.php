<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/sysd/login.php'" />
<?php
	include "connect.php";
	$email = $_POST['recovery-email'];
	$sql = "SELECT COUNT(*) as cek FROM user WHERE email like '".$email."'";	//cek email ada apa gak di database
	$query = mysql_query($sql);
	$fetch = mysql_fetch_array($query);

	if ($fetch{'cek'} > 0) {
		$sql2 = "SELECT * FROM user WHERE email like '".$email."'";	//cek email ada apa gak di database
		$query2 = mysql_query($sql2);
		$fetch2 = mysql_fetch_array($query2);
		
		$kodeverifikasi = $fetch2['kodeverifikasi'];

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
		$mail->addAddress($email);               // Name is optional
		$mail->addReplyTo('icpetra2k16@gmail.com', 'Industrial Competition Division');
		$mail->isHTML(true);                                  // Set email format to HTML

		$base_url = "http://ic.petra.ac.id/sysd/recovery.php";

		$mail->Subject = 'Recovery Password';
		$mail->Body = "Someone has requested for recovery password.<br>If it is you, please go to <a href='".$base_url."?code=".$kodeverifikasi."'>this link</a>.";
			
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo '<script language="javascript">';
			echo 'alert("Please check your email for recovery password.")';
			echo '</script>';
		}
	} else {
		echo '<script language="javascript">';
		echo 'alert("Your email not registered yet!")';
		echo '</script>';
	}
?>