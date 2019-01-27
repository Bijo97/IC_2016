<?php
$sql = "SELECT * FROM berita";
include "header_admin.php"; 

function listdir_by_date($path){
$dir = opendir($path);
$list = array();
while($file = readdir($dir)){
if ($file != '.' and $file != '..' and $file != 'index.php'){
    // add the filename, to be sure not to
    // overwrite a array key
    $ctime = filemtime($path . $file) . ',' . $file;
    $list[$ctime] = $file;
}
}
closedir($dir);
ksort($list);
return $list;
}
?>
	<div class="container" style="color:white">
		List of Registrations :<br>
		<ol>
		<?php 
		$files = listdir_by_date("../upload/");
		foreach($files as $file) {
			$time = filemtime("../upload/".$file);
			echo '<li><a href="../upload/'.$file.'">'.$file.'</a> ('.date("F d Y H:i:s",$time).')</li>';
		}
		?>
		</ol>
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