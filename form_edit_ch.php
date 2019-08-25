<?php
// Start the session
session_start();

require_once('site_condb.php');
$idv=$_REQUEST["id"];

$datee=$_REQUEST["date"];
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

  <!-- <nav class="navbar navbar-expand-md  bg-primary navbar-dark">
    <a class="navbar-brand" href="#">Sitesystem</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="http://sitesystemsonline.com">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CHILLER DAILY
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="site_formmachine.php">insert Chiller daily</a>
            <a class="dropdown-item" href="site_viewmachine.php">View Chiller daily</a>
        </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           CHILLER INSPECTION 1
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ch_form.php">insert inspection</a>
          <a class="dropdown-item" href="mt_ch_view.php">view inspection </a>

          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           CHILLER INSPECTION 2
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ch2_form.php">insert inspection</a>
          <a class="dropdown-item" href="ch2_view.php">view inspection </a>
            </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Visy 1-3
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="visy1_3_form.php">insert Visy 1-3</a>
          <a class="dropdown-item" href="visy1_3_view.php">view Visy 1-3 </a>
            </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Visy 4-5
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="visy4_5_form.php">insert Visy 4-5</a>
          <a class="dropdown-item" href="visy4_5_view.php">view Visy 4-5 </a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Visy 6-7
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="visy6_7_form.php">insert Visy 6-7</a>
          <a class="dropdown-item" href="visy6_7_view.php">view Visy 6-7 </a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           AHU 1-9
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="AHU1_9_form.php">insert AHU 1-9</a>
          <a class="dropdown-item" href="AHU1_9_view.php">view AHU 1-9 </a>
            </div>
        </li>

      </ul>
    </div>
  </nav> -->
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
<?php
  //$id=$_SESSION["idvs1_3"];
  $_SESSION["idv"]=$_REQUEST["id"];
  $date = new DateTime();
  $n_date = $date->format('d-m-Y');
  $sql1 = "SELECT * FROM mt_ch where id='$idv'";
  $result1 = $conn->query($sql1);

  $sql2 = "SELECT * FROM Question where groupq='MT_CH'";
  $result2 = $conn->query($sql2);



$num=1;
?>
<?php


if ($result1->num_rows > 0) {
    // output data of each row
    $num=1;
$row1 = $result1->fetch_assoc();
?>

<form class="form" id="myform1 " name="form1" method="post" action="edit_ch.php" >
<div class="form-group row ">
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
      <input type="text" class="form-control" value="<?php $str='as'.$num; echo($row1[$str]); ?>" name="input_as<?=$num;?>" id="input_as<?=$num;?>"
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
    <input type="hidden" name="date" value="<?php echo($datee); ?>">

         <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary pl-5 pr-5">SEND DATA</button>
    </div>
</div>
</form>


</div>
<?php
  }

 ?>


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
