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
<h4 class="text-center col-sm-12 showhead">Chiller daily inspection </h4>
<hr class="showhead"/>
<div class="row">
<div class="col-sm-9">
 <form class="no-print form" id="myform2  " name="form2" method="get" action="site_viewmachine.php" >
   <div class="form-group row ">
  <div class="col-sm-4 inmachine"> <label for="dateselect" class=" col-form-label " >Select date </label> </div>
  <div class="col-sm-4 inmachine"> <input class="inmachine" data-date-format="dd/mm/yyyy" id="datepicker" name="datepicker1"> </div>
  <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary col-sm-4  ">View data</button>

  </div>
</form>
</div>



<div class="col-sm-3">
  <form class="no-print form" id="myform3  " name="form2" method="get" action="form_edit_site.php">
    
<input type="hidden" name="date" value="<?php  echo ($selectdate=$_REQUEST["datepicker1"]);?>">
 <?php 
  $selectdate=$_REQUEST["datepicker1"];
  if(isset($selectdate)){
  $sql = "SELECT * FROM machine where addtime='$selectdate'";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    $_SESSION["idv"] =$row['id'];
  }
  $idv= $_SESSION["idv"];
  }
  ?>
  <input type="hidden" name="id" value="<?php echo($idv);?>">

  <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary col-sm-4 ">edit</button>
</form>
  </div>
</div>


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
 <div class="page">
    <div class="subpage">
<?php

$selectdate=$_REQUEST["datepicker1"];
if(isset($selectdate)){

$sql = "SELECT * FROM machine where addtime='$selectdate'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>

       <h4 class="text-center col-sm-12 myhead">Chiller daily inspection </h4>
       <hr class="hrshow">

     <hr class="no-print">


    <?php
    $num=0;
    while($row = $result->fetch_assoc()) {
      $num=$num+1;
      ///  echo "id: " . $row["id"]. " - Machine: " . $row["Machine"]. "<br>";


 ?>


 <br />


<h4 class="no-print bg-light text-dark p-2 Chiller" style="text-align:center">Results Machine <?= $num; ?> </h4>
  <div class="form-group row mytable " >
   <table class="table table-bordered">
       <tbody >
           <tr >
             <th >Machine Number :</th>
               <td class="text-left" ><?= $row["Machine"]; ?> </td>
           </tr>

           <tr>


             <th>Chilled waterset point (45-50 f ) :</th>
               <td> <?= $row["as1"]; ?></td>
           </tr>


           <tr>
             <th>Active current limit set point (80-100 %) :</th>
               <td> <?= $row["as2"]; ?></td>
           </tr>
           <tr>
             <th>Evaporator entering water temp (45-65 F) :</th>
               <td> <?= $row["as3"]; ?></td>
           </tr>
           <tr>
             <th>Evaporator leaving water temp (40-60 F) :</th>
               <td> <?= $row["as4"]; ?></td>
           </tr>
           <tr>
             <th>Saturated evaporator Rfgt temp (40-60 F) :</th>
               <td> <?= $row["as5"]; ?></td>
           </tr>
           <tr>
             <th>Evaporator Rfgt Pressure (40-50 PSIG) :</th>
               <td> <?= $row["as6"]; ?></td>
           </tr>
           <tr>
             <th>Evaporator Rfgt Pressure (40-50 PSIG) :</th>
               <td> <?= $row["as7"]; ?></td>
           </tr>


           <tr>
             <th>Condenser entering water temp (80-95 F) :</th>
               <td> <?= $row["as8"]; ?></td>
           </tr>
           <tr>
             <th>Condenser leaving water temp(85-115 F) :</th>
               <td> <?= $row["as9"]; ?></td>
           </tr>
           <tr>
             <th>Saturated condenser temp (85-100 F) :</th>
               <td> <?= $row["as10"]; ?></td>
           </tr>
           <tr>
             <th>Condenser Rfgt pressure (100-190 F) :</th>
               <td> <?= $row["as11"]; ?></td>
           </tr>
           <tr>
             <th>Condenser approach temp (1.5-5 F) :</th>
               <td> <?= $row["as12"]; ?></td>
           </tr>
           <tr>
             <th>Compressor step start :</th>
               <td> <?= $row["as13"]; ?></td>
           </tr>
           <tr>
             <th>Compressor running time :</th>
               <td> <?= $row["as14"]; ?></td>
           </tr>
           <tr>
             <th>Oil tank temp (>120 F) :</th>
               <td> <?= $row["as15"]; ?></td>
           </tr>
           <tr>
             <th>Interdride vane position (0-100%) :</th>
               <td> <?= $row["as16"]; ?></td>
           </tr>
           <tr>
             <th>Interdride vane Steps :</th>
               <td> <?= $row["as17"]; ?></td>
           </tr>
           <tr>
             <th>Compressor L1 (%RLA<100) :</th>
               <td> <?= $row["as18"]; ?></td>
           </tr>
           <tr>
             <th>Compressor L2 (%RLA<100) :</th>
               <td> <?= $row["as19"]; ?></td>
           </tr>
           <tr>
             <th>Compressor L3 (%RLA<100) :</th>
               <td> <?= $row["as20"]; ?></td>
           </tr>
           <tr>
             <th>Compressor line current A (<861 Amp) :</th>
               <td> <?= $row["as21"]; ?></td>
           </tr>
           <tr>
             <th>Compressor line current B (<861 Amp) :</th>
               <td><?= $row["as22"]; ?></td>
           </tr>
           <tr>
             <th>Compressor line current C (<861 Amp) :</th>
               <td><?= $row["as23"]; ?></td>
           </tr>
           <tr>
             <th>Compressor line Voltage AB (>380 V) :</th>
               <td><?= $row["as24"]; ?></td>
           </tr>
           <tr>
             <th>Compressor line Voltage BC (>380 V) :</th>
               <td><?= $row["as25"]; ?></td>
           </tr>
           <tr>
             <th>Compressor line Voltage CA (>380 V) :</th>
               <td><?= $row["as26"]; ?></td>
           </tr>
           <tr>
             <th>Winding temperature W1 (<140 F) :</th>
               <td><?= $row["as27"]; ?></td>
           </tr>
           <tr>
             <th>Winding temperature W2 (<140 F) :</th>
               <td><?= $row["as28"]; ?></td>
           </tr>
           <tr>
             <th>Winding temperature W3 (<140 F) :</th>
               <td><?= $row["as29"]; ?></td>
           </tr>
           <tr>
             <th>Ambient ( F / %RH) : </th>
               <td><?= $row["as30"]; ?></td>
           </tr>
           <tr>
             <th>Inspection by : </th>
               <td><?= $row["as31"]; ?></td>
           </tr>
       </tbody>
   </table>
 </div>

 <div style="page-break-after: always"></div>

<?php

}
} else {
  ?>
  <h3 style="text-align:center" class="Chiller">No Results </h3>

  <?php
}
}

 ?>
</div>
</div>
</div>


</body>
</html>
