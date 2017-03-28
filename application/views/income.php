<?php
  $basic_rate = 3000;
  $days = 26;
  $hours = 8;
  $percent = 1.5;
  $ot_hours = 1;

  $allowance = 200;
  $allowance_trip = 0;
  $allowance_market = 0;
  $last_month_salary = 385;
  $special_allowance = 0;

  $socso = 7.25;
  $epf = 117;
  $zakat = 0;
  $advance = 0;
  $loan = 0;
  $asb = 0;
  $unpaid_leave = 0;

  $gross_pay = $basic_rate + $overtime + $allowance + $allowance_trip + $allowance_market + $last_month_salary + $special_allowance;
  echo "Gaji kasar = ".$gross_pay."<br>";

  $deduction = $socso + $epf + $zakat + $advance + $loan + $asb + $unpaid_leave;
  echo "Potongan gaji = ".$deduction."<br>";

  $net_pay = $gross_pay - $deduction;
  echo "Gaji bersih = ".$net_pay."<br>";

  $overtime = $basic_rate / $days / $hours * $percent * $ot_hours;
  echo "Gaji overtime = ".$overtime."<br>";

  $overtime_public = $overtime * 3;
  echo "Gaji overtime public holiday = ".$overtime_public."<br>";

  $overtime_weekend = $overtime * 2;
  echo "Gaji overtime weekend = ".$overtime_weekend;

  function Gross_Pay(){

  }


?>
