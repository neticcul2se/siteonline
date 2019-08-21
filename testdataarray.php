<?php
require_once 'condb.php';

$data = array();
$sql2 = "SELECT * FROM Question where groupq='visy1_3'";
$result2 = $conn->query($sql2);
$num=1;
$users = $result2->fetch_all(MYSQLI_ASSOC); //faster 

//print_r($users[1]);
foreach($users as $u) {
    echo $u["STANDARD_A"]."<br>";
}


?>