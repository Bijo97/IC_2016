<!DOCTYPE html>
<html lang="en">
  <head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register Page</title>
    <?php include 'assets.header.php';?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
	    function recaptchaCallback(){
			$('#submitBtn').removeAttr('disabled');
		};
	</script>
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><img src="../images/logos.png" height="30"></img></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="login.php">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="register.php">Registrasi Team<span class="sr-only">(current)</span></a></li>
            <li><a href="login.php">Login</a></li>
			<li><a href="faq.php">FAQ</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
    	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
										
					
					<form class="form-horizontal" role="form" method="POST" action="random.php">
						<div class="form-group">
							<label class="col-md-4 control-label">Nama</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nama" value="" required>
							</div>
						</div>

			            <div class="form-group">
			              <label class="col-md-4 control-label">Sekolah</label>
			              <div class="col-md-6">
			                <input type="text" class="form-control" name="sekolah" value="" required>
			              </div>
			            </div>

			            <div class="form-group">
			              <label class="col-md-4 control-label">No. Telepon</label>
			              <div class="col-md-6">
			                <input type="number" class="form-control" name="telp" value="" required>
			              </div>
			            </div>

						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" required>
							</div>
						</div>

			            <div class="form-group">
			              <label class="col-md-4 control-label"></label>
			              <div class="col-md-6">
			                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdcuScTAAAAAPxKR6RvYFdYsHxoC6HRgak5eqSh" style="float: center;"></div>
			              </div>
			            </div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" id="submitBtn" class="btn btn-primary" disabled>Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		</div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
