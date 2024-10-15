<?php
$servername = "localhost"; // or your server address
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "tennisclub"; // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
