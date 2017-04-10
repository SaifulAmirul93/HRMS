<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Overtime
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Overtime</b>
                Claim Form
              </h3>
              


              <!-- tools box -->
              
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>


            <div id="salaryDiv">
             <input type="hidden" name="salary" id="salary" class="form-control">
           </div>
            <form action="<?= site_url('dashboard/add_otclaim'); ?>" method="post">
            <!-- /.box-header -->
            <div class="col-lg-12">
                  <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                              Claimer Info
                         </div>
                          <div class="panel-body">
                              <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="ic_No">Claimer Name :</label>
                                          
                                           <input list="browsers" id="emp_name" name="emp_name" class="form-control">
                                              <datalist id="browsers">
                                                <option value="--Choose Staff">
                                                  <?php foreach ($emp as $key) {
                                                                ?>
                                                  <option value="<?= $key->emp_fullname; ?>" ><?= $key->emp_id; ?></option>
                                                                                                      
                                                                                                 
                                                 <?php
                                                  } ?>
                                                


                                              </datalist>
                                          
                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ic_No">Employee ID :</label>
                                            <div id="empDiv">
                                            <input class="form-control" id="emp_id" name="emp_id" type="text">
                                            </div>
                                        </div>
                                      </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="ic_No">Date :</label>
                                                  <input class="form-control" id="emp_OTDate" name="emp_OTDate" type="date">
                                              </div>
                                    </div>
                                    <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="ic_No">Day :</label>
                                                  <select class="form-control" id="emp_OTDay" name="emp_OTDay" type="text"> 
                                                 <!--  <select class="form-control" style="width:40%;"> -->
                                                  <option>Monday</option>
                                                  <option>Tuesday</option>
                                                  <option>Wednesday</option>
                                                  <option>Thursday</option>
                                                  <option>Friday</option>
                                                  <option>Saturday</option>
                                                  <option>Sunday</option>
                                                  </select>
                                              </div>
                                    </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-4">
                                    <label for="ic_No">Time Worked :</label>

                                    </div>
                              </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <label for="ic_No">In :</label>
                                    <input class="form-control" id="emp_OTIn" name="emp_OTIn"  type="time" placeholder="00:00:00" onchange="myFunction()">
                                    </div>
                                     <div class="col-md-4">
                                      <div class="form-group">
                                      <label for="ic_No">Out :</label>
                                      <input class="form-control" id="emp_OTOut" name="emp_OTOut" type="time" placeholder="00:00:00" onchange="myFunction()">
                                      </div>
                                  </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                  Total Hour :
                                  <input class="form-control" id="emp_OTTotal_hour" name="emp_OTTotal_hour" type="text">



                                     
                                  </div>
                                  </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-4">
                                        <label for="ic_No">Overtime On :</label>
                                      </div>
                               </div>
                                        <div class="row">
                                           <div class="col-xs-2">
                                          <input type="radio" id="r1" name="emp_OTRate" value="1.5" onchange="myFunction()"> Working Day
                                          </div>
                                          <div class="col-xs-2">
                                          <input type="radio" id="r2" name="emp_OTRate" value="2.0" onchange="myFunction()"> Public Holiday
                                          </div>
                                          <div class="col-xs-2">
                                          <input type="radio" id="r3" name="emp_OTRate" value="3.0" onchange="myFunction()"> Others
                                          </div>
                                      </div>
                            <div class="clear" style="height:10px;"></div>
                             <div class="row">
                                    <div class="col-md-4">
                                        <label for="ic_No">Total OT (RM) :</label>
                                        <input class="form-control" type="text" id="emp_OTTotal" name="emp_OTTotal">
                                      </div>
                               </div>
                               <div class="clear" style="height:10px;"></div>
                               <div class="row">
                                    <div class="col-md-12">
                                          <label for="ic_No">Description :</label>
                                           <textarea id="emp_OTDes" name="emp_OTDes" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                      <input class="btn btn-primary" type="submit" value="Apply">
                                  </div>
                                </div>

                          </div>
                    </div>
                  </div>
              </div>

               </form>

           
     
        
        <!-- /.col-->
        </div>
      </div>
     
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url(); ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url(); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>


<script type="text/javascript">
                     function myFunction() {
                         emp_in= document.getElementById("emp_OTIn").value;
                         emp_out= document.getElementById("emp_OTOut").value;


                         emp_in = emp_in.split(":");
                          emp_out = emp_out.split(":");

                          var startDate = new Date(0, 0, 0, emp_in[0], emp_in[1], 0);
                          var endDate = new Date(0, 0, 0, emp_out[0], emp_out[1], 0);
                          var diff = endDate.getTime() - startDate.getTime();

                           var hours = Math.floor(diff / 1000 / 60 / 60);
                           
                          diff -= hours * 1000 * 60 * 60;

                          var minutes = Math.floor(diff / 1000 / 60);

                          var total = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
                        
                          document.getElementById("emp_OTTotal_hour").value = total;

                          //total = total.split(":");
                          hour = new Date("July 21, 1983 "+total);
                          dif =hour.getHours();
                          totalhour=Math.floor(dif / 1000 / 60 / 60);

                          salary = document.getElementById("salary").value;
                          
                          rate = document.querySelector('input[name="emp_OTRate"]:checked').value;
                          
                          OTRate = (salary/26)/8 * rate; 

                          totalOT= OTRate.toFixed(0)*dif;
                          document.getElementById("emp_OTTotal").value = totalOT;
                       
                      }




$('#emp_name').change(function() {
            temp = $(this).val();
            //$.when($('#loadingText').show()).then(function(){
                $.post('<?= site_url('dashboard/getEmpId'); ?>', {key : temp}, function(data) {
                  //$('#empDiv').html(data)
                       
                    
                $('#salaryDiv').html(data)
                       
                    
                  
                });


                $.post('<?= site_url('dashboard/getEId'); ?>', {key : temp}, function(data) {
                  $('#empDiv').html(data)
                  });
            //});
        });

   

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });

   
</script>
</body>
</html>