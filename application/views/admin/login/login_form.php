<!DOCTYPE html>
<html>
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8" />
<title>Stardom - A Responsive HTML5 Admin UI Template Theme</title>
<meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
<meta name="description" content="Stardom - A Responsive HTML5 Admin UI Template Theme" />
<meta name="author" content="Holladay" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Font CSS  -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" />

<!-- Core CSS  -->
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/fonts/glyphicons_pro/glyphicons.min.css" />

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/theme.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/pages.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/plugins.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/responsive.css" />

<!-- Demonstration CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/demo.css" />

<!-- Your Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/admin/css/custom.css" />

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>/assets/admin/img/favicon.ico" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="login-page">
<a href="dashboard.html" id="return-arrow"> <i class="fa fa-arrow-circle-left fa-3x text-red2"></i> <span> Return <br />
to Theme </span> </a> 
    
    

<!-- Start: Main -->
<div id="main">
  <div class="container">
    <div class="row">
      <div id="page-logo"> <img src="<?php echo base_url()?>/assets/admin/img/logos/logo-red.png" class="img-responsive" alt="logo" /> </div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title"> <i class="fa fa-lock"></i> Login </div>
          <span class="panel-title-sm pull-right padding-right-sm">Not <b>Cynthia Blue?</b></span> </div>
          <?php // form_open('login/main.php'); ?>
          <form class="cmxform" id="altForm" method="POST" action="<?php echo base_url()?>login/main/login_validation" />
          <div class="panel-body">
            <div class="login-avatar"> <img src="<?php echo base_url()?>/assets/admin/img/avatars/login.png" width="150" height="112" alt="avatar" /> </div>
            <?php if($this->session->flashdata('errors')){
                echo $this->session->flashdata('errors');
            } ?>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                <input type="text" class="form-control phone" maxlength="10" autocomplete="off" placeholder="User Name" name="user_name" />
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                <input type="text" class="form-control product" maxlength="10" autocomplete="off" placeholder="Password" name="pwd"/>
              </div>
            </div>
            <div class="alert alert-warning login-alert">Please read our <b>Terms of Use</b> before logging in.</div>
          </div>
          <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"><a> Forgotten Password?</a></span>
            <div class="form-group margin-bottom-none">
              <input class="btn btn-primary pull-right" type="submit" value="Login" />
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> 

<!-- Theme Javascript --> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/uniform.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/admin/js/custom.js"></script> 
<script type="text/javascript">

jQuery(document).ready(function() {

	// Init Theme Core 	  
	Core.init();   
	
});

</script>
</body>
</html>
