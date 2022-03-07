<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$servicedate 		= $_REQUEST['service_date'];
$start_time 		= $_REQUEST['start_time'];
$unit 				= $_REQUEST['unit'];
$building 			= mysqli_real_escape_string($conn,$_REQUEST['building']);
$source 			= $_REQUEST['source'];
$technician 		= $_REQUEST['technician'];
$details 			= mysqli_real_escape_string($conn,$_REQUEST['details']);
$agent_name 		= $_REQUEST['agent_name'];
$agent_remarks 		= '';
$status 		    = 'New';

$serviceDate = strtotime($servicedate);
$service_date= date('d-m-Y', $serviceDate);

$sql1 = mysqli_query($conn,"INSERT INTO `table_callouts` ( `service_date`, `start_time`, `unit`, `building`,`source`, `technician`,`details`,`status`, `approved`, `agent_name`, `agent_remarks`, `created_date`,`created_time`) VALUES ( '$service_date', '$start_time', '$unit', '$building', '$source', '$technician', '$details', '$status', 'No', '$agent_name', '$agent_remarks', '$today_date', '$current_time' )");

echo "Callout Created Successfully!!!";


?>