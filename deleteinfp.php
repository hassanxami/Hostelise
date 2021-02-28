<?php 
require('connection.php');
$did = $_REQUEST['myid'];
$deletequery = "Delete from addinfo where id = $did";
mysqli_query($conn,$deletequery);
header("location:searchinfo.php");
exit();
?>