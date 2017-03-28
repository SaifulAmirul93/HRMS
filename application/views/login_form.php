<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nasty H.R.M.S</title>
  <link rel="icon" 
      type="image/png" 
      href="<?php echo base_url();?>/asset/logohr.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<style type="text/css">
  .background { 
  background: url("<?php echo base_url();?>/asset/background.jpg"); 
 /*  position: fixed; 
  top: 0; 
  left: 0; */
  
  /* Preserve aspet ratio */
 /* min-width: 100%;*/
  /*min-height: 100%;*/
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
</head>
<body class="background">

<!-- login -->
<div class="login-box" style="display:none;">
  <div  align="center">
     <img src="<?php echo base_url();?>/asset/logohr.png" class="img-responsive" alt="Image" align="center">
  </div>
   <div class="clear" style="height:20px;"></div>
   <div class="clear" style="height:20px;"></div>
 
  <!-- /.login-logo -->
  <div class="login-box-body" style="border-radius: 25px;border-color: #404040;border-style: solid;border-width: 10px;">
 
    <h3 align="center"  class="login-box-msg"><b>Log</b>-in</h3>
    

    <form action="<?= site_url('login/signin'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" id="email" autofocus required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;Login</button>
        </div>
        </form>

        <!-- login for other staff -->
        <!-- <form  href="<?= site_url('login_staff/signin'); ?>" method="post">   -->
        <!-- <div class="col-md-6 col-md-offset-6">
        <a href=><button type="button" class="btn btn-primary btn-block btn-flat"></button> STAFF Login</a>
 -->



           <!-- <button type="submit" href="<?= site_url('login_staff/signin'); ?>""glyphicon glyphicon-log-in      class="btn btn-primary btn-block btn-flat">
           <i class="glyphicon glyphicon-log-in">
           </i>&nbsp;&nbsp;&nbsp;STAFF Login</button> -->
        <!-- </div> -->
        <!-- /.col -->
      </div>
   <!--  </form> -->

   

    <a href="<?= site_url('login_staff/signin'); ?>">Sign up HERE! If you're STAFF</a><br>
    <a href="<?= site_url('login/page/b1'); ?>" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/plugins/iCheck/icheck.min.js"></script>
<script>
$(document).ready(function(){
     window.onload = function() {
      $(".login-box").fadeIn(3000);
    
}

});




  // $(function () {
  //   $('input').iCheck({
  //     checkboxClass: 'icheckbox_square-blue',
  //     radioClass: 'iradio_square-blue',
  //     increaseArea: '20%' // optional
  //   });
  // });
</script>
</body>
</html>




<!-- <div id="login_form">
	<h1>Login Here</h1>
	<?php 
	echo form_open('login/validate_credentials');
	echo form_input('username','Username');
	echo form_input('password','Password');
	echo form_submit('submit','Login');
	echo anchor('login/signup','Create Account');
	?>
</div>
 -->