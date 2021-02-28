<?php
include('connection.php');

if(isset($_POST['data'])){
	$dataArr=$_POST['data'];
	foreach($dataArr as $hostel_id){
		$del="DELETE FROM addinfo WHERE hostel_id='$hostel_id'";
		mysqli_query($conn,$del);
	}
	echo "Record deleted Successfully";
}
?>                 
?>