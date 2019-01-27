<?php include "header.php"; ?>
<div class="container">
	<div class="sub-header">
		<img src="img/left-bulbs.png" class="bulb-left">
		<img src="img/gallery.png" class="logo">
		<img src="img/right-bulbs.png" class="bulb-right">
	</div>
	<br>
	
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
        <script>
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
	</script>
        
	<div class="row">
	<?php
	$files = glob("gallery/*.*");
	
	for ($i=0; $i<count($files); $i++) {
	    $image = $files[$i];
	    echo '<div class="col-md-3 col sm-3" align="center" style="margin:10px 0"><a href="'.$image.'" class="fancybox" title="'.$image.'"><img src="'.$image.'" style="height:200px"/></a><br></div>';
	}
	?>
	</div>

<?php include "footer.php"; ?>