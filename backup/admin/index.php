<?php include "header_admin.php"; ?>
	
	<div class="container" style="color:white;">
		<h1 align="center">Industrial Competition Petra Christian University Administrator</h1>
		<br/>
		<?php $directory = "../upload/";
		$filecount = 0;
		$files = glob($directory . "*");
		if ($files){
		 $filecount = count($files)-1;
		}
		echo "There are $filecount registration files.";
		?>
		<br><br><br>
		<h4>Visitors Counter</h4>
		<table class="table table-inverse">
		<tr><th>Date</th><th>Total Visitors</th></tr>
		<?php
			$file = '../counter/count-log.txt';
			$lines = file($file);
			$found = false;
			foreach ($lines as $line) {
				$date = substr($line, 0, 10);
				$number = intval(substr($line,11));
				echo '<tr><td>'.$date.'</td><td>'.$number.'</td></tr>';
				}
		?>
		</table>
	</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>

</body>

</html>