<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!--Core CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <!-- Custom styles for this template -->
    <!--<link href="style.css" rel="stylesheet">-->
    <link href="css/style-responsive.css" rel="stylesheet">

    <!--Upload Form-->
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>
    <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
    <script src="js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
	
	
	<link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
	<div class="header_part1" id="head">
			<div class="overlay">
				<div class="start_part">	
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<!-- Site Title start-->	
										<div class="site_title">
											<div class="container kv-main">
									            <div class="page-header">
									            <h1>Upload Foto Peserta</h1>
									            </div>
									            <form enctype="multipart/form-data">
									                <div class="form-group">
									                    <input id="file-5" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="upload.php">
									                </div>
									            </form>
									            <br>
									        </div>
										</div>
									</div>
								
								</div>
							</div>
						</div>	
				<!-- Menu Start -->
				<div class="menu_area" id="stick_menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<div class="collapse navbar-collapse mainnavmenu" id="bs-example-navbar-collapse-1">
												<div id ="menu-center">
													<ul class="nav navbar-nav navbar-right mainnav">
														<li><a href="index.php">Home</a></li>
														<li><a href="regis.php">Registrasi</a></li>
														<li><a href="faq.php">FAQ</a></li>	
														<li><a href="login.php">Login</a></li>	
													</ul>
												</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End-->
			</div>
		</div>	
	<!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/script.js"></script>


        <script>
		    $(document).ready(function() {
		        $("#test-upload").fileinput({
		            'showPreview' : false,
		            'allowedFileExtensions' : ['jpg', 'png','gif'],
		            'elErrorContainer': '#errorBlock'
		        });
		        /*
		        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
		            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
		        });
		        */
		    });

        </script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->


</html>
