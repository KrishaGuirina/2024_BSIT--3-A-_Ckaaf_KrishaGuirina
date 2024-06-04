<?php
$servername = "localhost";
$username = "root"; // Corrected variable name
$password = "12345";
$database = "ckaaf_db";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

