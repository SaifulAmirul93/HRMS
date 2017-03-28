<!DOCTYPE html>
<html>
<head>

<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: black;
    background-color: gainsboro;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}

table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}

th {
    background-color: #4CAF50;
    color: white;
}

</style>

</head>
<body>

<div class="container">

<header>
   <h1>Payroll</h1>
</header>

<nav>
  <ul>
    <li><a href="#">Add Payroll</a></li>
    <li><a href="#">List Payroll</a></li>

  </ul>
</nav>

<article>

  <form>
    <div class="container">
      <h6></h6>

      <div class="form-group row">
        <div class = "col-md-5">
          <label for="name">NAME:</label>
        </div>
      <div class = "col-md-7">
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
    </div>

      <div class="form-group row">
        <div class = "col-md-5">
          <label for="acc">ACCOUNT NO:</label>
        </div>
      <div class = "col-md-7">
        <input type="text" class="form-control" name="acc" placeholder="Enter account number">
      </div>
    </div>

      <div class="form-group row">
        <div class = "col-md-5">
          <label for="month">PAYSLIP FOR:</label>
        </div>
        <div class = "col-md-7">
          <input type="text" class="form-control" name="month" placeholder="">
        </div>
      </div>

      <div class="form-group row">
        <div class = "col-md-5">
          <label for="designation">DESIGNATION:</label>
        </div>
        <div class = "col-md-7">
          <input type="text" class="form-control" name="designation" placeholder="">
      </div>
      </div>

      <div class="form-group row">
        <div class = "col-md-5">
          <label for="location">LOCATION:</label>
        </div>
        <div class = "col-md-7">
          <select class="form-control" name="name">
            <option value="hq">HQ</option>
            <option value="lab">LAB</option>
            <option value="warehouse">WAREHOUSE</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class = "col-md-5">
        <label for="date">DATE OF JOINING:</label>
      </div>
        <div class = "col-md-7">
        <input type="text" class="form-control" name="join_date" placeholder="">
      </div>
      </div>

  </div>

<h6></h6>

    <style>
    .Input
    {
      padding: 10px 5px 15px 14px;
      background-color: #f2f2f2;
      border: 1px solid #c8c8c8;
      width: 93%;
      color: #838383;
      font-size: 1.5rem;
      border-radius: 20px;
    }

    form label {
	     margin: 0 0 10px 30px;
     }

     .income
     {
       background-color: #98FB98;
       text-align: center;
       padding-top: 1%;
       line-height: 1.2;
       margin-bottom: 2%;
       font-size: 22px;
       padding: 10px 10px;
       border-radius: 0px;
     }

     .deduction
     {
       background-color: #FFB6C1;
       text-align: center;
       padding-top: 1%;
       line-height: 1.2;
       margin-bottom: 2%;
       font-size: 22px;
       padding: 10px 10px;
       border-radius: 0px;
     }
     </style>

    <form>
    <div class = "row">
      <div class = "col-md-6">
        <div class = "row">
          <div class = "income">
            <font color = "#000000">
              Income (RM)
            </font>
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="name">BASIC RATE:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="basic" id="basic" value="" placeholder="Enter basic rate">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="allowance">ALLOWANCE:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="allowance" id="allowance" value="" placeholder="Enter allowance">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="ot">OVERTIME:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="ot" id="ot" value="" placeholder="Enter overtime">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="trip">ALLOWANCE TRIP:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="trip" id="trip" value="" placeholder="Enter allowance trip">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="market">ALLOWANCE MARKET:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="market" id="market" value="" placeholder="Enter allowance market">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="last">LAST MONTH SALARY:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="last" id="last_month" value="" placeholder="Enter last month salary">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="special">SPECIAL ALLOWANCE:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="special" id="allowance" value="" placeholder="Enter special allowance">
          </div>
        </div>
      </div>

      <div class = "col-md-6">
        <div class = "row">
          <div class = "deduction">
            <font color = "#000000">
              Deduction (RM)
            </font>
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="socso">SOCSO:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="socso" id="socso" value="" placeholder="Enter socso">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="epf">EPF:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="epf" id="epf" value="" placeholder="Enter epf">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="zakat">ZAKAT:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="zakat" id="zakat" value="" placeholder="Enter zakat">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="advance">ADVANCE:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="advance" id="advance" value="" placeholder="Enter advance">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="loan">LOAN:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="loan" id="loan" value="" placeholder="Enter loan">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="asb">ASB:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="asb" id="asb" value="" placeholder="Enter asb">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-5">
            <label for="unpaid">UNPAID LEAVE:</label>
          </div>
          <div class = "col-md-7">
            <input type="text" class="form-control" name="unpaid" id="unpaid" value="" placeholder="Enter unpaid leave">
          </div>
        </div>
      </div>

<style>
th {
    background-color: #DCDCDC;
    color: black;
    text-align:center;
}
</style>

<table>
    <tr>
      <th>Gross Pay</th>
      <th>Deduction</th>
      <th>Net Pay</th>
    </tr>

    <tr>
      <td><span id = "result" class="sales-val"></span></td>
      <td></td>
      <td></td>
    </tr>
</table>

<h6></h6>

<div class = "row">
  <div class = "col-md-12">
    <button type="Add" name = "submit" class="btn btn-default" onClick="Gross_Pay()">Add</button>
  </div>
</div>

  </form>

</article>
</div>

<script type="text/javascript">
function Gross_Pay() {
        // basic_rate = document.getElementById("basic").value;
        // allowance = document.getElementById("allowance").value;
        // document.getElementById("result").innerHTML = basic_rate + allowance;

        var basic_rate = document.getElementById('basic').value;
        var allowance = document.getElementById('allowance').value;
        document.getElementById('result').value = parseInt(basic_rate)*parseInt(allowance);
}
</script>

<!-- <?php
  if( isset( $_GET['submit'] ) )
  {
    $asb = $_GET['asb'];
    $asb = $asb + 5;
  }
 ?>

 <label>Salary: value= </label><?php echo $asb; ?> -->

</body>
</html>
