<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nasty H.R.M.S</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<script type="text/javascript">
  window.onload=function(){

    window.print();
  }
</script>

<body style="background-color:#F2F2F2">
<div class="wrapper">


    <div class="content-wrapper">

    <!-- Main content -->
    <div class="clearfix" style="height:30px;"></div>
    <div class="col-lg-10" style="box-shadow:10px 10px 5px #ccc;background-color:#FFFFFF;">
       
        <div class="row">
          <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <div align="center">
              <img src="<?php echo base_url();?>/asset/nasty_header.png" width="650"class="img-responsive" alt="Image" align="center">
            </div> 
            </div>
          <!-- /.box -->

              <!-- tools box -->
              <!-- /. tools -->
            </div>
             <form  action="<?= site_url('dashboard/update_department') ?>" method='post'>
            <!-- /.box-header -->
            <div class="box-body pad">
            <div class="container">
          <h4><b><i class="fa fa-sitemap"></i> DEPARTMENT INFORMATION</b></h4>          
          <table class="table table-bordered">
          <!-- keluarkan output dekat print -->
          <tbody>
             <tr>
              <td><b>Department Name</b></td>
              <td><?= $arr->deptName;?></td>
            </tr>
            <tr>
              <td><b>Description</b></td>
              <td><?= $arr->dept_description;?></td>
            </tr>
          </tbody> 
          </table>

          </div>     
            </div>
            </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
    <!-- /.content -->
  </div>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url(); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>
