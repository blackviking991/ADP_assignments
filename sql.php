<?php
$servername = "localhost";
$username = "ishan";
$password = "willy007";
$db = $_POST["db"];
$tb = $_POST["tb"];

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
}
// getting data from HTML file using POST method


// Create database
$sql = "CREATE DATABASE $db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error;
}
mysqli_select_db($conn,$db);
// sql to create table
$sql_table = "CREATE TABLE $tb(".
"id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,".
"name VARCHAR(30) NOT NULL,".
"email VARCHAR(50),".
"contact INT(11),".
"address VARCHAR(200));";

if ($conn->query($sql_table) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
header('Location : ASS_3a.html');
exit();
?>
