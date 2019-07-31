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
</head>
<body>

  <?php
require_once('condb.php');


   ?>
  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <?php
  require_once('menu.php');
   ?>
<div class="container page">
<!-- form input -->
<!-- Default form contact -->
<div class="subpage">



<?php
$id=$_SESSION["ids"];
$date = new DateTime();
$n_date = $date->format('d-m-Y');
$sql = "SELECT * FROM Machine where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ///  echo "id: " . $row["id"]. " - Machine: " . $row["Machine"]. "<br>";


 ?>
 <h4 class="text-center col-sm-12 myhead">Chiller daily inspection </h4>
 <hr>
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
 <!-- </div><br>
<hr>
 <h4 class=" text-center">EVAPORATOR</h4>
<hr>
<div class="form-group row">

    <label for="input_as1" class="col-sm-4 col-form-label "><b>Chilled waterset point (45-50 f )</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as1" id="input_as1"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<div class="form-group row">

    <label for="input_as2" class="col-sm-4 col-form-label "><b>Active current limit set point (80-100 %)</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as2" id="input_as2"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as3" class="col-sm-4 col-form-label "><b>Evaporator entering water temp (45-65 F)
</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as3" id="input_as3"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as4" class="col-sm-4 col-form-label "><b>Evaporator leaving water temp (40-60 F) </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as4" id="input_as4"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as5" class="col-sm-4 col-form-label "><b>Saturated evaporator Rfgt temp (40-60 F)
 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as5" id="input_as5"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as6" class="col-sm-4 col-form-label "><b>Evaporator Rfgt Pressure (40-50 PSIG)
 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as6" id="input_as6"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as7" class="col-sm-4 col-form-label "><bEvaporator approach temp (1.5-5 F)

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as7" id="input_as7"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<hr>
 <h4 class=" text-center">CONDENSER</h4>
<hr>

<div class="form-group row">

    <label for="input_as8" class="col-sm-4 col-form-label "><b>Condenser entering water temp (80-95 F)
</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as8" id="input_as8"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<div class="form-group row">

    <label for="input_as9" class="col-sm-4 col-form-label "><b>Condenser leaving water temp(85-115 F)
</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as9" id="input_as9"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as10" class="col-sm-4 col-form-label "><b>Saturated condenser temp (85-100 F)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as10" id="input_as10"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as11" class="col-sm-4 col-form-label "><b>Condenser Rfgt pressure (100-190 F)
</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as11" id="input_as11"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as12" class="col-sm-4 col-form-label "><b>Condenser approach temp (1.5-5 F)

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as12" id="input_as12"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<hr>

 <h4 class=" text-center">COMPRESSOR REPORT

</h4>
<hr>
<div class="form-group row">

    <label for="input_as13" class="col-sm-4 col-form-label "><b>Compressor step start

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as13" id="input_as13"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<div class="form-group row">

    <label for="input_as14" class="col-sm-4 col-form-label "><b>Compressor running time

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as14" id="input_as14"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as15" class="col-sm-4 col-form-label "><b>Oil tank temp (>120 F)


</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as15" id="input_as15"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as16" class="col-sm-4 col-form-label "><b>Interdride vane position (0-100%)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as16" id="input_as16"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as17" class="col-sm-4 col-form-label "><b>Interdride vane Steps


 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as17" id="input_as17"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<hr>

 <h4 class=" text-center">COMPRESSOR MOTOR

</h4>
<hr>
<div class="form-group row">

    <label for="input_as18" class="col-sm-4 col-form-label "><b>Compressor L1 (%RLA<100)


</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as18" id="input_as18"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<div class="form-group row">

    <label for="input_as19" class="col-sm-4 col-form-label "><b>Compressor L2 (%RLA<100)


</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as19" id="input_as19"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as20" class="col-sm-4 col-form-label "><b>Compressor L3 (%RLA<100)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as20" id="input_as20"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as21" class="col-sm-4 col-form-label "><b>Compressor line current A (<861 Amp)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as21" id="input_as21"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as22" class="col-sm-4 col-form-label "><b>Compressor line current B (<861 Amp)

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as22" id="input_as22"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as23" class="col-sm-4 col-form-label "><b>Compressor line current C (<861 Amp)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as23" id="input_as23"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as24" class="col-sm-4 col-form-label "><b>Compressor line Voltage AB (>380 V)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as24" id="input_as24"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as25" class="col-sm-4 col-form-label "><b>Compressor line Voltage BC (>380 V)

</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as25" id="input_as25"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as26" class="col-sm-4 col-form-label "><b>Compressor line Voltage CA (>380 V)
</b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as26" id="input_as26"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>


<div class="form-group row">

    <label for="input_as27" class="col-sm-4 col-form-label "><b>Winding temperature W1 (<140 F)

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as27" id="input_as27"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as28" class="col-sm-4 col-form-label "><b>Winding temperature W2 (<140 F)


 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as28" id="input_as28"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as29" class="col-sm-4 col-form-label "><b>Winding temperature W3 (<140 F)


 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as29" id="input_as29"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>

<div class="form-group row">

    <label for="input_as30" class="col-sm-4 col-form-label "><b>Ambient ( F / %RH)
 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as30" id="input_as30"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>



<hr>

 <h4 class=" text-center">Inspection by
</h4>
<hr>
<div class="form-group row">

    <label for="input_as31" class="col-sm-4 col-form-label "><b>Inspection by

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as31" id="input_as31"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div> -->

<?php
}
} else {
echo "0 results";
}

 ?>
</div>
</div>

</body>
</html>
