<?php include "header.php"; ?>
<div class="container">
	<div class="sub-header">
		<img src="img/left-bulbs.png" class="bulb-left">
		<img src="img/regis.png" class="logo">
		<img src="img/right-bulbs.png" class="bulb-right">
	</div>
	<br>
	<div class="white">
		<p id="title">Peraturan Pendaftaran</p>
		<ul>
			<li>Peserta adalah siswa/i SMA kelas X, XI,dan XII (yang masih aktif)</li>
			<li>Satu kelompok terdiri dari 4 orang yang berasal dari satu sekolah</li>
			<li>Satu kelompok diperbolehkan berbeda angkatan (yang masih aktif)</li>
			<li>Uang pendaftaran adalah Rp. 180.000/tim</li>
			<li>Uang pendaftaran tersebut tidak termasuk biaya transportasi dan akomodasi</li>
			<li>Batas akhir pendaftaran : 29 Oktober 2015</li>
		</ul>
	</div>
	<table border=0 class="ver-gap">
		<tr><td class="yellow">
			<p id="title">Pendaftaran Online</p>
			<ol>
				<li>Download form registrasi dengan menekan tombol download di bawah</li>
				<li>Transfer uang pendaftaran sejumlah Rp. 180.000 ke salah satu nomer rekening berikut:
					<br>BCA 	: 816-074-5488   	  a.n. Brigitte Trista
					<br>CIMB NIAGA: 221-01-09443-18-8   		 a.n. Avelia
					<br>MANDIRI	: 135-00-1294026-6 	 a.n. Atria Yaleswari</li>
				<li>Isi semua informasi yang dibutuhkan, termasuk foto 3x4 keempat peserta (foto yang diambil 2 tahun terakhir), kartu tanda pelajar (scan/foto) keempat peserta, dan bukti pembayaran</li>
				<li>Upload kembali file yang sudah diisi silahkan di upload dengan maksimal ukuran form yang di upload adalah <i>*update*</i> 6 MB</li>
				<li>Peserta yang telah meng-upload form pendaftaran di website sebelum Pk. 18.00 WIB akan diberi sms konfirmasi pada hari yang sama dengan hari peng-upload-an pada 
					&plusmn; Pk. 20.00 WIB oleh nomor 081242348298. Peserta yang meng-upload form pendaftaran di website setelah Pk. 18.00 WIB akan diberi sms konfirmasi satu hari setelah hari peng-upload-an pada ± Pk. 20.00 WIB</li>
			</ol>
		</td>
		<td class="white">
			<p id="title">Pendaftaran Offline</p>
			<p>--Khusus wilayah Surabaya dan sekitarnya--</p>
			<ol>
				<li>Download form registrasi dengan menekan tombol download</li>
				<li>Print, isi form pendaftaran dengan lengkap dan wajib menyertakan fotokopi kartu tanda pelajar dan foto peserta (foto yang diambil 2 tahun terakhir)</li>
				<li>Form pendaftaran dapat diserahkan melalui sekolah masing-masing</li>
				<li>Panitia Industrial Competition akan mengambil form registrasi berserta uang pendaftaran ke sekolah masing-masing dan memberikan buktu pendaftaran Industrial Competition</li>
			</ol>
		</td></tr>
	</table>
	<a href="download/fomulir pendaftaran.doc"><div class="info-white" align="center">
		<p id="title">Download Formulir</p>
	</div></a>
	<div class="yellow">
		<p id="title">Upload Formulir</p>
		<i>* file yang perlu di-upload hanyalah file &#8220;formulir pendaftaran.doc&#8221;</i><br>
		<i>* setelah meng-upload, pastikan muncul kotak hijau yang menyatakan formulir terkirim</i>
		<form method="post" enctype="multipart/form-data"><table border="0" align="center" class="hor-gap">
			<tr>
				<td>Ketua Kelompok</td>
				<td>:</td>
				<td><input type="text" name="ketua" required disabled></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah" required disabled></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" required disabled></td>
			</tr>
			<tr>
				<td>Formulir</td>
				<td>:</td>
				<td><input type="file" name="form" id="files" disabled></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><button name="submit" disabled>Submit</button><br>Pendaftaran sudah ditutup.</td>
			</tr>
		</table></form>
		
<script language='JavaScript'>
//binds to onchange event of your input field
$('#files').bind('change', function() {

//this.files[0].size gets the size of your file.
if (this.files[0].size > 6291456) {
    alert("Sorry, your file's size is too large. Please make it less than 6MB. Thank you!"); // Do your thing to handle the error.
    evt.preventDefault();
    this.reset(); // Clear the field.
   }
});
</script>

<?php
if(isset($_POST['submit'])) {
	$ketua = $_POST['ketua'];
	$sekolah = $_POST['sekolah'];
	$email = $_POST['email'];
	$form = $_FILES["form"]["name"];
	$upname = $ketua . " - " . $sekolah . " - " . $form;
	$path = "upload/";
	$destination = $path . $upname;
	move_uploaded_file($_FILES["form"]["tmp_name"], $destination);
	
	require_once 'PHPMailer-master/class.phpmailer.php';
	include("PHPMailer-master/class.smtp.php");
	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->Host = 'ic.petra.ac.id';
	$mail->Port = 25;
	$mail->SMTPAuth = true;
	$mail->Username = 'admin@ic.petra.ac.id';
	$mail->Password = '1cPetr@@';
	$mail->SetFrom($email, $ketua);
	$mail->AddAddress('m25413033@john.petra.ac.id', 'Admin IC2015');
	$mail->Subject = 'Pendaftaran Industrial Competition 2015';
	$mail->Body = "Pendaftaran atas nama " . $ketua . " dengan asal sekolah " . $sekolah . ".\r\nemail : " . $email;
	$mail->AddAttachment($destination, $upname);
	if($mail->Send()) {
		echo '<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
			Formulir telah terkirim.</div>';
	} else {
		echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			Mailer error: '.$mail->ErrorInfo.'</div>';
	}
}
?>
	</div>
</div>

<?php include "footer.php"; ?>