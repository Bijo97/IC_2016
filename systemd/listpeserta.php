<?php
	session_start();
	include "connect.php";
	if (!isset($_SESSION['admin'])){
		header("Location: login_admin.php");
	}

	$sql = "SELECT * FROM user";
	$result = mysql_query($sql);
?>
<?php 
	//session_start();
	
	//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>List Peserta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
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
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="4dm1n.php">
				Admin
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
							<li><a href="logout_admin.php">Logout</a></li>
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
					<li><a href="4dm1n.php">Menu Utama</a></li>
					<!--<li>
						<?php
							if ($row['nama_anggota2'] == NULL || $row['nama_anggota3'] == NULL || $row['nohp2'] == NULL || $row['nohp3'] == NULL || $row['kelas_anggota1'] == NULL || $row['kelas_anggota2'] == NULL || $row['kelas_anggota3'] == NULL){
								echo "<a href='isi_data.php'>Data Peserta</a>";
							} else {
								echo "<a href='preview_data.php'>Data Peserta</a>";
							}
						?>
					</li>-->
					<li class="active"><a href="listpeserta.php">List Peserta</a></li>
					<li><a href="pembayaran.php">Pembayaran</a></li>
					<!--<li>
						<?php							
							if ($row['foto1'] == NULL || $row['foto2'] == NULL || $row['foto3'] == NULL){
								echo "<a href='upload_foto.php'>Upload Foto</a>";
							} else {
								echo "<a href='preview_foto.php'>Upload Foto</a>";
							}
						?>
					</li>-->
				</ul>
			</div>
		</nav>

	</div>
</div>  		</div>
  		<center><h2>List Peserta</h2></center>
 <div class="col-md-10 content">
			<table class="table table-striped" style="font-size: 80%;" width="100%" id="tabel">
				<tr>
					<th>No.</th>
					<th>Nama Anggota 1</th>
					<th>Nama Anggota 2</th>
					<th>Nama Anggota 3</th>
					<th>Kelas Anggota 1</th>
					<th>Kelas Anggota 2</th>
					<th>Kelas Anggota 3</th>
					<th>No. HP 1</th>
					<th>No. HP 2</th>
					<th>No. HP 3</th>
					<th>Vege Anggota 1</th>
					<th>Vege Anggota 2</th>
					<th>Vege Anggota 3</th>
					<th>Alergi Anggota 1</th>
					<th>Alergi Anggota 2</th>
					<th>Alergi Anggota 3</th>
					<th>Penyakit Anggota 1</th>
					<th>Penyakit Anggota 2</th>
					<th>Penyakit Anggota 3</th>
					<th>Obat Anggota 1</th>
					<th>Obat Anggota 2</th>
					<th>Obat Anggota 3</th>
					<th>Sekolah</th>
					<th>Email</th>
					<th>Validasi</th>
					<th>Pembayaran</th>
					<th>Upload Foto</th>
					<th>Upload KTM</th>
					<th>Kelengkapan Data</th>
					<th>Foto Anggota 1</th>
					<th>Foto Anggota 2</th>
					<th>Foto Anggota 3</th>
					<th>KTM Anggota 1</th>
					<th>KTM Anggota 2</th>
					<th>KTM Anggota 3</th>
				</tr>
				<?php $i = 1; while ($row=mysql_fetch_array($result)){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['nama_anggota1']; ?></td>
						<td><?php echo $row['nama_anggota2']; ?></td>
						<td><?php echo $row['nama_anggota3']; ?></td>
						<td><?php echo $row['kelas_anggota1']; ?></td>
						<td><?php echo $row['kelas_anggota2']; ?></td>
						<td><?php echo $row['kelas_anggota3']; ?></td>
						<td><?php echo $row['nohp1']; ?></td>
						<td><?php echo $row['nohp2']; ?></td>
						<td><?php echo $row['nohp3']; ?></td>
						<td><?php
								if ($row['vege1'] == 1){
									echo "<span style='color: green;'>Ya</span>"; 
								} else {
									echo "<span style='color: red;'>Tidak</span>"; 
								}
							?></td>
						<td><?php
								if ($row['vege2'] == 1){
									echo "<span style='color: green;'>Ya</span>"; 
								} else {
									echo "<span style='color: red;'>Tidak</span>"; 
								}
							?></td>
						<td><?php
							if ($row['vege3'] == 1){
								echo "<span style='color: green;'>Ya</span>"; 
							} else {
								echo "<span style='color: red;'>Tidak</span>"; 
							}
						?></td>
						<td><?php echo $row['alergi1']; ?></td>
						<td><?php echo $row['alergi2']; ?></td>
						<td><?php echo $row['alergi3']; ?></td>
						<td><?php echo $row['penyakit1']; ?></td>
						<td><?php echo $row['penyakit2']; ?></td>
						<td><?php echo $row['penyakit3']; ?></td>
						<td><?php
								if ($row['obat1'] == 1){
									echo "<span style='color: green;'>Ya</span>"; 
								} else {
									echo "<span style='color: red;'>Tidak</span>"; 
								}
							?></td>
						<td><?php
								if ($row['obat2'] == 1){
									echo "<span style='color: green;'>Ya</span>"; 
								} else {
									echo "<span style='color: red;'>Tidak</span>"; 
								}
							?></td>
						<td><?php
								if ($row['obat3'] == 1){
									echo "<span style='color: green;'>Ya</span>"; 
								} else {
									echo "<span style='color: red;'>Tidak</span>"; 
								}
							?></td>
						<td><?php echo $row['sekolah']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php
								if ($row['validasi'] == 1){
									echo "<span style='color: green;'>Sudah</span>"; 
								} else {
									echo "<span style='color: red;'>Belum</span>"; 
								}
							?></td>
						<td><?php
								if ($row['pembayaran'] == 1){
									echo "<span style='color: green;'>Sudah</span>"; 
								} else {
									echo "<span style='color: red;'>Belum</span>"; 
								}
							?></td>
						<td><?php
								if ($row['foto1'] != NULL && $row['foto2'] != NULL && $row['foto3'] != NULL){
									echo "<span style='color: green;'>Sudah</span>";
								} else {
									echo "<span style='color: red;'>Belum</span>"; 
								}
							?></td>
						<td><?php
								if ($row['ktm1'] != NULL && $row['ktm2'] != NULL && $row['ktm3'] != NULL){
									echo "<span style='color: green;'>Sudah</span>";
								} else {
									echo "<span style='color: red;'>Belum</span>"; 
								}
							?></td>
						<td><?php
								if ($row['nama_anggota2'] != NULL && $row['nama_anggota3'] != NULL && $row['nohp2'] != NULL && $row['nohp3'] != NULL && $row['kelas_anggota1'] != NULL && $row['kelas_anggota2'] != NULL && $row['kelas_anggota3'] != NULL && $row['vege1'] != NULL && $row['vege2'] != NULL && $row['vege3'] != NULL && $row['alergi1'] != NULL && $row['alergi2'] != NULL && $row['alergi3'] != NULL){
									echo "<span style='color: green;'>Sudah</span>";
								} else {
									echo "<span style='color: red;'>Belum</span>"; 
								}
							?></td>
						<td>
							<?php 
									if ($row['foto1'] != NULL) {
										$namafile = $row['foto1']; 
										echo '<a href="http://ic.petra.ac.id/systemd/download2.php?file='.$namafile.'">Download Link</a>'; 
									} else { echo "<span style='color: red;'>Tidak ada file</span>"; }
							?>
						</td>
						<td>
							<?php 
									if ($row['foto2'] != NULL) {
										$namafile = $row['foto2']; 
										echo '<a href="http://ic.petra.ac.id/systemd/download.php?file='.$namafile.'">Download Link</a>'; 
									} else { echo "<span style='color: red;'>Tidak ada file</span>"; }
							?>
						</td>
						<td>
							<?php 
									if ($row['foto3'] != NULL) {
										$namafile = $row['foto3']; 
										echo '<a href="http://ic.petra.ac.id/systemd/download.php?file='.$namafile.'">Download Link</a>'; 
									} else { echo "<span style='color: red;'>Tidak ada file</span>"; }
							?>
						</td>
						<td>
							<?php 
									if ($row['ktm1'] != NULL) {
										$namafile = $row['ktm1']; 
										echo '<a href="http://ic.petra.ac.id/systemd/download.php?file='.$namafile.'">Download Link</a>'; 
									} else { echo "<span style='color: red;'>Tidak ada file</span>"; }
							?>
						</td>
						<td>
							<?php 
									if ($row['ktm2'] != NULL) {
										$namafile = $row['ktm2']; 
										echo '<a href="http://ic.petra.ac.id/systemd/download.php?file='.$namafile.'">Download Link</a>'; 
									} else { echo "<span style='color: red;'>Tidak ada file</span>"; }
							?>
						</td>
						<td>
							<?php 
									if ($row['ktm3'] != NULL) {
										$namafile = $row['ktm3']; 
										echo '<a href="http://ic.petra.ac.id/systemd/download.php?file='.$namafile.'">Download Link</a>'; 
									} else { echo "<span style='color: red;'>Tidak ada file</span>"; }
							?>
						</td>
					</tr>
				<?php $i++; } ?>
			</table>
</div>
  		</div>
  		<!--<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
  			</p>
  		</footer>-->
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
