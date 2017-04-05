<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nasty H.R.M.S</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/datepicker/datepicker3.css">
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee
        
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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>View</b> <b>Employee</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


           <form action="<?= site_url('dashboard/updateEmp'); ?>" method="post">
        

            

              <div class="col-lg-12">
              <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                          Staff Info
                     </div>
                      <div class="panel-body">
                                <div class="row">
                                <div class="col-md-4">
                                <img src="<?php echo base_url();?>/asset/default-profile.png" class="img-responsive" width="200" height="200">
                                </div>
                                <div class="col-md-2">
                                        <div class="alert alert-success">
                                        Total Annual Leave
                                        <h1><?= $arr->annual_leave;?></h1>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                        <div class="alert alert-warning">
                                        Total Medical Leave
                                        <h1><?= $arr->medical_leave;?></h1>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                        <div class="alert alert-danger">
                                        Total Unpaid Leave
                                        <h1><?= $arr->unpaid_leave;?></h1>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                        <div class="alert alert-info">
                                        Total Personal Leave
                                        <h1><?= $arr->personal_leave;?></h1>
                                        </div>
                                </div>
                                </div>
                                <div class="clearfix" style="height: 20px"></div>
                            <!--     <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                      <label for="exampleInputFile">Upload Profile Image :</label>
                                      <input type="file" id="exampleInputFile">
                                    </div>
                                    </div>
                                </div> -->

                                <div class="clearfix" style="height: 20px"></div>

                                <div class="row">



                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <label for="emp_fullname">Full Name :&nbsp;</label>
                                     
                                      <input type="text" class="form-control" id="emp_fullname" name="emp_fullname" value="<?= $arr->emp_fullname;?>" disabled>
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datepicker">Date of Birth :&nbsp;</label>
                                        <!-- <div class="input-group date"> -->
                                          <!-- <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                          </div> -->
                                          <input type="date" class="form-control" id="date_Birth" name="date_Birth" value="<?= $arr->date_Birth;?>" disabled>
                                        </div>
                                   </div>
                                  </div>
                              
                                  <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="ic_No">Ic No :&nbsp;</label>
                                      
                                      <input type="text" class="form-control" id="ic_No" nam.003
                                      ..23e="ic_No" value="<?= $arr->ic_No;?>" disabled>
                                      
                                     </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="emp_contactNo">HP No. :</label>
                                          <input type="text" class="form-control" id="emp_contactNo" name="emp_contactNo"  value="<?= $arr->emp_contactNo;?>" disabled>
                                      
                                     </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Email">Email :</label>
                                        <input type="Email" class="form-control" id="emp_email" name="emp_email" value="<?= $arr->emp_email;?>" disabled>
                                    </div>
                                  </div>
                                </div>
                                


                               
                      </div>
                  </div>
                </div>
             </div>
              <!-- class="form-control"  -->

             <div class="col-lg-12">
              <div class="row">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                          Other Detial
                     </div>
                      <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="marital">Marital Status :&nbsp;</label><br>
                                    <input type="text" class="form-control" id="marital" name="marital" value="<?= $arr->marital;?>" disabled>
                                        <!-- <input type="radio" value="single" name="marital" id="marital" <?php if($arr->marital == "single"){echo "checked";} ?>>Single -->
                                      <!--   &nbsp;&nbsp;
                                        <input type="radio" value="married" name="marital" id="marital" <?php if($arr->marital == "married"){echo "checked";} ?>>Married -->
                                    </div>
                            </div>


                        </div>
                         <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="spouse_Name">Spouse Name :&nbsp;</label>
                                      <input type="text" class="form-control" id="spouse_Name" name="spouse_Name" value="<?= $arr->spouse_Name;?>" disabled>
                                    </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="emp_address">Address :&nbsp;</label>
                                      <textarea class="form-control" id="emp_address" name="emp_address" disabled=""><?= $arr->emp_address;?></textarea>
                                    </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="emp_address">Poscode :&nbsp;</label>
                                        <input type="text" class="form-control" id="emp_poscode" name="emp_poscode"  value="<?= $arr->emp_poscode;?>" disabled="">
                                      </div>
                            </div>
                             <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="emp_address">City :&nbsp;</label>
                                      <input type="text" class="form-control" id="emp_city" name="emp_city" value="<?= $arr->emp_city;?>" disabled="">
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="emp_state">State</label>
                                      <input type="text" class="form-control" id="emp_state" name="emp_state" value="<?= $arr->emp_state;?>" disabled="">
                                     

                                    </div>
                            </div>

                        </div>


                      </div>
                  </div>
                </div>
             </div>

            

           <div class="col-lg-12">
              <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">
                          Job Description
                     </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-4">
                                    <div class="form-group">
                                          <label for="datepicker">Hire Date :&nbsp;</label>
                                            <div class="input-group date">
                                            <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                            </div>

                                           <input type="text" class="form-control" id="emp_hireDate" name="emp_hireDate" value="<?= $arr->emp_hireDate;?>" disabled="">
                                           </div>
                                    </div>




                          </div>




                          <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="employeeType">Employee Type</label>
                                        <input type="text" class="form-control" id="employeeType" name="employeeType" value="<?= $arr->employeeType;?>" disabled="">
                                       <!--  <select class="form-control" id="employeeType" name="employeeType" >
                                        <option <?php if($arr->employeeType == "Permanent"){echo "selected";} ?>>Permanent</option>
                                        <option  <?php if($arr->employeeType == "Part Time"){echo "selected";} ?>>Part Time</option>
                                        <option <?php if($arr->employeeType == "Trial"){echo "selected";} ?>>Trial</option>
                                        </select> -->
                                    </div>
                              </div>
                              <!-- <div class="col-md-4">
                                    <div class="form-group">

                                              <label for="designation">Designation :</label>
                                              <input type="text" class="form-control" id="emp_designation" name="emp_designation"  value="<?= $arr->emp_designation?>" disabled="">
                              </div>
                              </div> -->

                        
                        </div>

                        <div class="row">

                          <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="employeeType">Department :</label>
                                        
                                         <?php foreach ($lvl as $key) {
                                                if($key->dept_id == $arr->emp_deptId){
                                                   echo " <input type='text' class='form-control' id='emp_designation' name='emp_designation' value='$key->deptName' disabled> ";
                                                    } 
                                                  }

                                          ?>
                                            
                                        

                                       
                                    </div>
                              </div>
                           <div class="col-md-4">
                                    <div class="form-group">

                                              <label for="designation">Designation :</label>
                                              <input type="text" class="form-control" id="emp_designation" name="emp_designation" value="<?= $arr->emp_designation;?>" disabled="">
                                    </div>
                              </div>

                        </div>

                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="socso">SOCSO No. :</label>
                                        <input type="text" class="form-control" id="emp_socsoNo" name="emp_socsoNo" value="<?= $arr->emp_socsoNo;?>" disabled="">
                                     </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="kwsp">KWSP No. :</label>
                                      <input type="test" class="form-control" id="emp_kwspNo" name="emp_kwspNo" value="<?= $arr->emp_kwspNo;?>" disabled="">
                                    </div>
                              </div>

                              <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="acc_Bank">Account Bank No. :</label>
                                      <input type="text" class="form-control" id="emp_accBank" name="emp_accBank" value="<?= $arr->emp_accBank?>"  disabled="">
                                    </div>

                              </div>

                        </div>
                        <div class="row">
                               <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="salary">Employee Salary :</label>
                                     RM <input type="text" class="form-control" id="emp_salary" name="emp_salary" value="<?= $arr->emp_salary?>"  disabled="">
                                    </div>
                                </div>
                        </div>


                      </div>
                </div>
              </div>
          </div>
               
            

             

              

             
              
            

          

            

             


            
             <!--   
            </div> -->
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="id" id="inputId" class="form-control" value="<?= $arr->emp_id; ?>">
              <a href="<?= site_url('dashboard/page/c27?edit=').$arr->emp_id; ?>" name="c5" title="Edit Employee">
                <button type="button" class="btn btn-primary">Edit</button>
                </a>
                &nbsp;&nbsp;
                <a href="<?= site_url('dashboard/page/a5') ?>" name="c5" title="Edit Employee">
                <button type="button" class="btn btn-danger">Back</button>
                </a>  
              </div>
            </form>
          </div>
        </div>
      </div>
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
<!-- bootstrap datepicker -->
<script src="<?= base_url(); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url(); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
     //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });


    
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
</body>
</html>
