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
  body{

      font: 12pt "Tahoma";


  }
th{
  width: auto !important;
  padding-left: 10px;
}
td{
    padding-left: 10px;
    line-height: 1.5em;
}

.headmt{
  padding-top: 40px;
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



         *{margin:0;padding:0;}

        .tableresponsive{


        margin:15px auto;
        }
            th{
              width: auto !important;
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
        background:#e5e5e5;

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
<h4 class="text-center col-sm-12 showhead">VISY CHILLER 1-3 </h4>
<hr class="showhead"/>

 <form class="no-print form" id="myform2  " name="form2" method="get" action="visy1_3_view.php" >
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


    <h4 class="text-center col-sm-12 myhead">VISY CHILLER 1-3 </h4>
    <hr class="hrshow">

 <hr class="no-print">


    <div class="container page">

    <div class="subpage">

  <?php
  $selectdate=$_REQUEST["datepicker1"];
  if(isset($selectdate)){
  $id=$_SESSION["idvs1_3"];
  $date = new DateTime();
  $n_date = $date->format('d-m-Y');
  $sql = "SELECT * FROM visy1_3 where id=$id";
  $result = $conn->query($sql);

  $sql2 = "SELECT * FROM Question where groupq='visy1_3'";
  $result2 = $conn->query($sql2);



  $num=1;
  ?>
  <div class="tableresponsive all">
  <table class="tabledata">
         <thead>
           <tr>
               <th>Inspection Item</th>
               <th>Tool / Method</th>
               <th>STANDARD</th>
               <th>STANDARD</th>
               <th>A</th>
               <th>B</th>

           </tr>
         </thead>
         <tbody>
  <form class="form" id="myform1 " name="form1" method="post" action="insertvisy1_3.php" >

  <?php


  if ($result->num_rows > 0) {
    // output data of each row
    $num=1;
  $row = $result->fetch_assoc();
    while($row2 = $result2->fetch_assoc()) {

      ///  echo "id: " . $row["id"]. " - Machine: " . $row["Machine"]. "<br>";


  ?>

             <tr>
             <td data-title="
  Inspection Item"> <?php echo($num.".".$row2['Question'] ); ?></td>
             <td data-title="Tool / Method"><?php echo($row2['Method'] ); ?> </td>
             <td data-title="	STANDARD A"><?php echo($row2['STANDARD_A']); ?> </td>
             <td data-title="STANDARD B"><?php echo($row2['STANDARD_B'] ); ?> </td>
             <td data-title="A">   <?php
                 $str='as'.$num;
                 $myArray = explode(',', $row[$str]);
                 $a=$myArray[0];
                 $b=$myArray[1];

               echo($a);  ?>
             </td>
             <td data-title="B">
               <?php

               echo($b);  ?></td>
           </tr>






  <?php
  $num=$num+1;
    }

    ?>


    <tr>
      <td ><div class="desktop"><b>Inspector</b>   </div> </td>

      <td colspan="4"  style="text-align:center" data-title="Inspector"><?php echo($row['Inspector'] ); ?> </td>

    </tr>


    <?php
  }

  ?>


  </form>
   </tbody>


   </table>
  </div>
  <?php

}
   ?>
  </div>
  </div>

  </body>
  </html>
