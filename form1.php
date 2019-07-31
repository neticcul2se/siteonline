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
<div class="container ">
<!-- form input -->
<!-- Default form contact -->

<h1 class="text-center pt-2 pb-2 bg-primary text-white col-sm-12 Chiller">Chiller daily inspection </h1>
<hr>
<br>
<script type="text/javascript">
$(function(){
     $("#myform1").on("submit",function(){
         var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
     });
});
</script>

<form class="form" id="myform1 " name="form1" method="post" action="insert1.php" >
  <div class="form-group row ">
     <label for="select_Machine" class="col-sm-4 col-form-label inmachine" ><b>Machine Number * </b></label>
     <div class="col-sm-4 inmachine ">
        <select class="custom-Machine required" name="select_Machine" id="select_Machine" required>
         <option value="">Select Machine</option>
         <option value="PTN-CH-01">PTN-CH-01</option>
         <option value="PTN-CH-02">PTN-CH-02</option>
         <option value="PTN-CH-03">PTN-CH-03</option>
         <option value="PTN-CH-04">PTN-CH-04</option>
       </select>
       <div class="invalid-feedback">
       Plase select machine
       </div>
     </div>


 </div><br>
<hr>
 <h4 class=" text-center Chiller">EVAPORATOR</h4>
<hr>
<div class="form-group row ">

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

    <label for="input_as7" class="col-sm-4 col-form-label "><b>Evaporator approach temp (1.5-5 F)

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as7" id="input_as7"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>
<hr>
 <h4 class=" text-center Chiller">CONDENSER</h4>
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

 <h4 class=" text-center Chiller">COMPRESSOR REPORT

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

 <h4 class=" text-center Chiller">COMPRESSOR MOTOR

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

 <h4 class=" text-center Chiller">Inspection by
</h4>
<hr>
<div class="form-group row">

    <label for="input_as31" class="col-sm-4 col-form-label "><b>Inspection by

 </b></label>
    <div class="col">
      <input type="text" class="form-control" name="input_as31" id="input_as31"
      autocomplete="off" value="" placeholder="Your answer">
    </div>
</div>



<div class="form-group row  ">
  <div class="col-sm-6  text-center ">

  <button class="btn btn-warning btn-block"  type="button" onclick="history.back();">Back</button>
</div>
    <div class="col-sm-6  text-center ">
         <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary btn-block">SEND DATA</button>
    </div>

</form>

</div>
</div>



</body>
</html>
