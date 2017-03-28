<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NSTY Staff | Attendance</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/css/bootstrap.min.css">
  
  

 <!--//clock-->  
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
  // Create a newDate() object and extract the seconds of the current time on the visitor's
  var seconds = new Date().getSeconds();
  // Add a leading zero to seconds value
  $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
  },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the minutes of the current time on the visitor's
  var minutes = new Date().getMinutes();
  // Add a leading zero to the minutes value
  $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the hours of the current time on the visitor's
  var hours = new Date().getHours();
  // Add a leading zero to the hours value
  $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
  
}); 
</script> 
  <style type="text/css">
  body{
   /*background:#202020;*/
   font:bold 12px Arial, Helvetica, sans-serif;
   margin:0;
   padding:0;
   min-width:960px;
   color:#bbbbbb; 
}

a { 
  text-decoration:none; 
  color:#00c6ff;
}

h1 {
  font: 4em normal Arial, Helvetica, sans-serif;
  padding: 20px;  margin: 0;
  text-align:center;
}

h1 small{
  font: 0.2em normal  Arial, Helvetica, sans-serif;
  text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
  display: block;
}

h2 {
    font-weight:700;
    color:#bbb;
    font-size:20px;
}

h2, p {
  margin-bottom:10px;
}

@font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('BebasNeue-webfont.woff') format('woff'),
         url('BebasNeue-webfont.ttf') format('truetype'),
         url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.container {width: 960px; margin overflow: hidden;}

.clock {width:800px; margin:0 auto; padding:30px; color:#fff; }

.choose {width:800px; margin:0 auto; padding:20px; color:#fff; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:36px; text-align:center; text-shadow:0 0 5px #00c6ff; }

ul { width:100%; margin:0 auto; padding:0px; list-style:none; text-align:center; }
ul li { display:inline; font-size:10em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 5px #00c6ff; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
}

</style>
  
    <!--  -->

<link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/CSS3-digital-clock/index.html" />


 
</head>
<body style="background:#202020;">

<h1>NSTY WORLDWIDE SDN.BHD</h1>
<h1><small>Staff Attendance</small></h1>
<div class="container">
<div class="clock">
<div id="Date"></div>
<!--  -->
<ul>
    <li id="hours"> </li>
    <li id="point">:</li>
    <li id="min"> </li>
    <li id="point">:</li>
    <li id="sec"> </li>
</ul>

</div>
</div>

 <div class="clear" style="height:10px;"></div>

            <div class="choose">
                          <!-- <div class="panel panel-danger">
                             <div class="panel-heading">
                                Danger Zone
                            </div> -->
                          <!--  <div class="panel-body"> -->
                                <div class="col-sm-6">
                                <a id="checkIn" title="item that need to restocked" style="cursor: pointer;">
                                  <div class="alert alert-success" style="text-align: center;">
                                      CHECK IN<span class="badge badge-notify"></span>
                                    </div>
                                </a>
                                </div>
                                
                                <div class="col-sm-6">
                                <a id="checkOut" title="item that need to restocked" style="cursor: pointer;">
                                    <div class="alert alert-info" style="text-align: center;">
                                      CHECK OUT<span class="badge badge-notify"></span>
                                    </div>
                                </a>
                                
                                <!-- </div> -->
                             
                            </div>
                          <!-- </div> -->

          </div>
                  

<div class="row">
<div class="login-box" style="display:none;" id="cIn">

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Check In<br>Tab button to start your session</p>

    <form action="<?= site_url('attendance/checkIn'); ?>" method="post">
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter your Staff ID here!" name="staff_id" id="staff_id">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ready for work</button>
        </div>
      </div>
    </form>
  </div>
</div>
  <!-- /.check in-box-body -->

<div class="login-box" style="display:none;" id="cOut">
  <div class="login-box-body">
    <p class="login-box-msg">Check Out<br>Tab button to end your session</p>

    <form action="<?= site_url('attendance/checkOut'); ?>" method="post">
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter your Staff ID here!" name="staff_id" id="staff_id">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <center>
      <div class="row">
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">I'm out</button>
        </div>
         </center>
    </form>

</div>
</div>

</div>  
 
  

<!-- /.check out-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#checkIn').click(function() {
            $("#cOut").fadeOut('slow');
    
            $("#cIn").fadeIn('slow');
        });
        $('#checkOut').click(function() {
            $("#cIn").fadeOut('slow');
            $("#cOut").fadeIn('slow');
      
        });

</script>


</body>
</html>
