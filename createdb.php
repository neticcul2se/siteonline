<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE machine (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Machine VARCHAR(30) NOT NULL,
as1 VARCHAR(250),
as2 VARCHAR(250),
as3 VARCHAR(250),
as4 VARCHAR(250),
as5 VARCHAR(250),
as6 VARCHAR(250),
as7 VARCHAR(250),
as8 VARCHAR(250),
as9 VARCHAR(250),
as10 VARCHAR(250),
as11 VARCHAR(250),
as12 VARCHAR(250),
as13 VARCHAR(250),
as14 VARCHAR(250),
as15 VARCHAR(250),
as16 VARCHAR(250),
as17 VARCHAR(250),
as18 VARCHAR(250),
as19 VARCHAR(250),
as20 VARCHAR(250),
as21 VARCHAR(250),
as22 VARCHAR(250),
as23 VARCHAR(250),
as24 VARCHAR(250),
as25 VARCHAR(250),
as26 VARCHAR(250),
as27 VARCHAR(250),
as28 VARCHAR(250),
as29 VARCHAR(250),
as30 VARCHAR(250),
as31 VARCHAR(250)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
