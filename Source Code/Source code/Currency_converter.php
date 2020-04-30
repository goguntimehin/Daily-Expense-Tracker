<?php
include_once("functions.php");
if(isset($_POST['convert'])) {
$from_convert = ($_POST['from_convert']);
$to_convert = ($_POST['to_convert']);
$amount = ($_POST['amount']);
if($from_convert == $to_convert) {
$data = array('error' => '1');
echo json_encode( $data );
exit;
}
$converted_currency=currencyConverter($from_convert, $to_convert, $amount);
echo $converted_currency;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Expense Tracker || Currency Converter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


    <!-- <title></title> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="style.css">
    <script src="my.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  </head>
  <body>


    <?php include_once('includes/header.php');?>
    <?php include_once('includes/sidebar.php');?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="#">
            <em class="fa fa-home"></em>
          </a></li>
          <li class="active">Currency Converter</li>
        </ol>
      </div><!--/.row-->


      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">Currency Converter</div>
            <div class="panel-body">

              <div class="col-md-12">
                <!-- <p style="font-size:16px; color:red" align="center"> <?php if($converted_currency){
                  echo "$converted_currency";
                }  ?> </p> -->




                <!-- <div class="container"> -->
                  <!-- <div class="jumbotron"> -->
                    <form role="form"  method="post" action="" id="currency-form">
                      <div class="form-group">
                        <label>from</label>
                        <input name="from_convert" Class="form-control">
                      </div>
                      <div class="form-group">
                        <label>to</label>
                        <input name="to_convert" Class="form-control">
                      </div>
                      <div class="form-group">
                        <label>amount</label>
                        <input type="text" name="amount" Class="form-control" id="amount" >
                      </div>
                      <input type="submit" name="convert" id="convert" class="btn btn-primary" value="convert">
                    </form>
                  </div>
                  <center><?php include_once('includes/footer.php');?></center>
                <!-- </div> -->
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
