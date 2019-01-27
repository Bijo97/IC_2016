<?php include "header.php"; ?>
<div class="container">
	<div class="sub-header">
		<img src="img/left-bulbs.png" class="bulb-left">
		<img src="img/logo.png" class="logo">
		<img src="img/right-bulbs.png" class="bulb-right">
	</div>
	<br>
	<p id="article-title">TECHNICAL MEETING</p>
	<div class="yellow">
		<p id="title">Pengumuman Pra Technical Meeting :</p>
		<ul>
			<li>Technical Meeting akan diadakan tanggal 2 November 2015 di Gedung T Lantai 5 Ruang AVT502 jam 13:00 WIB.</li>
			<li>Kelengkapan pendaftaran harap dilengkapi saat Technical Meeting.</li>
			<li>Timeline terbaru dapat dilihat di <a href="timeline.php" target="_blank">sini</a>.</li>
			<li>Lokasi parkir dapat dilihat di <a href="map.php" target="_blank">sini</a>.</li>
		</ul>
	</div>
	<div class="white">
		<p id="title">Hasil Technical Meeting</p>
		<div>
			Power Point Presentations yang ditayangkan di Technical Meeting dapat didownload pada link berikut :<br>
			<ul>
			<?php if ($downd = opendir('download/TM')) {
			   while (false !== ($file = readdir($downd)))
				  {
					  if ($file != "." && $file != "..")
				  {
						$thelist2 .= '<li><a href="download/TM/'.$file.'">'.$file.'</a></li>';
					  }
				   }
			  closedir($downd);
			  }       
			?>
			<p><?=$thelist2?></p>
			</ul>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>