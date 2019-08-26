<?php 

session_start();
require_once('condb.php');
$as1 = mysqli_real_escape_string($conn, $_REQUEST['input_as1']);
$as2 = mysqli_real_escape_string($conn, $_REQUEST['input_as2']);
$as3 = mysqli_real_escape_string($conn, $_REQUEST['input_as3']);
$as4= mysqli_real_escape_string($conn, $_REQUEST['input_as4']);
$as5 = mysqli_real_escape_string($conn, $_REQUEST['input_as5']);
$as6 = mysqli_real_escape_string($conn, $_REQUEST['input_as6']);
$as7 = mysqli_real_escape_string($conn, $_REQUEST['input_as7']);
$as8 = mysqli_real_escape_string($conn, $_REQUEST['input_as8']);
$as9 = mysqli_real_escape_string($conn, $_REQUEST['input_as9']);
$as10 = mysqli_real_escape_string($conn, $_REQUEST['input_as10']);
$as11 = mysqli_real_escape_string($conn, $_REQUEST['input_as11']);
$as12 = mysqli_real_escape_string($conn, $_REQUEST['input_as12']);
$as13 = mysqli_real_escape_string($conn, $_REQUEST['input_as13']);
$as14 = mysqli_real_escape_string($conn, $_REQUEST['input_as14']);
$as15 = mysqli_real_escape_string($conn, $_REQUEST['input_as15']);
$as16 = mysqli_real_escape_string($conn, $_REQUEST['input_as16']);
$as17 = mysqli_real_escape_string($conn, $_REQUEST['input_as17']);
$as18 = mysqli_real_escape_string($conn, $_REQUEST['input_as18']);
$as19 = mysqli_real_escape_string($conn, $_REQUEST['input_as19']);
$as20 = mysqli_real_escape_string($conn, $_REQUEST['input_as20']);
$as21 = mysqli_real_escape_string($conn, $_REQUEST['input_as21']);
$as22 = mysqli_real_escape_string($conn, $_REQUEST['input_as22']);
$as23 = mysqli_real_escape_string($conn, $_REQUEST['input_as23']);
$as24 = mysqli_real_escape_string($conn, $_REQUEST['input_as24']);
$as25 = mysqli_real_escape_string($conn, $_REQUEST['input_as25']);
$as26 = mysqli_real_escape_string($conn, $_REQUEST['input_as26']);
$as27 = mysqli_real_escape_string($conn, $_REQUEST['input_as27']);
$as28 = mysqli_real_escape_string($conn, $_REQUEST['input_as28']);
$as29 = mysqli_real_escape_string($conn, $_REQUEST['input_as29']);
$as30 = mysqli_real_escape_string($conn, $_REQUEST['input_as30']);
$as31 = mysqli_real_escape_string($conn, $_REQUEST['input_as31']);




echo $_SESSION["idv"];
$id=$_SESSION["idv"];
$date = new DateTime();
$n_date = mysqli_real_escape_string($conn, $_REQUEST['date']);

$sql = "UPDATE machine SET 
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
as28='$as28',
as29='$as29',
as30='$as30',
as31='$as31'


WHERE id = '$id'";

echo $sql;
$conn->query($sql);

header("location: site_viewmachine.php?datepicker1=$n_date" );
exit(0);

?>