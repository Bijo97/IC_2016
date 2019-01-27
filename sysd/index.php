<!DOCTYPE html><html lang="en">
  <head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Register Page</title>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/jquery.easy-autocomplete.min.js"></script> 
    <link rel="stylesheet" href="assets/easy-autocomplete.min.css"> 
    <style>
	*{background:transparent;}
    </style>
    <script>
      function recaptchaCallback(){
      $('#submitBtn').removeAttr('disabled');
    };
    </script>
  </head>
  <body class="container-fluid" style="background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAHklEQVQImWN4+fLl/2PHjv2H0QwwDgwzYKiAycAEAY+hOSsqO6XoAAAAAElFTkSuQmCC');">
    <div class="row" style="margin-top:10%;margin-bottom:auto;position:relative;">
	<div class="col-md-6"></div>
	<div class="col-md-5" style="position:relative;padding:20px;border-radius:10px;">
	<form class="form-horizontal" role="form" method="POST" action="random.php">
    	  <div class="form-group">
    	    <label for="inputEmail3" class="col-sm-3 control-label">Nama Ketua</label>
    	    <div class="col-sm-9">
            <input type="text" class="form-control" name="nama" value="" placeholder="Nama Ketua Kelompok" required>
    	    </div>
    	  </div>
      	<div class="form-group">
      	    <label for="inputPassword3" class="col-sm-3 control-label">Sekolah Asal</label>
      	    <div class="col-sm-9">
      		<input id="provider-json" class="form-control"  name="sekolah" placeholder="Nama Sekolah Asal" required/>
      		<script>
                      var options = {
                          url: "assets/listd.json",
                          getValue: "nama",
                          list: {
                              match: {
                                      enabled: true
                              }
                          }
                      };
                      $("#provider-json").easyAutocomplete(options);
                  </script>
      	    </div>
      	  </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">No. Handphone</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="telp" value="" placeholder="Nomor Handphone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">Alamat Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="inputPassword3" placeholder="Alamat Email Aktif" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-md-3 control-label">Human Verification</label>
            <div class="col-md-9">
	             <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdcuScTAAAAAPxKR6RvYFdYsHxoC6HRgak5eqSh"></div>
            </div>
          </div>
	  <div class="form-group">
	    <div class="col-sm-offset-3 col-sm-9">
	      <button type="submit" id = "submitBtn" class="btn btn-default" disabled>Register</button> | <a href="login.php">Already have an account?</a> | <a href="faq.php">Frequent Ask Question (FAQ)</a>
	    </div>
	  </div>
	</form>
	</div>
	<div class="col-md-1 xs-hidden lg-hidden" style="margin-left:-20px;">
    </div>
  </body>
</html>
