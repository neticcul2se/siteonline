<?php
// Start the session
session_start();
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

   <br>

<div class="container page">
<!-- form input -->
<!-- Default form contact -->
<div class="subpage">
  <h4 class="text-center col-sm-12 headmt">VISY CHILLER 4-5 </h4>
 
  <hr>
  <?php
  //$id=$_SESSION["idvs1_3"];
  $_SESSION["idv"]=$_REQUEST["id"];
  $date = new DateTime();
  $n_date = $date->format('d-m-Y');
  $sql = "SELECT * FROM visy4_5 where id='$idv'";
  $result = $conn->query($sql);

  $sql2 = "SELECT * FROM Question where groupq='visy4_5'";
  $result2 = $conn->query($sql2);



$num=1;
?>
<?php


if ($result->num_rows > 0) {
    // output data of each row
    $num=1;
$row = $result->fetch_assoc();
?>
<form class="form" id="myform1 " name="form1" method="post" action="edit4_5.php" >

<div class="text-center">
  <H4>Visy:  <select class="custom-Machine required" name="select_visy" id="select_visy" required>
         <option value="">Select visy</option>
         <option value="4" <?php if($row["type"]=="4"){ echo "selected='selected'";} ?> >4</option>
         <option value="5"<?php if($row["type"]=="5"){ echo "selected='selected'";} ?> >5</option>
       
       </select> </H4>
</div>
<div class="tableresponsive">
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




<?php

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

              ?>
                <input name="input_as<?=$num;?>" id="input_as<?=$num;?>" type="text" value="<?php echo($a); ?>">
             </td>
             <td data-title="B">
              
               <input name="input2_as<?=$num;?>" id="input2_as<?=$num;?>" type="text" value="<?php echo($b); ?>">
            </td>




           </tr>







<?php
$num=$num+1;
    }
    ?>
    <tr>
      <td ><div class="desktop"><b>Inspector</b>   </div> </td>

      <td colspan="4"  style="text-align:center" name="inspectors" id="inspector" data-title="Inspector"><input type="text"  name="inspector" value="<?php echo($row['Inspector'] ); ?>"></td>

    </tr>


    <?php
  }

 ?>
<tr>

<td colspan="6"  style="text-align:center" >  
<input type="hidden" name="date" value="<?php echo($datee); ?>">

  <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary col-sm-4 ">save</button>

</td>
</tr>
</form>
   </tbody>


   </table>
</div>
  </div>
  </div>

  </body>
  </html>
