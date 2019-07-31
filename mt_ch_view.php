<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="a4.css">
<style>
@media print {
.all{
      margin:0;


}
.headmt{
  padding-top: 50px;
}
}
</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<style media="screen">

@media screen and (max-width: 470px) {
body{

    font: 8pt "Tahoma";
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

  <?php
require_once('site_condb.php');


   ?>
  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/messages/messages.es-es.js" > </script>



  <?php
  require_once('menu.php');
   ?>
    <br>

<div class="container">
<!-- form input -->
<!-- Default form contact -->
<h4 class="text-center col-sm-12 showhead">MEKTEC WATER COOLED WATER CHILLER INSPECTION SHEET </h4>
<hr class="showhead"/>

 <form class="no-print form" id="myform2  " name="form2" method="get" action="mt_ch_view.php" >
   <div class="form-group row ">
  <div class="col-sm-4 inmachine"> <label for="dateselect" class="col-sm-4 col-form-label " >Select date </label> </div>
  <div class="col-sm-4 inmachine"> <input class="inmachine" data-date-format="dd/mm/yyyy" id="datepicker" name="datepicker1"> </div>
  <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary col-sm-4 ">View data</button>

</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script type="text/javascript">
    $('#datepicker').datepicker({
        weekStart: 1,
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
</script>

    <div class="subpage">
<?php

$selectdate=$_REQUEST["datepicker1"];
if(isset($selectdate)){

  $id=$_SESSION["idmt"];
  $date = new DateTime();
  $n_date = $date->format('d-m-Y');
  $sql = "SELECT * FROM mt_ch where addtime='$selectdate'";
  $result = $conn->query($sql);

  $sql2 = "SELECT * FROM Question where groupq='MT_CH'";
  $result2 = $conn->query($sql2);

$num=1;


 ?>




    <h4 class="text-center col-sm-12 myhead">MEKTEC WATER COOLED WATER CHILLER INSPECTION SHEET </h4>
    <hr class="hrshow">

 <hr class="no-print">


    <div class="container page">
    <!-- form input -->
    <!-- Default form contact -->
    <div class="subpage">
      <?php

      if ($result->num_rows > 0) {
          // output data of each row
              // output data of each row
              $num=1;
              $row1 = $result->fetch_assoc();

              while($row2 = $result2->fetch_assoc()) {

                ///  echo "id: " . $row["id"]. " - Machine: " . $row["Machine"]. "<br>";


           ?>
           <div class="form-group row all ">
              <label for="input_as<?=$num;?>" class="col-sm-9 col-form-label"><b><?php echo($num.".".$row2['Question']); ?></b></label>
              <div class="col as">

                              :
                <?php
                  $str='as'.$num;
                echo($row1[$str]);  ?>
              </div>
          </div>

          <?php
          $num=$num+1;

    }
      } else {
      echo "0 results";
      }
    }

       ?>
      </div>
      </div>

      </body>
      </html>
