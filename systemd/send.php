<?php
	session_start();
	include "connect.php";

	$id = $_SESSION['id'];
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

	$sql = "UPDATE user SET kelas_anggota1 = '".$kelas1."', vege1 = '".$vege1."', alergi1 = '".$alergi1."', penyakit1 = '".$penyakit1."', obat1 = '".$obat1."', nama_anggota2 = '".$nama2."', nohp2 = '".$telp2."', kelas_anggota2 = '".$kelas2."', vege2 = '".$vege2."', alergi2 = '".$alergi2."', penyakit2 = '".$penyakit2."', obat2 = '".$obat2."', nama_anggota3 = '".$nama3."', nohp3 = '".$telp3."', kelas_anggota3 = '".$kelas3."', vege3 = '".$vege3."', alergi3 = '".$alergi3."', penyakit3 = '".$penyakit3."', obat3 = '".$obat3."' WHERE id = '".$id."'";
	$result = mysql_query($sql);

	if ($result){
		header("Location: preview_data.php");
	} else {
		echo "GAGAL!!!";
	}
?>