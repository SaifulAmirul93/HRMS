<!DOCTYPE html>
<html>
<head>
 
  <title>Nasty H.R.M.S | Dummy Payslip</title>
<style type="text/css">
  body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 22.8cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="portrait"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="portrait"] {
  width: 21cm;
  height: 14.8cm;  
}
.firstLine td{
  border-top: 2px solid black;
    border-bottom: 2px solid black;
}
.payslip_border td{
background-color: black !important;
color: white !important;

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
<?php 

$salary = number_format((float) $arr->emp_salary, 2, '.', '');
$year=date('Y');
$month=date('m');
$startmonth=date('m', strtotime("last month"));
$startDate=$year."-".$startmonth."-"."23";
$endDate=$year."-".$month."-"."23";
$epf = $salary * 0.08;
$socso = ( $salary * 0.005 ) -0.25;
$nightAllowance=0.0;
$totalOT=0;
$advance=0.00; 
foreach ($ot as $key) {
  if(($key->emp_id == $arr->emp_id)&&(($key->emp_OTDate >= $startDate)&&($arr->emp_OTDate <= $endDate))){
   $ototal = $key->emp_OTTotal;
  
   $totalOT=$totalOT + $ototal;
   }
}


if(($arr->employeeType == "Trial") || ($arr->employeeType == "Part Time") ){
  $epf = 0.0;
  $socso = 0.0;
}

if(($arr->emp_id == 30072) || ($arr->emp_id == 30080) || ($arr->emp_id == 30078) || ($arr->emp_id == 30079)){
  $nightAllowance=100.00;
}

if($arr->emp_deptId == 17 && $arr->emp_designation == "operator"){

  $advance=200.00;  

}

//$ototal = $ot->emp_OTTotal;

$allowance=0.00;
    if($salary<3000.00)
    {
      $allowance=100.00;
    }
$sub_total= $epf + $socso+$advance;
$gross_pay= $salary+$allowance+$nightAllowance+$totalOT;
$net_pay= $gross_pay - $sub_total;

?>
</style>
<link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/css/bootstrap.min.css">
<link rel="Stylesheet" href="<?php echo base_url();?>/dist/css/stylesheet.css"/>
<link rel="Stylesheet" href="<?php echo base_url();?>/dist/css/w3.css"/>
 </head> 
<body>
  <page size="A4">


<table width="600" border="1"> 
<tbody>

<tr>
<td style="font-weight: 400;" width="131">NAME</td>
<td style="font-weight: 400;" width="13">:&nbsp;</td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= $arr->emp_fullname;?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td>&nbsp;</td>
<td colspan="4" rowspan="4">&nbsp;<img src="<?php echo base_url();?>/asset/Picture1.png" class="img-responsive" alt="Image"></td>
<!-- <td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td> -->
</tr>
<tr>
<td style="font-weight: 400;" width="131">ACC&nbsp;NO</td>
<td style="font-weight: 400;" width="13">:&nbsp;</td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= $arr->emp_accBank;?>"></td>  
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" width="64">COMPANY</td>
<!-- <td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td> -->
</tr>
<tr>
<td style="font-weight: 400;" width="131">EMP ID</td>
<td style="font-weight: 400;" width="13">:&nbsp;</td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= $arr->emp_id;?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td>&nbsp;</td>
<!-- <td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td> -->
</tr>
<tr>
<td>PAY&nbsp;SLIP&nbsp;FOR</td>
<td>:&nbsp;</td>
<td><?php echo date('M Y'); ?></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<!-- <td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td> -->
</tr>
<tr>
<td style="font-weight: 400;" width="131">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="98">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr class="payslip_border"><td colspan="12" style="text-align: center">PAYSLIP </td></tr>
<tr>
<td style="font-weight: 400;" width="131">DESIGNATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">:</td>
<td style="font-weight: 400;" width="98"><?= $arr->emp_designation;?></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="4" width="197">NSTY&nbsp;WORLDWIDE&nbsp;SDN.&nbsp;BHD</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">:</td>
<td style="font-weight: 400;" width="98">HQ</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="4" width="197">No.&nbsp;139,&nbsp;Tingkat&nbsp;1,&nbsp;Jln&nbsp;Besar&nbsp;Tampin,&nbsp;73000,</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">DATE&nbsp;OF&nbsp;JOINING&nbsp;</td>
<td style="font-weight: 400;" width="13">:</td>
<td style="font-weight: 400;" width="98"><?= $arr->emp_hireDate;?></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="4" width="197">Tampin,&nbsp;Negeri&nbsp;Sembilan&nbsp;Darul&nbsp;Khusus.</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="98">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="4" width="197">H/P:&nbsp;013-6777791&nbsp;/&nbsp;017-6888351</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>

<tr>
<td style="font-weight: 400;" width="131">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="98">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="4" width="197">OFFICE&nbsp;:&nbsp;06-4410519</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
</tr>


<tr class="payslip_border"><td colspan="3" style="text-align: center">INCOME (RM) </td>
<td colspan="4" style="text-align: center">DEDUCTION (RM) </td>
<td colspan="5"> </td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Basic&nbsp;Rate</td>
<td style="font-weight: 400;" width="13">: RM</td>

<td style="font-weight: 400;" width="120">

    <input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $arr->emp_salary, 2, '.', '');?>">
 
</td>
<td style="font-weight: 400;" colspan="2" width="128">Employee&nbsp;SOCSO</td>
<td style="font-weight: 400;" width="13">:- RM</td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $socso, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Allowance</td>
<td style="font-weight: 400;" width="13">: RM</td>
<td style="font-weight: 400;" width="98">

<input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $allowance, 2, '.', ''); ?>">


</td>
<td style="font-weight: 400;" colspan="2" width="128">Employee&nbsp;EPF</td>
<td style="font-weight: 400;" width="13">:- RM</td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $epf, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Overtime&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">: RM </td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $totalOT, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" colspan="2" width="128">Zakat</td>
<td style="font-weight: 400;" width="13">:- RM </td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Allowance&nbsp;Trip&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">: RM</td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="0.00"></td>
<td style="font-weight: 400;" colspan="2" width="128">Advance</td>
<td style="font-weight: 400;" width="13">:- RM </td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $advance, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Allowance&nbsp;Market&nbsp;</td>
<td style="font-weight: 400;" width="13">: RM</td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" value=""></td>
<td style="font-weight: 400;" colspan="2" width="128">Loan</td>
<td style="font-weight: 400;" width="13">:- RM </td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0" value=""></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Allowance Night</td>
<td style="font-weight: 400;" width="13">: RM </td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $nightAllowance, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" colspan="2" width="128">ASB</td>
<td style="font-weight: 400;" width="13">:- RM </td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0" value=""></td>
<td style="font-weight: 400;" colspan="4" width="197" align="center">&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Special&nbsp;Allowance&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">: RM</td>
<td style="font-weight: 400;" width="98"><input type="text" id="name" name="name" class="w3-input w3-border-0" value=""></td>
<td style="font-weight: 400;" colspan="2" width="128">Unpaid&nbsp;Leave</td>
<td style="font-weight: 400;" width="13">:- RM </td>
<td style="font-weight: 400;" width="101"><input type="text" id="name" name="name" class="w3-input w3-border-0" value=""></td>
<td style="font-weight: 400;" colspan="4" width="197" align="center">(Check&nbsp;By)</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<!-- <tr>
<td style="font-weight: 400;" width="131">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="98">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr> -->
<tr class="firstLine">
<td style="font-weight: 400;" width="131">GROSS&nbsp;PAY&nbsp;</td>
<td style="font-weight: 400;" width="13">: RM</td>
<td style="font-weight: 400;" width="98">&nbsp;(<?= number_format((float) $gross_pay, 2, '.', ''); ?>)</td>
<td style="font-weight: 400;" colspan="2" width="128">SUB-TOTAL&nbsp;</td>
<td style="font-weight: 400;" width="13">:- RM</td>
<td style="font-weight: 400;" width="101">&nbsp;<?= number_format((float) $sub_total, 2, '.', ''); ?></td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="64">NET&nbsp;PAY&nbsp;</td>
<td style="font-weight: 400;" width="13">: RM</td>
<td style="font-weight: 400;" width="127" colspan="2">&nbsp;<?= number_format((float) $net_pay, 2, '.', ''); ?></td>

</tr>

<tr>
<td style="font-weight: 400;" width="131">BALANCE&nbsp;LEAVE</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="98">Day</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="2" width="128">Employee&nbsp;SOCSO</td>
<td style="font-weight: 400;" width="11">:</td>
<td style="font-weight: 400;" width="64"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $socso, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">Annual&nbsp;Leave&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">:</td>
<td style="font-weight: 400;" width="98">/</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" colspan="2" width="128">Employee&nbsp;EPF</td>
<td style="font-weight: 400;" width="11">:</td>
<td style="font-weight: 400;" width="64"><input type="text" id="name" name="name" class="w3-input w3-border-0" required value="<?= number_format((float) $epf, 2, '.', ''); ?>"></td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">ML&nbsp;Medical&nbsp;Leave&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">:</td>
<td style="font-weight: 400;" width="98">/</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>
<tr>
<td style="font-weight: 400;" width="131">HL&nbsp;Hospital&nbsp;Leave&nbsp;&nbsp;</td>
<td style="font-weight: 400;" width="13">:</td>
<td style="font-weight: 400;" width="98">/</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="62">&nbsp;</td>
<td style="font-weight: 400;" width="13">&nbsp;</td>
<td style="font-weight: 400;" width="101">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="58">&nbsp;</td>
<td style="font-weight: 400;" width="11">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
<td style="font-weight: 400;" width="64">&nbsp;</td>
</tr>

</tbody>
</table>
  </page>
<script src="<?= base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
<script>

    
   //window.print();

  
  </script>
</body>
</html>
