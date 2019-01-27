<?php
	session_start();
	include "cek_isi.php";

	if (!isset($_SESSION['username'])){
		header("Location: login.php");
	}
?>
<!DOCTYPE html><html lang="en">
  <head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Isi Data Peserta</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/jquery.easy-autocomplete.min.js"></script> 
    <link rel="stylesheet" href="assets/easy-autocomplete.min.css"> 
    <style type="text/css">
    hr{margin:0px;padding:0px;}
    h1.page-header {
    margin-top: -5px;
}

.sidebar {
	padding-left: 0;
}

.main-container { 
	background: #FFF;
	padding-top: 15px;
	margin-top: -20px;
}

.footer {
	width: 100%;
}  

:focus {
	outline: none;
}

.side-menu {
	position: relative;
	width: 100%;
	height: 100%;
	background-color: #f8f8f8;
	border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
	border: none;
}
.side-menu .navbar-header {
	width: 100%;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
	background-color: transparent;
	margin-right: -1px;
	border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
	display: block;
	width: 100%;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
	padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
	padding-right: 10px;
}
.side-menu #dropdown {
	border: 0;
	margin-bottom: 0;
	border-radius: 0;
	background-color: transparent;
	box-shadow: none;
}
.side-menu #dropdown .caret {
	float: right;
	margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
	float: right;
}
.side-menu #dropdown > a {
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
	padding: 0;
	background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
	width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
	padding-left: 15px;
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
	border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
	margin-left: -20px;
	padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
	margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
	padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
	border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
	background-color: #f3f3f3;
	border: 0;
	border-radius: 0;
	position: absolute;
	top: 0;
	right: 0;
	padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
	min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
	display: block;
}
.side-menu #search {
	position: relative;
	z-index: 1000;
}
.side-menu #search .panel-body {
	padding: 0;
}
.side-menu #search .panel-body .navbar-form {
	padding: 0;
	padding-right: 50px;
	width: 100%;
	margin: 0;
	position: relative;
	border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
	width: 100%;
	position: relative;
}
.side-menu #search .panel-body .navbar-form input {
	border: 0;
	border-radius: 0;
	box-shadow: none;
	width: 100%;
	height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
	position: absolute;
	right: 0;
	top: 0;
	border: 0;
	border-radius: 0;
	background-color: #f3f3f3;
	padding: 15px 18px;
}
/* Main body section */
.side-body {
	margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
	.side-menu {
		position: relative;
		width: 100%;
		height: 0;
		border-right: 0;
	}

	.side-menu .navbar {
		z-index: 999;
		position: relative;
		height: 0;
		min-height: 0;
		background-color:none !important;
		border-color: none !important;
	}
	.side-menu .brand-name-wrapper .navbar-brand {
		display: inline-block;
	}
	/* Slide in animation */
	@-moz-keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@-webkit-keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@keyframes slidein {
		0% {
			left: -300px;
		}
		100% {
			left: 10px;
		}
	}
	@-moz-keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	@-webkit-keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	@keyframes slideout {
		0% {
			left: 0;
		}
		100% {
			left: -300px;
		}
	}
	/* Slide side menu*/
	/* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
	.side-menu-container > .navbar-nav.slide-in {
		-moz-animation: slidein 300ms forwards;
		-o-animation: slidein 300ms forwards;
		-webkit-animation: slidein 300ms forwards;
		animation: slidein 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	.side-menu-container > .navbar-nav {
		/* Add position:absolute for scrollable menu -> see top comment */
		position: fixed;
		left: -300px;
		width: 300px;
		top: 43px;
		height: 100%;
		border-right: 1px solid #e7e7e7;
		background-color: #f8f8f8;
		overflow: auto;
		-moz-animation: slideout 300ms forwards;
		-o-animation: slideout 300ms forwards;
		-webkit-animation: slideout 300ms forwards;
		animation: slideout 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	@-moz-keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@-webkit-keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@keyframes bodyslidein {
		0% {
			left: 0;
		}
		100% {
			left: 300px;
		}
	}
	@-moz-keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	@-webkit-keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	@keyframes bodyslideout {
		0% {
			left: 300px;
		}
		100% {
			left: 0;
		}
	}
	/* Slide side body*/
	.side-body {
		margin-left: 5px;
		margin-top: 70px;
		position: relative;
		-moz-animation: bodyslideout 300ms forwards;
		-o-animation: bodyslideout 300ms forwards;
		-webkit-animation: bodyslideout 300ms forwards;
		animation: bodyslideout 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	.body-slide-in {
		-moz-animation: bodyslidein 300ms forwards;
		-o-animation: bodyslidein 300ms forwards;
		-webkit-animation: bodyslidein 300ms forwards;
		animation: bodyslidein 300ms forwards;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	/* Hamburger */
	.navbar-toggle-sidebar {
		border: 0;
		float: left;
		padding: 18px;
		margin: 0;
		border-radius: 0;
		background-color: #f3f3f3;
	}
	/* Search */
	#search .panel-body .navbar-form {
		border-bottom: 0;
	}
	#search .panel-body .navbar-form .form-group {
		margin: 0;
	}
	.side-menu .navbar-header {
		/* this is probably redundant */
		position: fixed;
		z-index: 3;
		background-color: #f8f8f8;
	}
	/* Dropdown tweek */
	#dropdown .panel-body .navbar-nav {
		margin: 0;
	}
}
    </style>
    <script src="assets/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>

     <script type="text/javascript">
		function tampil1(){
			document.getElementById('sakit1').style.display = "block";
			document.getElementById('text1').value = "";
		}

		function tampil2(){
			document.getElementById('sakit2').style.display = "block";
			document.getElementById('text2').value = "";
		}

		function tampil3(){
			document.getElementById('sakit3').style.display = "block";
			document.getElementById('text3').value = "";
		}

		function tidak_tampil1(){
			document.getElementById('sakit1').style.display = "none";
			document.getElementById('text1').value = "Tidak ada";
		}

		function tidak_tampil2(){
			document.getElementById('sakit2').style.display = "none";
			document.getElementById('text2').value = "Tidak ada";
		}

		function tidak_tampil3(){
			document.getElementById('sakit3').style.display = "none";
			document.getElementById('text3').value = "Tidak ada";
		}
	</script>

	<style>
		div[id^=sakit]{
			display: none;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://ic.petra.ac.id/sysd/home.php">
				Industrial Competition
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!-- <li class="dropdown-header">SETTINGS</li>
							<li class="divider"></li>-->
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li><a href="//ic.petra.ac.id/sysd/home.php">Dashboard</a></li>
					<li class="active"><a href='isi_data.php'>Data Peserta</a></li>
					<li>
						<a href='timeline.php'>Timeline Kegiatan</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
	</div> 
	</div>
	  		<div class="col-md-10 content">
	<div class="">
		<form class="form-horizontal" role="form" method="POST" action="send.php" enctype="multipart/form-data">
			<div class="panel panel-heading panel-danger">Informasi Umum</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-4 control-label">Asal Sekolah</label>
					<div class="col-md-6">
						<?php
							if ($row['sekolah'] == NULL){
								echo "<input type='text' class='form-control' name='sekolah' required>";
							} else {
								echo "<input type='text' class='form-control' name='sekolah' value='".$row['sekolah']."' disabled>";
							}
						?>				
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Alamat Email</label>
					<div class="col-md-6">
						<?php
							if ($row['email'] == NULL){
								echo "<input type='text' class='form-control' name='email' required>";
							} else {
								echo "<input type='email' class='form-control' name='email' value='".$row['email']."' disabled>";
							}
						?>
					</div>
				</div>
			</div>
			<div class="panel panel-heading panel-success">Profile Ketua Kelompok</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-4 control-label">Nama Ketua Kelompok</label>
					<div class="col-md-6">
						<?php
							if ($row['nama_anggota1'] == NULL){
								echo "<input type='text' class='form-control' name='nama1' required>";
							} else {
								echo "<input type='text' class='form-control' name='nama1' value='".$row['nama_anggota1']."' disabled>";
							}
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">No Handphone</label>
					<div class="col-md-6">
						<?php
							if ($row['nohp1'] == NULL){
								echo "<input type='number' class='form-control' name='telp1' required>";
							} else {
								echo "<input type='number' class='form-control' value='".$row['nohp1']."' disabled>";
							}
						?>
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-md-4 control-label">Kelas / Tingkat / Jenjang</label>
					<div class="col-md-6">
					<?php
						if ($row['kelas_anggota1'] == NULL){
							echo "<select class='form-control' name='kelas1' required>
									<option value='Sepuluh'>Kelas 10 / Tingkat I</option>
									<option value='Sebelas'>Kelas 11 / Tingkat II</option>
									<option value='DuaBelas'>Kelas 12 / Tingkat III</option>
								</select>";
						} else {
							echo "<input type='hidden' value='".$row['kelas_anggota1']."' name='kelas1'>";
							echo $row['kelas_anggota1'];
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Foto Ketua Kelompok</label>
					<div class="col-md-6">
					<?php
						if ($row['foto1'] == NULL){
	                    	echo "<input name='photo[]' id='foto1' type='file'>";
	                    } else {
	                    	echo "<input name='photo[]' id='foto1' type='file' disabled>";
	                    	echo "Foto sudah diupload!";
	                    }
	                ?>
	                </div>
                </div>

				<div class="form-group">
					<label class="col-md-4 control-label">Foto Kartu Pelajar</label>
					<div class="col-md-6">
	                <?php
						if ($row['ktm1'] == NULL){
	                    	echo "<input name='kartu[]' id='ktm1' type='file'>";
	                    } else {
	                    	echo "<input name='kartu[]' id='ktm1' type='file' disabled>";
	                    	echo "Foto sudah diupload!";
	                    }
	                ?>
	                </div>
                </div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda vegetarian ?</label>
					<div class="col-md-6">
					<?php
						if ($row['vege1'] == 0){
							echo "<label class='radio-inline'><input type='radio' name='vege1' value='1' required>Ya</label>
									<label class='radio-inline'><input type='radio' name='vege1' value='2'>Tidak</label>";
						} else if ($row['vege1'] == 2){
							echo "<label class='radio-inline'><input type='radio' value='1' disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' checked disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki alergi?</label>
					<div class="col-md-6">
					<?php
						if ($row['alergi1'] == NULL){
							echo "<input type='text' class='form-control' name='alergi1' required>";
						} else {
							echo "<input type='text' class='form-control' value='".$row['alergi1']."' disabled>";
						}
					?>
					</div>
				</div>
				
				<div class="form-group" style="display:block;">
					<label class="col-md-4 control-label">Apakah memiliki penyakit?</label>
					<div class="col-md-6">
					<?php
						if ($row['penyakit1'] == NULL){
							echo "<label class='radio-inline'><input type='radio' value='1' name='penyakit1' onclick='tampil1()' required>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' name='penyakit1' onclick='tidak_tampil1()'>Tidak</label>";
						} else if ($row['penyakit1'] == 'Tidak ada'){
							echo "<label class='radio-inline'><input type='radio' value='1' onclick='tampil1()' disabled>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' onclick='tidak_tampil1()' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' onclick='tampil1()' checked disabled>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' onclick='tidak_tampil1()' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>
				
				<?php
					if ($row['penyakit1'] == NULL){
				?>
						<div class="form-group" id="sakit1">
							<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
							<div class="col-md-6">
								<textarea class="form-control" name="ketpenyakit1" id="text1">Tidak ada</textarea>
							</div>
						</div>
				<?php
					} else {
				?>
						<div class="form-group" id="sakit1">
							<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
							<div class="col-md-6">
								<textarea class="form-control" id="text1" disabled><?php echo $row['penyakit1']; ?></textarea>
							</div>
						</div>
				<?php
					}
				?>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda punya obat untuk penyakit anda?</label>
					<div class="col-md-6">
					<?php
						if ($row['obat1'] == 0){
							echo "<label class='radio-inline'><input type='radio' value='1' name='obat1' required>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' name='obat1'>Tidak</label>";
						} else if ($row['obat1'] == 2){
							echo "<label class='radio-inline'><input type='radio' value='1' disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' checked disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>
			</div>
			<div class="panel panel-heading panel-info">Profile Anggota Kelompok I</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-4 control-label">Nama Anggota Kelompok I</label>
					<div class="col-md-6">
						<?php
							if ($row['nama_anggota2'] == NULL){
								echo "<input type='text' class='form-control' name='nama2' required>";
							} else {
								echo "<input type='text' class='form-control' value='".$row['nama_anggota2']."' disabled>";
							}
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">No Handphone</label>
					<div class="col-md-6">
						<?php
							if ($row['nohp2'] == NULL){
								echo "<input type='number' class='form-control' name='telp2' required>";
							} else {
								echo "<input type='number' class='form-control' value='".$row['nohp2']."' disabled>";
							}
						?>
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-md-4 control-label">Kelas / Tingkat / Jenjang</label>
					<div class="col-md-6">
					<?php
						if ($row['kelas_anggota2'] == NULL){
							echo "<select class='form-control' name='kelas2' required>
									<option value='Sepuluh'>Kelas 10 / Tingkat I</option>
									<option value='Sebelas'>Kelas 11 / Tingkat II</option>
									<option value='DuaBelas'>Kelas 12 / Tingkat III</option>
								</select>";
						} else {
							echo "<input type='hidden' value='".$row['kelas_anggota2']."' name='kelas2'>";
							echo $row['kelas_anggota2'];
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Foto Anggota Kelompok I</label>
					<div class="col-md-6">
					<?php
						if ($row['foto2'] == NULL){
	                    	echo "<input name='photo[]' id='foto2' type='file'>";
	                    } else {
	                    	echo "<input name='photo[]' id='foto2' type='file' disabled>";
	                    	echo "Foto sudah diupload!";
	                    }
	                ?>
	                </div>
                </div>

				<div class="form-group">
					<label class="col-md-4 control-label">Foto Kartu Pelajar</label>
					<div class="col-md-6">
	                <?php
						if ($row['ktm2'] == NULL){
	                    	echo "<input name='kartu[]' id='ktm2' type='file'>";
	                    } else {
	                    	echo "<input name='kartu[]' id='ktm2' type='file' disabled>";
	                    	echo "Foto sudah diupload!";
	                    }
	                ?>
	                </div>
                </div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda vegetarian ?</label>
					<div class="col-md-6">
					<?php
						if ($row['vege2'] == 0){
							echo "<label class='radio-inline'><input type='radio' name='vege2' value='1' required>Ya</label>
									<label class='radio-inline'><input type='radio' name='vege2' value='2'>Tidak</label>";
						} else if ($row['vege2'] == 2){
							echo "<label class='radio-inline'><input type='radio' value='1' disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' checked disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki alergi?</label>
					<div class="col-md-6">
					<?php
						if ($row['alergi2'] == NULL){
							echo "<input type='text' class='form-control' name='alergi2' required>";
						} else {
							echo "<input type='text' class='form-control' value='".$row['alergi2']."' disabled>";
						}
					?>
					</div>
				</div>
				
				<div class="form-group" style="display:block;">
					<label class="col-md-4 control-label">Apakah memiliki penyakit?</label>
					<div class="col-md-6">
					<?php
						if ($row['penyakit3'] == NULL){
							echo "<label class='radio-inline'><input type='radio' value='1' name='penyakit2' onclick='tampil2()' required>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' name='penyakit2' onclick='tidak_tampil2()'>Tidak</label>";
						} else if ($row['penyakit2'] == 'Tidak ada'){
							echo "<label class='radio-inline'><input type='radio' value='1' onclick='tampil2()' disabled>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' onclick='tidak_tampil2()' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' onclick='tampil2()' checked disabled>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' onclick='tidak_tampil2()' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>
				
				<?php
					if ($row['penyakit2'] == NULL || $row['penyakit2'] == 'Tidak ada'){
				?>
						<div class="form-group" id="sakit2">
							<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
							<div class="col-md-6">
								<textarea class="form-control" name="ketpenyakit2" id="text2">Tidak ada</textarea>
							</div>
						</div>
				<?php
					} else {
				?>
						<div class="form-group" id="sakit2">
							<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
							<div class="col-md-6">
								<textarea class="form-control" id="text2" disabled><?php echo $row['penyakit2']; ?></textarea>
							</div>
						</div>
				<?php
					}
				?>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda punya obat untuk penyakit anda?</label>
					<div class="col-md-6">
					<?php
						if ($row['obat2'] == 0){
							echo "<label class='radio-inline'><input type='radio' value='1' name='obat2' required>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' name='obat2'>Tidak</label>";
						} else if ($row['obat2'] == 2){
							echo "<label class='radio-inline'><input type='radio' value='1' disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' checked disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>
			</div>
			<div class="panel panel-heading panel-warning">Profile Anggota Kelompok II</div>
			<div class="row">
				<div class="form-group">
					<label class="col-md-4 control-label">Nama Anggota Kelompok II</label>
					<div class="col-md-6">
						<?php
							if ($row['nama_anggota3'] == NULL){
								echo "<input type='text' class='form-control' name='nama3' required>";
							} else {
								echo "<input type='text' class='form-control' value='".$row['nama_anggota3']."' disabled>";
							}
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">No Handphone</label>
					<div class="col-md-6">
						<?php
							if ($row['nohp3'] == NULL){
								echo "<input type='number' class='form-control' name='telp3' required>";
							} else {
								echo "<input type='number' class='form-control' value='".$row['nohp3']."' disabled>";
							}
						?>
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-md-4 control-label">Kelas / Tingkat / Jenjang</label>
					<div class="col-md-6">
					<?php
						if ($row['kelas_anggota3'] == NULL){
							echo "<select class='form-control' name='kelas3' required>
									<option value='Sepuluh'>Kelas 10 / Tingkat I</option>
									<option value='Sebelas'>Kelas 11 / Tingkat II</option>
									<option value='DuaBelas'>Kelas 12 / Tingkat III</option>
								</select>";
						} else {
							echo "<input type='hidden' value='".$row['kelas_anggota3']."' name='kelas3'>";
							echo $row['kelas_anggota3'];
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Foto Anggota Kelompok II</label>
					<div class="col-md-6">
					<?php
						if ($row['foto3'] == NULL){
	                    	echo "<input name='photo[]' id='foto3' type='file'>";
	                    } else {
	                    	echo "<input name='photo[]' id='foto3' type='file' disabled>";
	                    	echo "Foto sudah diupload!";
	                    }
	                ?>
	                </div>
                </div>

				<div class="form-group">
					<label class="col-md-4 control-label">Foto Kartu Pelajar</label>
					<div class="col-md-6">
	                <?php
						if ($row['ktm3'] == NULL){
	                    	echo "<input name='kartu[]' id='ktm3' type='file'>";
	                    } else {
	                    	echo "<input name='kartu[]' id='ktm3' type='file' disabled>";
	                    	echo "Foto sudah diupload!";
	                    }
	                ?>
	                </div>
                </div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda vegetarian ?</label>
					<div class="col-md-6">
					<?php
						if ($row['vege3'] == 0){
							echo "<label class='radio-inline'><input type='radio' name='vege3' value='1' required>Ya</label>
									<label class='radio-inline'><input type='radio' name='vege3' value='2'>Tidak</label>";
						} else if ($row['vege3'] == 2){
							echo "<label class='radio-inline'><input type='radio' value='1' disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' checked disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki alergi?</label>
					<div class="col-md-6">
					<?php
						if ($row['alergi3'] == NULL){
							echo "<input type='text' class='form-control' name='alergi3' required>";
						} else {
							echo "<input type='text' class='form-control' value='".$row['alergi3']."' disabled>";
						}
					?>
					</div>
				</div>
				
				<div class="form-group" style="display:block;">
					<label class="col-md-4 control-label">Apakah memiliki penyakit?</label>
					<div class="col-md-6">
					<?php
						if ($row['penyakit3'] == NULL){
							echo "<label class='radio-inline'><input type='radio' value='1' name='penyakit3' onclick='tampil3()' required>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' name='penyakit3' onclick='tidak_tampil3()'>Tidak</label>";
						} else if ($row['penyakit3'] == 'Tidak ada'){
							echo "<label class='radio-inline'><input type='radio' value='1' onclick='tampil3()' disabled>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' onclick='tidak_tampil3()' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' onclick='tampil3()' checked disabled>Ya</label>
								<label class='radio-inline'><input type='radio' value='0' onclick='tidak_tampil3()' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>
				
				<?php
					if ($row['penyakit3'] == NULL || $row['penyakit3'] == 'Tidak ada'){
				?>
						<div class="form-group" id="sakit3">
							<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
							<div class="col-md-6">
								<textarea class="form-control" name="ketpenyakit3" id="text3">Tidak ada</textarea>
							</div>
						</div>
				<?php
					} else {
				?>
						<div class="form-group" id="sakit3">
							<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
							<div class="col-md-6">
								<textarea class="form-control" name="ketpenyakit3" id="text3" disabled><?php echo $row['penyakit3']; ?></textarea>
							</div>
						</div>
				<?php
					}
				?>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda punya obat untuk penyakit anda?</label>
					<div class="col-md-6">
					<?php
						if ($row['obat3'] == 0){
							echo "<label class='radio-inline'><input type='radio' value='1' name='obat3' required>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' name='obat3'>Tidak</label>";
						} else if ($row['obat3'] == 2){
							echo "<label class='radio-inline'><input type='radio' value='1' disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' checked disabled>Tidak</label>";
						} else {
							echo "<label class='radio-inline'><input type='radio' value='1' checked disabled>Ya</label>
									<label class='radio-inline'><input type='radio' value='2' disabled>Tidak</label>";
						}
					?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-9">
					<?php
						if ($row['nama_anggota1'] == NULL || $row['nama_anggota2'] == NULL || $row['nama_anggota3'] == NULL || $row['kelas_anggota1'] == NULL || $row['kelas_anggota2'] == NULL || $row['kelas_anggota3'] == NULL || $row['vege1'] == 0 || $row['vege2'] == 0 || $row['vege3'] == 0 || $row['alergi1'] == NULL || $row['alergi2'] == NULL || $row['alergi3'] == NULL || $row['penyakit1'] == NULL || $row['penyakit2'] == NULL || $row['penyakit3'] == NULL || $row['obat1'] == 0 || $row['obat2'] == 0 || $row['obat3'] == 0 || $row['sekolah'] == NULL || $row['nohp1'] == NULL || $row['nohp2'] == NULL || $row['nohp3'] == NULL || $row['email'] == NULL || $row['foto1'] == NULL || $row['foto2'] == NULL || $row['foto3'] == NULL || $row['ktm1'] == NULL || $row['ktm2'] == NULL || $row['ktm3'] == NULL){
							echo "<input type='submit' class='btn btn-primary' name='submit' value='Submit'>";
						}
					?>
					</div>
				</div>
			</div>
		</form>
		<br/><br/>
	</div>

  			</div>
  	</div>
	<script type="text/javascript">
	$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
	</script>
</body>
</html>
