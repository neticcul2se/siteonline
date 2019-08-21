<?php
// Start the session
session_start();

require_once('site_condb.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
      <!-- Bootstrap CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style media="screen">

    @media screen and (max-width: 470px) {
    body {
      margin: 0;
      padding-top: 0px !important;
          font: 8pt "Tahoma";
        padding-left: 10px;
        padding-right: 10px;

      }
      .inmachine{

        text-align: center;

      }
      .Chiller{
                font: 12pt "Tahoma";
      }
    }
    </style>
</head>
<body>
  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php
  require_once('menu.php');
   ?>
  <br>
<div class="container ">
<!-- form input -->
<!-- Default form contact -->

<h3 class="text-center pt-2 pb-2 bg-light  col-sm-12 Chiller">MEKTEC WATER COOLED WATER CHILLER INSPECTION SHEET </h3>
<hr>
<br>


<form class="form" id="myform1 " name="form1" method="post" action="insertmt_ch.php" >

<div class="form-group row ">
<div class="col-sm-4 inmachine"> <label for="dateselect" class="col-form-label " ><strong>Select date </strong></label> </div>
  <div class="col-sm-4 inmachine"> <input class="inmachine" data-date-format="dd/mm/yyyy" id="datepicker" name="datepicker1"> </div>
 </div>

<?php


$sql = "SELECT * FROM Question where groupq='MT_CH'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $num=1;
    while($row = $result->fetch_assoc()) {

      ///  echo "id: " . $row["id"]. " - Machine: " . $row["Machine"]. "<br>";


 ?>
 <div class="form-group row ">
    <label for="input_as<?=$num;?>" class="col-sm-9 col-form-label "><b><?php echo($num.".".$row['Question']); ?></b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as<?=$num;?>" id="input_as<?=$num;?>"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<?php
$num=$num+1;
    }
  }

 ?>




<div class="form-group row  ">

    <div class="col text-center ">
         <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary pl-5 pr-5">SEND DATA</button>
    </div>
</div>
</form>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script>

</body>
</html>
