<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inhinyera | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="<?php echo base_url().'assets/img/logo-small-trans.png'?>" type="image/x-icon">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome-4.6.3/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/ionicons-2.0.1/css/ionicons.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css'?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

  <?php
    if (isset($logout_message)) {
      echo "<div class='message'>";
      echo $logout_message;
      echo "</div>";
    }
  ?>
  <?php
    if (isset($message_display)) {
      echo "<div class'message'>";
      echo $message_display;
      echo "</div>";
    }
  ?>
<body class="hold-transition skin-black-light">

<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand">></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
    </nav>
</header>

<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url().'assets/img/sidenavlogo.png'?>"></a>
  </div>


  <!-- /.login-logo -->
  <div class="login-box-body" id="login">
    
   <form role="form" method="POST">
   <?php if($this->session->flashdata('failed')){?>
                <div class="alert alert-danger alert-dismissible">   
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>   
               <?php echo $this->session->flashdata('failed')?>
                </div>
              <?php } else if($this->session->flashdata('success')){?>
                <div class="alert alert-success alert-dismissible"> 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>     
              <?php echo $this->session->flashdata('success')?>
               </div>
                 <?php }else{?>
                 <?php } ?>
                  <?php echo form_open('loginController'); ?>
    <p class="login-box-msg">Sign in to start your session</p>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Student Number" name="studentid" id="studentid" autofocus required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember_me" value="Remember Me"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="submit">Sign In</button>
        <?php echo form_close(); ?>
        </div>
        <!-- /.col -->
      </div>

    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="<?php echo site_url().'/loginController/beamember'?>" class="btn btn-block btn-social btn-vk btn-flat"><i class="fa fa-user"></i> BE A MEMBER</a>
      <a href="<?php echo site_url().'/loginController/registerthisschoolyear'?>" class="btn btn-block btn-social btn-vk btn-flat"><i class="fa fa-list"></i>REGISTER FOR THIS SCHOOL YEAR</a>
      <a href="<?php echo site_url().'/loginadminController/adminlogin'?>" class="btn btn-block btn-social btn-vk btn-flat"><i class="fa fa-dashboard"></i>LOG IN AS ADMINISTRATOR</a>
    </div>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<footer>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-md-16 text-center">
                            <p>Inhinyera Members Management Version 3.0</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
