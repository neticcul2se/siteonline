<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "machinedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE AHU1_9 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
as1 VARCHAR(30) DEFAULT NULL,
as2 VARCHAR(30) DEFAULT NULL,
as3 VARCHAR(30) DEFAULT NULL,
as4 VARCHAR(30) DEFAULT NULL,
as5 VARCHAR(30) DEFAULT NULL,
as6 VARCHAR(30) DEFAULT NULL,
as7 VARCHAR(30) DEFAULT NULL,
as8 VARCHAR(30) DEFAULT NULL,
as9 VARCHAR(30) DEFAULT NULL,
as10 VARCHAR(30) DEFAULT NULL,
as11 VARCHAR(30) DEFAULT NULL,
as12 VARCHAR(30) DEFAULT NULL,
as13 VARCHAR(30) DEFAULT NULL,
as14 VARCHAR(30) DEFAULT NULL,
as15 VARCHAR(30) DEFAULT NULL,
as16 VARCHAR(30) DEFAULT NULL,
as17 VARCHAR(30) DEFAULT NULL,
as18 VARCHAR(30) DEFAULT NULL,
as19 VARCHAR(30) DEFAULT NULL,
as20 VARCHAR(30) DEFAULT NULL,
as21 VARCHAR(30) DEFAULT NULL,
as22 VARCHAR(30) DEFAULT NULL,
as23 VARCHAR(30) DEFAULT NULL,
as24 VARCHAR(30) DEFAULT NULL,
as25 VARCHAR(30) DEFAULT NULL,
as26 VARCHAR(30) DEFAULT NULL,
as27 VARCHAR(30) DEFAULT NULL,
addtime VARCHAR(30) DEFAULT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

?>
