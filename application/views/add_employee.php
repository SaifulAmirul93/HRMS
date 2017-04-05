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
              <h3 class="box-title"><b>Add</b> <b>Employee</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


           <form action="<?= site_url('dashboard/add_employee'); ?>" method="post">
        

            

              <div class="col-lg-12">
              <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                          Staff Info
                     </div>
                      <div class="panel-body">
                                <img src="<?php echo base_url();?>/asset/default-profile.png" class="img-responsive" width="200" height="200">
                                <div class="clearfix" style="height: 20px"></div>
                                <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                      <label for="exampleInputFile">Upload Profile Image :</label>
                                      <input type="file" id="exampleInputFile">
                                    </div>
                                    </div>
                                </div>

                                <div class="clearfix" style="height: 20px"></div>

                                <div class="row">



                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <label for="emp_fullname">Full Name :&nbsp;</label>
                                     
                                      <input type="text" class="form-control" id="emp_fullname" name="emp_fullname" >
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datepicker">Date of Birth :&nbsp;</label>
                                        <div class="input-group date">
                                          <div class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="date" class="form-control" id="date_Birth" name="date_Birth">
                                        </div>
                                   </div>
                                  </div>
                                </div>
                                  <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="ic_No">Ic No :&nbsp;</label>
                                      
                                      <input type="text" class="form-control" id="ic_No" name="ic_No">
                                      
                                     </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="emp_contactNo">HP No. :</label>
                                          <input type="text" class="form-control" id="emp_contactNo" name="emp_contactNo">
                                      
                                     </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Email">Email :</label>
                                        <input type="text" class="form-control" id="emp_email" name="emp_email" placeholder="example@mail.com">
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
                                        <input type="radio" value="single" name="marital" id="marital">Single
                                        &nbsp;&nbsp;
                                        <input type="radio" value="married" name="marital" id="marital">Married
                                    </div>
                            </div>


                        </div>
                         <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="spouse_Name">Spouse Name :&nbsp;</label>
                                      <input type="text" class="form-control" id="spouse_Name" name="spouse_Name">
                                    </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="emp_address">Address :&nbsp;</label>
                                      <textarea class="form-control" id="emp_address" name="emp_address"></textarea>
                                    </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="emp_address">Poscode :&nbsp;</label>
                                        <input type="text" class="form-control" id="emp_poscode" name="emp_poscode">
                                      </div>
                            </div>
                             <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="emp_address">City :&nbsp;</label>
                                      <input type="text" class="form-control" id="emp_city" name="emp_city">
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="emp_state">State</label>
                                      <select class="form-control" id="emp_state" name="emp_state">
                                      <option>Johor</option>
                                      <option>Melaka</option>
                                      <option>Negeri Sembilan</option>
                                      <option>Kuala Lumpur</option>
                                      <option>Putrajaya</option>
                                      <option>Selangor</option>
                                      <option>Perak</option>
                                      <option>Pulau Pinang</option>
                                      <option>Kedah</option>
                                      <option>Perlis</option>
                                      <option>Kelantan</option>
                                      <option>Terengganu</option>
                                      <option>Pahang</option>
                                      <option>Sabah</option>
                                      <option>Sarawak</option>
                                      <option>Labuan</option>
                                      
                                      </select>

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

                                           <input type="date" class="form-control" id="emp_hireDate" name="emp_hireDate">
                                           </div>
                                    </div>




                          </div>




                          <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="employeeType">Employee Type</label>
                                        <select class="form-control" id="employeeType" name="employeeType" onchange="myFunction()">
                                        <option>--Choose Type--</option>
                                        <option>Permanent</option>
                                        <option>Part Time</option>
                                        <option>Trial</option>
                                        </select>
                                    </div>
                              </div>
                              
                        
                        </div>
                        
                                    <input type="hidden" class="form-control" id="annual_leave" name="annual_leave">
                              
                                    <input type="hidden" class="form-control" id="unpaid_leave" name="unpaid_leave">
                          
                                    <input type="hidden" class="form-control" id="medical_leave" name="medical_leave">
                             
                                    <input type="hidden" class="form-control" id="maternity" name="maternity">
                              
                                    <input type="hidden" class="form-control" id="personal_leave" name="personal_leave">
                        
                        <div class="row">
                         <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="employeeType">Department :</label>
                                        <select class="form-control" id="employeeType" name="emp_deptId">
                                        <option value="-1" >--Choose Department--</option>
                                         <?php foreach ($arr as $key) {
                                          ?>
                                          <option value="<?= $key->dept_id; ?>" > <?= $key->deptName; ?></option>
                                        <?php
                                          } ?>
                                        </select>
                                    </div>
                              </div>
                         <div class="col-md-4">
                                    <div class="form-group">

                                              <label for="designation">Designation :</label>
                                              <input type="text" class="form-control" id="emp_designation" name="emp_designation">
                                    </div>
                              </div>
                        </div>

                        <div class="row">
                              <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="socso">SOCSO No. :</label>
                                        <input type="text" class="form-control" id="emp_socsoNo" name="emp_socsoNo">
                                     </div>
                              </div>
                              <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="kwsp">KWSP No. :</label>
                                      <input type="test" class="form-control" id="emp_kwspNo" name="emp_kwspNo">
                                    </div>
                              </div>

                              <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="acc_Bank">Account Bank No. :</label>
                                      <input type="text" class="form-control" id="emp_accBank" name="emp_accBank">
                                    </div>

                              </div>

                        </div>
                        <div class="row">
                               <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="salary">Employee Salary :</label>
                                     RM <input type="text" class="form-control" id="emp_salary" name="emp_salary">
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
                <button type="submit" class="btn btn-primary">Submit</button>
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

 function myFunction() {
                          employeeType= document.getElementById("employeeType").value;
                         


                          if(employeeType=="Permanent")
                          {
                                document.getElementById("annual_leave").value = 8;
                                document.getElementById("medical_leave").value = 14;
                                document.getElementById("unpaid_leave").value = 8;
                                document.getElementById("maternity").value = 0;
                                document.getElementById("personal_leave").value = 0;
                          }
                          else if(employeeType=="Trial")
                          {
                                document.getElementById("annual_leave").value = 4;
                                document.getElementById("medical_leave").value = 10;
                                document.getElementById("unpaid_leave").value = 8;
                                document.getElementById("maternity").value = 0;
                                document.getElementById("personal_leave").value = 0;
                          }
                          else
                          {
                                document.getElementById("annual_leave").value = 0;
                                document.getElementById("medical_leave").value = 0;
                                document.getElementById("unpaid_leave").value = 0;
                                document.getElementById("maternity").value = 0;
                                document.getElementById("personal_leave").value = 0;
                          }
                         // emp_out= document.getElementById("emp_OTOut").value;


                         // emp_in = emp_in.split(":");
                         //  emp_out = emp_out.split(":");

                         //  var startDate = new Date(0, 0, 0, emp_in[0], emp_in[1], 0);
                         //  var endDate = new Date(0, 0, 0, emp_out[0], emp_out[1], 0);
                         //  var diff = endDate.getTime() - startDate.getTime();

                         //   var hours = Math.floor(diff / 1000 / 60 / 60);
                           
                         //  diff -= hours * 1000 * 60 * 60;

                         //  var minutes = Math.floor(diff / 1000 / 60);

                         //  var total = (hours < 9 ? "0" : "") + hours + ":" + (minutes < 9 ? "0" : "") + minutes;
                        
                         //  document.getElementById("emp_OTTotal_hour").value = total;

                         //  //total = total.split(":");
                         //  hour = new Date("July 21, 1983 "+total);
                         //  dif =hour.getHours();
                         //  totalhour=Math.floor(dif / 1000 / 60 / 60);

                         //  salary = document.getElementById("salary").value;
                          
                         //  rate = document.querySelector('input[name="emp_OTRate"]:checked').value;
                          
                         //  OTRate = (salary/26)/8 * rate; 

                         //  totalOT= OTRate.toFixed(0)*dif;
                         //  document.getElementById("emp_OTTotal").value = totalOT;
                       
  }




  $(function () {
  
    
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
