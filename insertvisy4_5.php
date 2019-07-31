<?php
session_start();
require_once('condb.php');

$visy = mysqli_real_escape_string($conn, $_REQUEST['select_visy']);
$as1 = mysqli_real_escape_string($conn, $_REQUEST['input_as1'].",". $_REQUEST['input2_as1']);
$as2 = mysqli_real_escape_string($conn, $_REQUEST['input_as2'].",". $_REQUEST['input2_as2']);
$as3 = mysqli_real_escape_string($conn, $_REQUEST['input_as3'].",". $_REQUEST['input2_as3']);
$as4= mysqli_real_escape_string($conn, $_REQUEST['input_as4'].",". $_REQUEST['input2_as4']);
$as5 = mysqli_real_escape_string($conn, $_REQUEST['input_as5'].",". $_REQUEST['input2_as5']);
$as6 = mysqli_real_escape_string($conn, $_REQUEST['input_as6'].",". $_REQUEST['input2_as6']);
$as7 = mysqli_real_escape_string($conn, $_REQUEST['input_as7'].",". $_REQUEST['input2_as7']);
$as8 = mysqli_real_escape_string($conn, $_REQUEST['input_as8'].",". $_REQUEST['input2_as8']);
$as9 = mysqli_real_escape_string($conn, $_REQUEST['input_as9'].",". $_REQUEST['input2_as9']);
$as10 = mysqli_real_escape_string($conn, $_REQUEST['input_as10'].",". $_REQUEST['input2_as10']);
$as11 = mysqli_real_escape_string($conn, $_REQUEST['input_as11'].",". $_REQUEST['input2_as11']);
$as12 = mysqli_real_escape_string($conn, $_REQUEST['input_as12'].",". $_REQUEST['input2_as12']);
$as13 = mysqli_real_escape_string($conn, $_REQUEST['input_as13'].",". $_REQUEST['input2_as13']);
$as14 = mysqli_real_escape_string($conn, $_REQUEST['input_as14'].",". $_REQUEST['input2_as14']);
$as15 = mysqli_real_escape_string($conn, $_REQUEST['input_as15'].",". $_REQUEST['input2_as15']);
$as16 = mysqli_real_escape_string($conn, $_REQUEST['input_as16'].",". $_REQUEST['input2_as16']);
$as17 = mysqli_real_escape_string($conn, $_REQUEST['input_as17'].",". $_REQUEST['input2_as17']);
$as18 = mysqli_real_escape_string($conn, $_REQUEST['input_as18'].",". $_REQUEST['input2_as18']);
$as19 = mysqli_real_escape_string($conn, $_REQUEST['input_as19'].",". $_REQUEST['input2_as19']);
$as20 = mysqli_real_escape_string($conn, $_REQUEST['input_as20'].",". $_REQUEST['input2_as20']);
$as21 = mysqli_real_escape_string($conn, $_REQUEST['input_as21'].",". $_REQUEST['input2_as21']);
$as22 = mysqli_real_escape_string($conn, $_REQUEST['input_as22'].",". $_REQUEST['input2_as22']);
$as23 = mysqli_real_escape_string($conn, $_REQUEST['input_as23'].",". $_REQUEST['input2_as23']);
$as24 = mysqli_real_escape_string($conn, $_REQUEST['input_as24'].",". $_REQUEST['input2_as24']);
$as25 = mysqli_real_escape_string($conn, $_REQUEST['input_as25'].",". $_REQUEST['input2_as25']);
$as26 = mysqli_real_escape_string($conn, $_REQUEST['input_as26'].",". $_REQUEST['input2_as26']);
$as27 = mysqli_real_escape_string($conn, $_REQUEST['input_as27'].",". $_REQUEST['input2_as27']);
$as28 = mysqli_real_escape_string($conn, $_REQUEST['input_as28'].",". $_REQUEST['input2_as28']);
$as29 = mysqli_real_escape_string($conn, $_REQUEST['input_as29'].",". $_REQUEST['input2_as29']);
$as30 = mysqli_real_escape_string($conn, $_REQUEST['input_as30'].",". $_REQUEST['input2_as30']);
$as31 = mysqli_real_escape_string($conn, $_REQUEST['input_as31'].",". $_REQUEST['input2_as31']);
$as32 = mysqli_real_escape_string($conn, $_REQUEST['input_as32'].",". $_REQUEST['input2_as32']);
$as33 = mysqli_real_escape_string($conn, $_REQUEST['input_as33'].",". $_REQUEST['input2_as33']);
$as34 = mysqli_real_escape_string($conn, $_REQUEST['input_as34'].",". $_REQUEST['input2_as34']);
$as35 = mysqli_real_escape_string($conn, $_REQUEST['input_as35'].",". $_REQUEST['input2_as35']);
$as36 = mysqli_real_escape_string($conn, $_REQUEST['input_as36'].",". $_REQUEST['input2_as36']);
$as37 = mysqli_real_escape_string($conn, $_REQUEST['input_as37'].",". $_REQUEST['input2_as37']);
$as38 = mysqli_real_escape_string($conn, $_REQUEST['input_as38'].",". $_REQUEST['input2_as38']);

$inspector = mysqli_real_escape_string($conn, $_REQUEST['inspector']);


$date = new DateTime();
$n_date = $date->format('d/m/Y');

$sql = "INSERT INTO visy4_5 ( as1, as2, as3, as4, as5, as6, as7, as8, as9 , as10
, as11, as12, as13, as14, as15, as16, as17, as18, as19 , as20
, as21, as22, as23, as24, as25, as26, as27, as28, as29 , as30
, as31, as32, as33, as34, as35, as36, as37, as38,inspector,type,addtime)
VALUES ('$as1', '$as2', '$as3', '$as4', '$as5', '$as6', '$as7', '$as8', '$as9' , '$as10'
, '$as11','$as12', '$as13', '$as14', '$as15', '$as16', '$as17', '$as18', '$as19' , '$as20'
, '$as21', '$as22', '$as23', '$as24', '$as25', '$as26', '$as27', '$as28', '$as29' , '$as30' , '$as31'
,'$as32','$as33','$as34','$as35','$as36','$as37','$as38','$inspector','$visy','$n_date')";


if ($conn->query($sql) === TRUE) {

  $sqls = "SELECT max(id) as id FROM visy4_5";
  $results = $conn->query($sqls)or die(mysql_error());

  if ($results->num_rows > 0) {
      // output data of each row

      while($rows = $results->fetch_assoc()) {
            $_SESSION["idvs4_5"]=$rows["id"];

      }
    }else {
      echo "Error: " . $sqls . "<br>" . $conn->error;
    }


  header( "location: formviewvisy4_5.php" );
      exit(0);
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
