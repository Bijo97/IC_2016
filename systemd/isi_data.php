<?php
	include "cek_isi.php";

	if (!($row['nama_anggota1'] == NULL || $row['nama_anggota2'] == NULL || $row['nama_anggota3'] == NULL || $row['kelas_anggota1'] == NULL || $row['kelas_anggota2'] == NULL || $row['kelas_anggota3'] == NULL || $row['nohp1'] == NULL || $row['nohp2'] == NULL || $row['nohp3'] == NULL)){
		header("Location: preview_data.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Dashboard</title>
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
    <script type="text/javascript">
		function tampil1(){
			document.getElementById('sakit1').style.display = "block";
		}

		function tampil2(){
			document.getElementById('sakit2').style.display = "block";
		}

		function tampil3(){
			document.getElementById('sakit3').style.display = "block";
		}

		function tidak_tampil1(){
			document.getElementById('sakit1').style.display = "none";
		}

		function tidak_tampil2(){
			document.getElementById('sakit2').style.display = "none";
		}

		function tidak_tampil3(){
			document.getElementById('sakit3').style.display = "none";
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
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="simpleadmin.php">
				User
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
					<li><a href="simpleadmin.php">Menu Utama</a></li>
					<li class="active">
						<?php
							if ($row['nama_anggota2'] == NULL || $row['nama_anggota3'] == NULL || $row['nohp2'] == NULL || $row['nohp3'] == NULL || $row['kelas_anggota1'] == NULL || $row['kelas_anggota2'] == NULL || $row['kelas_anggota3'] == NULL){
								echo "<a href='isi_data.php'>Data Peserta</a>";
							} else {
								echo "<a href='preview_data.php'>Data Peserta</a>";
							}
						?>
					</li>
					<li><a href="timelines.php">Timeline</a></li>
					<li>
						<?php							
							if ($row['foto1'] == NULL || $row['foto2'] == NULL || $row['foto3'] == NULL){
								echo "<a href='upload_foto.php'>Upload Foto</a>";
							} else {
								echo "<a href='preview_foto.php'>Upload Foto</a>";
							}
						?>
					</li>
					<li>
                        <?php                           
                            if ($row['ktm1'] == NULL || $row['ktm2'] == NULL || $row['ktm3'] == NULL){
                                echo "<a href='upload_kartu.php'>Upload Katu Pelajar</a>";
                            } else {
                                echo "<a href='preview_kartu.php'>Upload Kartu Pelajar</a>";
                            }
                        ?>
                    </li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Isi Data Peserta
	</div>
	<div class="panel-body">
		<form class="form-horizontal" role="form" method="POST" action="send.php">
			<div class="panel panel-default">
				<h3 style="margin-left: 3%;">Dataa Utama</h3>
				<div class="form-group">
					<label class="col-md-4 control-label">Sekolah</label>
					<div class="col-md-6">
						<?php
							if ($row['sekolah'] == NULL){
								echo "<input type='text' class='form-control' name='sekolah'>";
							} else {
								echo "<input type='text' class='form-control' name='sekolah' value='".$row['sekolah']."' disabled>";
							}
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Email</label>
					<div class="col-md-6">
						<?php
							if ($row['email'] == NULL){
								echo "<input type='text' class='form-control' name='email'>";
							} else {
								echo "<input type='email' class='form-control' name='email' value='".$row['email']."' disabled>";
							}
						?>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<h3 style="margin-left: 3%;">Data Anggota Pertama</h3>
				<div class="form-group">
					<label class="col-md-4 control-label">Nama Anggota Pertama</label>
					<div class="col-md-6">
						<?php
							if ($row['nama_anggota1'] == NULL){
								echo "<input type='text' class='form-control' name='nama1'>";
							} else {
								echo "<input type='text' class='form-control' name='nama1' value='".$row['nama_anggota1']."' disabled>";
							}
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">No Telp Anggota Pertama</label>
					<div class="col-md-6">
						<?php
							if ($row['nohp1'] == NULL){
								echo "<input type='number' class='form-control' name='telp1'>";
							} else {
								echo "<input type='number' class='form-control' name='telp1' value='".$row['nohp1']."' disabled>";
							}
						?>
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-md-4 control-label">Kelas anggota 1</label>
					<div class="col-md-6">
						<select class="form-control" name="kelas1" required>
							<option value="Sepuluh">Kelas 1</option>
							<option value="Sebelas">Kelas 2</option>
							<option value="DuaBelas">Kelas 3</option>
						</select>
					</div>
				</div>

				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda vegetarian (anggota 1)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" name="vege1" value="1" required>Ya</label>
						<label class="radio-inline"><input type="radio" name="vege1" value="0">Tidak</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki alergi? (anggota 1)</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="alergi1" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah memiliki penyakit? (anggota 1)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" value="1" name="penyakit1" onclick="tampil1()" required>Ya</label>
						<label class="radio-inline"><input type="radio" value="0" name="penyakit1" onclick="tidak_tampil1()">Tidak</label>
					</div>
				</div>
				
				<div class="form-group" id="sakit1">
					<label class="col-md-4 control-label">Jika ya, apa penyakit anda?</label>
					<div class="col-md-6">
						<textarea class="form-control" name="ketpenyakit1"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki obat untuk penyakit anda? (anggota 1)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" value="1" name="obat1" required>Ya</label>
						<label class="radio-inline"><input type="radio" value="0" name="obat1">Tidak</label>
					</div>
				</div>
			</div>
		
			<div class="panel panel-default">
				<h3 style="margin-left: 3%;">Data Anggota Kedua</h3>
				<div class="form-group">
					<label class="col-md-4 control-label">Nama Anggota Kedua</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="nama2" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Kelas Anggota Kedua</label>
					<div class="col-md-6">
						<select class="form-control" name="kelas2" required>
							<option value="Sepuluh">Kelas 1</option>
							<option value="Sebelas">Kelas 2</option>
							<option value="DuaBelas">Kelas 3</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">No Telp Anggota Kedua</label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="telp2" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda vegetarian (anggota 2)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" name="vege2" value="1" required>Ya</label>
						<label class="radio-inline"><input type="radio" name="vege2" value="0">Tidak</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki alergi? (anggota 2)</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="alergi2" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah memiliki penyakit? (anggota 2)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" value="1" name="penyakit2" onclick="tampil2()" required>Ya</label>
						<label class="radio-inline"><input type="radio" value="0" name="penyakit2" onclick="tidak_tampil2()">Tidak</label>
					</div>
				</div>
				
				<div class="form-group" id="sakit2">
					<label class="col-md-4 control-label">Jika ya, Apa penyakit anda?</label>
					<div class="col-md-6">
						<textarea class="form-control" name="ketpenyakit2"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki obat untuk penyakit anda? (anggota 2)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" value="1" name="obat2" required>Ya</label>
						<label class="radio-inline"><input type="radio" value="0" name="obat2">Tidak</label>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<h3 style="margin-left: 3%;">Data Anggota Ketiga</h3>
				<div class="form-group">
					<label class="col-md-4 control-label">Nama Anggota Ketiga</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="nama3" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Kelas Anggota Ketiga</label>
					<div class="col-md-6">
						<select class="form-control" name="kelas3" required>
							<option value="Sepuluh">Kelas 1</option>
							<option value="Sebelas">Kelas 2</option>
							<option value="DuaBelas">Kelas 3</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">No Telp Anggota Ketiga (anggota 3)</label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="telp3" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda vegetarian (anggota 3)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" name="vege3" value="1" required>Ya</label>
						<label class="radio-inline"><input type="radio" name="vege3" value="0">Tidak</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki alergi? (anggota 3)</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="alergi3" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Apakah memiliki penyakit? (anggota 3)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" value="1" name="penyakit3" onclick="tampil3()" required>Ya</label>
						<label class="radio-inline"><input type="radio" value="0" name="penyakit3" onclick="tidak_tampil3()">Tidak</label>
					</div>
				</div>
				
				<div class="form-group" id="sakit3">
					<label class="col-md-4 control-label">Jika ya, Apa penyakit anda?</label>
					<div class="col-md-6">
						<textarea class="form-control" name="ketpenyakit3"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apakah anda memiliki obat untuk penyakit anda? (anggota 3)</label>
					<div class="col-md-6">
						<label class="radio-inline"><input type="radio" value="1" name="obat3" required>Ya</label>
						<label class="radio-inline"><input type="radio" value="0" name="obat3">Tidak</label>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<input type="submit" class="btn btn-primary" name="submit" value="Submit">
				</div>
			</div>
		</form>
	</div>
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
