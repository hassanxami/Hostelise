<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","hostel_manag");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>