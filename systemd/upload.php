<?php
session_start();
include "connect.php";
$id = $_SESSION['id'];
$target_dir = "foto/";
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
	if (isset($_POST['foto'][0])){
		//Foto 1
		$newfilename = $_SESSION['kodeunik']."_anggota1.jpg";
		$target_file = $target_dir . basename($newfilename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    $check = getimagesize($_FILES["foto"]["tmp_name"][0]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }

	    if ($uploadOk == 1){
			if (move_uploaded_file($_FILES['foto']['tmp_name'][0], $target_file)){
			    $sql = "UPDATE user SET foto1 = '".$newfilename."' WHERE id = ".$id;
			    $result = mysql_query($sql);
			    if ($result){
				?>
				<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/preview_foto.php'" />
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

	if (isset($_POST['foto'][1])){
		//Foto2
		$newfilename = $_SESSION['kodeunik']."_anggota2.jpg";
		$target_file = $target_dir . basename($newfilename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    $check = getimagesize($_FILES["foto"]["tmp_name"][1]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }

	    if ($uploadOk == 1){
			if (move_uploaded_file($_FILES['foto']['tmp_name'][1], $target_file)){
			    $sql = "UPDATE user SET foto2 = '".$newfilename."' WHERE id = ".$id;
			    $result = mysql_query($sql);
			    if ($result){
				?>
				<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/preview_foto.php'" />
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

	if (isset($_POST['foto'][2])){
		//Foto3
		$newfilename = $_SESSION['kodeunik']."_anggota3.jpg";
		$target_file = $target_dir . basename($newfilename);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if (isset($_POST['submit'])){
		    $check = getimagesize($_FILES["foto"]["tmp_name"][2]);
		    if($check != false) {
		        $uploadOk = 1;
		    } else {
		        $uploadOk = 0;
		    }

		    if ($uploadOk == 1){
		    	if (move_uploaded_file($_FILES['foto']['tmp_name'][2], $target_file)){
		    		$sql = "UPDATE user SET foto3 = '".$newfilename."' WHERE id = ".$id;
		    		$result = mysql_query($sql);
		    		if ($result){
			    	?>
						<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/preview_foto.php'" />
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
}*/


	for ($i = 0; $i < 3; $i++) {
		if ($_FILES['photo']['name'][$i] != NULL) {
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
			    		$sql = "UPDATE user SET foto".($i + 1)." = '".$newfilename."' WHERE id = ".$id;
			    		$result = mysql_query($sql);
			    		if ($result){
				    	?>
							<meta http-equiv="refresh" content="0;URL='http://ic.petra.ac.id/systemd/preview_foto.php'" />
						<?php
							echo '<script language="javascript">';
							echo 'alert("Sukses! Foto berhasil diupload")';
							echo '</script>';
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
?>