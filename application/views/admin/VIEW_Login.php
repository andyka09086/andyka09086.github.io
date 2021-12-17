<!DOCTYPE html>
<html class="fixed">
  <head>
    <!-- Basic -->
    <meta charset="UTF-8" />
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template" />
    <meta name="author" content="okler.net" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login PT. Ali Makmur</title>
    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-datepicker/css/datepicker3.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/stylesheets/theme.css" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/stylesheets/skins/default.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/stylesheets/theme-custom.css" />
    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/modernizr/modernizr.js"></script>
  </head>
  <body>
    <!-- start: page -->
    <section class="body-sign">
      <div class="center-sign">
        <a href="/" class="logo pull-left">
          <img src="<?php echo base_url(); ?>assets/admin/images/logo01.png" height="54" alt="Porto Admin" />
        </a>

        <div class="panel panel-sign">
          <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Masuk</h2>
          </div>
          <div class="panel-body">
            <form action="<?php echo site_url('administrator/validasi')?>" method="post">
              <div class="form-group mb-lg">
                <label>Username</label>
                <div class="input-group input-group-icon">
                  <input name="username" type="text" class="form-control input-lg" />
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-user"></i>
                    </span>
                  </span>
                </div>
              </div>
              <div class="form-group mb-lg">
                <div class="clearfix">
                  <label class="pull-left">Password</label>
                </div>
                <div class="input-group input-group-icon">
                  <input name="password" type="password" class="form-control input-lg" />
                  <span class="input-group-addon">
                    <span class="icon icon-lg">
                      <i class="fa fa-lock"></i>
                    </span>
                  </span>
                </div>
              </div>
              <div class="form-group mb-lg">
                <div class="clearfix">
                  <label class="pull-left">Login sebagai</label>
                </div>
                <div class="input-group input-group-icon">
                  <select name="level" class="form-control input-md">
                    <option value="blank">--Pilih--</option>
                    <option value="Admin">Admin</option>
                    <option value="Direktur">Direktur</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="checkbox-custom checkbox-default">
                    <input id="RememberMe" name="rememberme" type="checkbox" />
                    <label for="RememberMe">Remember Me</label>
                  </div>
                </div>
                <div class="col-sm-4 text-right">
                  <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
                  <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                </div>
              </div>
              <p class="text-center">Don't have an account yet? <a href="<?php echo site_url('administrator/register')?>">Sign Up!</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/admin/javascripts/theme.js"></script>
    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/admin/javascripts/theme.custom.js"></script>
    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/admin/javascripts/theme.init.js"></script>
  </body>
</html>
