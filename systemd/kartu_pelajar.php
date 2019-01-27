<?php
session_start();
include "connect.php";
$id = $_SESSION['id'];
$target_dir = "kartu_pelajar/";
if (count($_FILES['kartu']['name']) > 3){
?>
	<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/upload_kartu.php'" />
<?php
	echo '<script language="javascript">';
	echo 'alert("Jumlah foto yang diupload tidak boleh lebih dari 3, masing-masing anggota kelompok hanya perlu mengupload 1 foto saja. Kembali ke halaman sebelumnya...")';
	echo '</script>';
} else if (count($_FILES['kartu']['name']) >= 1 && count($_FILES['kartu']['name']) <= 3){
	for ($i = 0; $i < count($_FILES['kartu']['name']); $i++) {
		$newfilename = $_SESSION['kodeunik']."_anggota".($i + 1).".jpg";
		$target_file = $target_dir . basename($newfilename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if (isset($_POST['submit'])){
		    $check = getimagesize($_FILES["kartu"]["tmp_name"][$i]);
		    if($check != false) {
		        $uploadOk = 1;
		    } else {
		        $uploadOk = 0;
		    }

		    if ($uploadOk == 1){
		    	if (move_uploaded_file($_FILES['kartu']['tmp_name'][$i], $target_file)){
		    		$sql = "UPDATE user SET ktm".($i + 1)." = '".$newfilename."' WHERE id = ".$id;
		    		$result = mysql_query($sql);
		    		if ($result){
			    		?>
						<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/preview_kartu.php'" />
					<?php
						echo '<script language="javascript">';
						echo 'alert("Sukses! Foto berhasil diupload")';
						echo '</script>';
			    	}
		    	} else {
		    		echo "GAGAL!!!";
		    	}
		    }
		}
	}
} else {
?>
	<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/upload_kartu.php'" />
<?php
	echo '<script language="javascript">';
	echo 'alert("Tidak ada foto yang diupload. Kembali ke halaman sebelumnya...")';
	echo '</script>';
}
?>