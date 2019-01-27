<?php
	session_start();
	include "connect.php";
	include "cek_isi.php";

	$id = $_SESSION['id'];
	$nama1 = $_POST['nama1'];
	$telp1 = $_POST['telp1'];
	$kelas1 = $_POST['kelas1'];
	$vege1 = $_POST['vege1'];
	$alergi1 = $_POST['alergi1'];
	$penyakit1 = $_POST['ketpenyakit1'];
	$obat1 = $_POST['obat1'];

	$nama2 = $_POST['nama2'];
	$telp2 = $_POST['telp2'];
	$kelas2 = $_POST['kelas2'];
	$vege2 = $_POST['vege2'];
	$alergi2 = $_POST['alergi2'];
	$penyakit2 = $_POST['ketpenyakit2'];
	$obat2 = $_POST['obat2'];

	$nama3 = $_POST['nama3'];
	$telp3 = $_POST['telp3'];
	$kelas3 = $_POST['kelas3'];
	$vege3 = $_POST['vege3'];
	$alergi3 = $_POST['alergi3'];
	$penyakit3 = $_POST['ketpenyakit3'];
	$obat3 = $_POST['obat3'];
	
	/*$target_dir = "foto/";
		for ($i = 0; $i < 3; $i++) {
			if ($row['foto'.($i + 1)] == NULL) {
				if ($_FILES['photo']['name'][$i] != NULL){
					$newfilename = $_SESSION['kodeunik']."_anggota".($i + 1).".jpg";
					$target_file = $target_dir . basename($newfilename);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					//if (isset($_POST['submit'])){
					    $check = getimagesize($_FILES["photo"]["tmp_name"][$i]);
					    if($check != false) {
					        $uploadOk = 1;
					    } else {
					        $uploadOk = 0;
					    }

					    if ($uploadOk == 1){
					    	if (move_uploaded_file($_FILES['photo']['tmp_name'][$i], $target_file)){
					    		$sql1 = "UPDATE user SET foto".($i + 1)." = '".$newfilename."' WHERE id = ".$id;
					    		$result1 = mysql_query($sql1);
					    		if ($result1){
									echo "Sukses";
						    	} else {
						    		echo "Nope";
						    	}
					    	} else {
					    		echo "GAGAL!!!";
					    	}
					    } else {
					    	echo "Die";
					    }
					//}
				} else {
					echo "ERROR";
				}
			}
		}

	$target_dir = 'kartu_pelajar/';
		for ($i = 0; $i < count($_FILES['kartu']['name']); $i++) {
			if ($row['ktm'.($i + 1)] == NULL) {
				if ($_FILES['kartu']['name'][$i] != NULL){
					$newfilename = $_SESSION['kodeunik']."_anggota".($i + 1).".jpg";
					$target_file = $target_dir . basename($newfilename);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					//if (isset($_POST['submit'])){
					    $check = getimagesize($_FILES["kartu"]["tmp_name"][$i]);
					    if($check != false) {
					        $uploadOk = 1;
					    } else {
					        $uploadOk = 0;
					    }

					    if ($uploadOk == 1){
					    	if (move_uploaded_file($_FILES['kartu']['tmp_name'][$i], $target_file)){
					    		$sql2 = "UPDATE user SET ktm".($i + 1)." = '".$newfilename."' WHERE id = ".$id;
					    		$result2 = mysql_query($sql2);
					    		if ($result2){
									echo "Sukses";
						    	} else {
						    		echo "Nope";
						    	}
					    	} else {
					    		echo "GAGAL!!!";
					    	}
					    } else {
					    	echo "Die";
					    }
					//}
				} else {
					echo "ERROR";
				}
			}
		}*/

	if (isset($penyakit1)){
		$sakit1 = 'Tidak ada';
	} else {
		$sakit1 = $penyakit1;
	}

	if (isset($penyakit2)){
		$sakit2 = 'Tidak ada';
	} else {
		$sakit2 = $penyakit2;
	}

	if (isset($penyakit3)){
		$sakit3 = 'Tidak ada';
	} else {
		$sakit3 = $penyakit3;
	}

	$kueri = "UPDATE user SET kelas_anggota1 = '".$kelas1."', vege1 = '".$vege1."', alergi1 = '".$alergi1."', penyakit1 = '".$penyakit1."', obat1 = '".$obat1."', nama_anggota2 = '".$nama2."', nohp2 = '".$telp2."', kelas_anggota2 = '".$kelas2."', vege2 = '".$vege2."', alergi2 = '".$alergi2."', penyakit2 = '".$penyakit2."', obat2 = '".$obat2."', nama_anggota3 = '".$nama3."', nohp3 = '".$telp3."', kelas_anggota3 = '".$kelas3."', vege3 = '".$vege3."', alergi3 = '".$alergi3."', penyakit3 = '".$penyakit3."', obat3 = '".$obat3."' WHERE id = '".$id."'";
	$fets = mysql_query($kueri);

	if ($fets){
		header("Location: home.php");
	?>
		<!--<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/sysd/home.php'" />-->
	<?php
	} else {
		echo "GAGAL!!!";
	}
?>
