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


$inspector = mysqli_real_escape_string($conn, $_REQUEST['inspector']);
echo $inspector;
echo $_SESSION["idv"];
$id=$_SESSION["idv"];
$date = new DateTime();
$n_date = mysqli_real_escape_string($conn, $_REQUEST['date']);

$sql = "UPDATE AHU1_9 SET 
as1='$as1', 
as2='$as2',
as3='$as3',
as4='$as4',
as5='$as5',
as6='$as6',
as7='$as7',
as8='$as8',
as9='$as9',
as10='$as10',
as11='$as11', 
as12='$as12',
as13='$as13',
as14='$as14',
as15='$as15',
as16='$as16',
as17='$as17',
as18='$as18',
as19='$as19',
as20='$as20',
as21='$as21', 
as22='$as22',
as23='$as23',
as24='$as24',
as25='$as25',
as26='$as26',
as27='$as27',
Inspector='$inspector',
type='$visy'
WHERE id = '$id'";


$conn->query($sql);

header("location: AHU1_9_view.php?datepicker1=$n_date" );
exit(0);

?>