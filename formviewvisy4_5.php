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
  $id=$_SESSION["idvs4_5"];
  $date = new DateTime();
  $n_date = $date->format('d-m-Y');
  $sql = "SELECT * FROM visy4_5 where id=$id";
  $result = $conn->query($sql);

  $sql2 = "SELECT * FROM Question where groupq='visy4_5'";
  $result2 = $conn->query($sql2);



$num=1;
?>
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
}?>


<tr>
  <td ><div class="desktop"><b>Inspector</b>  </div> </td>

  <td colspan="4"  style="text-align:center" data-title="Inspector"><?php echo($row['Inspector'] ); ?> </td>

</tr>

<?php
  }

 ?>



   </tbody>


   </table>
</div>
  </div>
  </div>

  </body>
  </html>
