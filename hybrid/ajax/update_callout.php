<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$callout_id 		= $_REQUEST['id'];
$servicedate 		= $_REQUEST['service_date'];
$start_time 		= $_REQUEST['start_time'];
$unit 				= $_REQUEST['unit'];
$building 			= mysqli_real_escape_string($conn,$_REQUEST['building']);
$source 			= $_REQUEST['source'];
$technician 		= $_REQUEST['technician'];
$agent_name 		= $_REQUEST['agent_name'];
$details 			= mysqli_real_escape_string($conn,$_REQUEST['details']);
$status 		    = $_REQUEST['status'];

$sql = mysqli_query($conn,"UPDATE `table_callouts` SET `service_date` = '$servicedate', `start_time` = '$start_time', `unit` = '$unit', `building` = '$building', `source` = '$source', `technician` = '$technician', `status` = '$status',`details` = '$details' WHERE id = '$callout_id'");

echo "Callout Updated Successfully!!!";


?>