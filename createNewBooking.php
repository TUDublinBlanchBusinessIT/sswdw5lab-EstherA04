<?php 
include("dbcon.php");

$mid = $_POST['memberID']; 
$cid = $_POST['courtID']; 
$bd = $_POST['bookingDate']; 
$st = $_POST['startTime']; 
$et = $_POST['endTime']; 

$sql = "INSERT INTO booking (memberid, courtid, bookingDate, starttime, endtime) VALUES ('$mid', '$cid', '$bd', '$st', '$et')";

echo $sql; // Display the SQL statement for debugging purposes

/*
if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

mysqli_close($conn); 
?>
