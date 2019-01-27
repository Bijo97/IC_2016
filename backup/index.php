<?php include "header.php"; ?>
<?php include "counter/index.php"; ?>
<div class="container">
	<div class="sub-header">
		<img src="img/left-bulbs.png" class="bulb-left">
		<img src="img/logo.png" class="logo">
		<img src="img/right-bulbs.png" class="bulb-right">
	</div>
	<p id="title" style="font-size:50px;" align="center">Welcome to Industrial Competition 2015</p>
	<div align="center">
		<!--<p id="article-title">Kami tunggu kedatangan kalian!<br>4 November 2015 jam 9:00 WIB</p>-->
		<p id="article-title">Terima kasih bagi peserta yang telah berpartisipasi.</p>
		<a href="registration.php"><table border=0>
			<tr style="background-image:url('img/bg-regis.png');">
				<td style="padding:10px; color:black; text-align:center">
					<p id="buttons" style="font-size:48px">Let&#39;s join us, make a better invention and take the chance!</p>
				</td>
				<td><img src="img/robot-regis.png"></td>
			</tr>
		</table></a>
	</div>
	<br>
	<p id="title" align="center">Invention Time</p>
	<?php include "countdown.php";?>
</div>
<br><br>
<div class="container">
	<p id="title">Informations</p>
	<div class="row">
		<a href="timeline.php"><div class="col-md-2 col-sm-3 info-white" align="center">
			<img src="img/time.jpg" width="100%"><br><br>
			<p id="buttons">Timeline</p>
		</div></a>
		<a href="poster.php"><div class="col-md-2 col-sm-3 info-yellow" align="center">
			<img src="img/poster.jpg" width="100%"><br><br>
			<p id="buttons">Poster</p>
		</div></a>
		<a href="technical_meeting.php"><div class="col-md-2 col-sm-3 info-white" align="center">
			<img src="img/presentation.jpg" width="100%"><br><br>
			<p id="buttons">Technical Meeting</p>
		</div></a>
		<a href="map.php"><div class="col-md-2 col-sm-3 info-yellow" align="center">
			<img src="img/map.jpg" width="100%"><br><br>
			<p id="buttons">Denah</p>
		</div></a>
		<a href="winner.php"><div class="col-md-2 col-sm-3 info-white" align="center">
			<img src="http://photos.gograph.com/thumbs/CSP/CSP310/k3104687.jpg" width="100%"><br><br>
			<p id="buttons">Pemenang</p>
		</div></a>
			</div>
</div>
<?php include "footer.php"; ?>