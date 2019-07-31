/<?php
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

<h3 class="text-center pt-2 pb-2 bg-light  col-sm-12 Chiller">VISY CHILLER 6-7 </h3>
<hr>
<br>


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
<form class="form" id="myform1 " name="form1" method="post" action="insertvisy6_7.php" >
  <div class="form-group row ">
     <label for="select_Machine" class="col-sm-6 col-form-label inmachine" ><b>Select visy * </b></label>
     <div class="col-sm-4 inmachine ">
        <select class="custom-Machine required" name="select_visy" id="select_visy" required>
         <option value="">Select visy</option>
         <option value="6">6</option>
         <option value="7">7</option>

       </select>
       <div class="invalid-feedback">
         Select visy
       </div>
     </div>


  </div><br>
<?php


$sql = "SELECT * FROM Question where groupq='visy6_7'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $num=1;

    while($row = $result->fetch_assoc()) {

      ///  echo "id: " . $row["id"]. " - Machine: " . $row["Machine"]. "<br>";


 ?>





             <tr>
             <td data-title="Inspection Item"> <?php echo($num.".".$row['Question'] ); ?></td>
             <td data-title="Tool / Method"><?php echo($row['Method'] ); ?> </td>
             <td data-title="STANDARD A"><?php echo($row['STANDARD_A'] ); ?> </td>
             <td data-title="STANDARD B"><?php echo($row['STANDARD_B'] ); ?> </td>
             <td data-title="A"><input type="text" class="form-control" name="input_as<?=$num;?>" id="input_as<?=$num;?>"
             autocomplete="off" value="" placeholder="answer A"></td>
             <td data-title="Bี">  <input type="text" class="form-control" name="input2_as<?=$num;?>" id="input2_as<?=$num;?>"
               autocomplete="off" value="" placeholder="answer B"></td>
           </tr>






<?php
$num=$num+1;
    }
  }

 ?>


 <tr>
   <td > <div class="desktop"> Inspector</div>  </td>
   <td colspan="5"  data-title="Inspector" >

           <input type="text" class="form-control " name="inspector" id="inspector"
   autocomplete="off" value="" placeholder="Inspector" ></td>

 </td>
 </tr>


    </tbody>


    </table>

 <br />
    <div class="form-group row  desktop">

        <div class="col text-center ">
             <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary pl-5 pr-5">SEND DATA</button>
        </div>
    </div>

    <div class="form-group row mobile" >
            <div class="col" >
                 <button style="width:100%; height:100%" type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary">SEND DATA</button>
            </div>
             </div>
 </form>
 </div>
 </div>



</body>
</html>
