
<?php
// Start the session
session_start();

require_once('condb.php');


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


.desktop{
  display: block;
}
.mobile{
  display: none;
}

         *{margin:0;padding:0;}

        .tableresponsive{


        margin:15px auto;
        }

        .tabledata{
        width:100%;
        padding:0;
        margin:0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 13px;

        }
        .tabledata thead tr th{
        background:#e5e5e5;

        text-align: left;
        padding:7px 5px;

        }
        .tabledata tbody tr td{
        padding:7px 5px;
        text-align: left;
        cursor:pointer;
        border-bottom: 1px solid #d6d6d6;
        }

        .tabledataa a{
        display:inline-block;
        border: 1px solid #e5e5e5;
        padding:5px;
        background:#fff;
        -webkit-transition: all .25s ease-out;
        -moz-transition: all .25s ease-out;
        -ms-transition: all .25s ease-out;
        -o-transition: all .25s ease-out;
        transition: all .25s ease-out;
        }
        .tabledataa a:hover{
        background:#e5e5e5;

        }
        .tabledataa tbody tr:hover td{
        background:#7f7f7f;

        }






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
      .col-form-label{
        padding: 0;
        margin: 0;
        float: left;

      }


      .tableresponsive table,
      .tableresponsive thead,
      .tableresponsive tbody,
      .tableresponsive th,
      .tableresponsive td,
      .tableresponsive tr
      {

         display:block ;

      }
  .tabledata tbody tr td{
    text-align: left;
  }
      .tableresponsive thead tr {
       position: absolute ;
       top: -9999px;
       left: -9999px;
      }
      .tableresponsive tr { border: 1px solid #ccc; }

      .tableresponsive td {

          border: none;
          border-bottom: 1px solid #eee;
          position: relative;
          padding-left: 45% !important;
          white-space: normal;
          text-align:left;


       }

       .tableresponsive td:before {

          position: absolute;
          top: 6px;
          left: 6px;
          width: 40%;
          padding-right: 10px;

          white-space: nowrap;
          text-align:left;
          font-weight: bold;
           border-right: 1px solid #d6d6d6;
        }


       .tableresponsive td:before { content: attr(data-title); }


       .desktop{
         display: none;
       }
       .mobile{
         display: block;
       }


    }




    </style>

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
</head>
<body>
    

  <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <?php
  require_once('menu.php');
   ?>
  <br>
<div class="container ">
<!-- form input -->
<!-- Default form contact -->

<h3 class="text-center pt-2 pb-2 bg-light  col-sm-12 Chiller">Export Data Visy 1-3  </h3>


    <form class="form" id="myform1 " name="form1" method="post" action="excel_visy1_3.php" >


   

    <div class="form-group row ">

<label for="select_Machine" class="col-sm-6 col-form-label inmachine" ><b>Select visy 1 - 3  </b></label>
    <div class="col-sm-6 inmachine ">
       <select class="custom-Machine required" name="select_visy" id="select_visy" required>
        <option value="1" checked>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <div class="invalid-feedback">
        Select visy
      </div>
    </div>
</div>


  <div class="row">

  <div class="col-3"> <p><b>Please select Date or Month </b></p> </div>
<div class="col-3"><input  type="radio" name="md" value="date" checked> Date</div>

<div class="col-3"> <input type="radio" name="md" value="month"> Month<br> 
</div>
  </div>

<div id='dates' class="row">
<div class="col-sm-6 inmachine"> <label for="dateselect" class="col-form-label " ><strong>Select date </strong></label> </div>
  <div class="col-sm-6 inmachine"> <input class="inmachine" data-date-format="dd/mm/yyyy" id="datepicker" name="datepicker1"> </div>
 
</div>
  <div id='month' class="form-group row ">
       
       <label for="select_Machine" class="col-sm-6 col-form-label inmachine" ><b>Select month  </b></label>
       <div class="col-sm-4 inmachine ">
       <select class="custom-Machine required" name="select_month" id="select_month" required>
         <option value="01" checked>มกราคม</option>
         <option value="02">กุมภาพันธ์</option>
         <option value="03">มีนาคม</option>    
         <option value="04">เมษายน</option>         
         <option value="05">พฤษภาคม</option>         
         <option value="06">มิถุนายน</option>         
         <option value="07">กรกฎาคม</option>         
         <option value="08">สิงหาคม</option>         
         <option value="09">กันยายน</option>         
         <option value="10">ตุลาคม</option>         
         <option value="11">พฤศจิกายน</option>         
         <option value="12">ธันวาคม</option>         

       </select>
       </div>
  
       
  
    </div>
  
    <div class="row">
        <br>
        <div class="col-sm-6 "></div>
  <div class="col-sm-6 inmachine">
  <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary viewdata">export data</button>
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

    
$('input[type="radio"]').click(function(){
        if($(this).attr("value")=="date"){
            $("#month").hide();
            $("#dates").show();

        }
        if($(this).attr("value")=="month"){
            $("#month").show();
            $("#dates").hide();

        }        
    });
$('input[type="radio"]').trigger('click');
</script>

</body>
</html>