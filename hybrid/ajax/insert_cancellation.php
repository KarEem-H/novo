<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$service_date 		= $_REQUEST['service_date'];
$start_time 		= $_REQUEST['start_time'];
$end_time 			= $_REQUEST['end_time'];
$customer_name 		= $_REQUEST['customer_name'];
$customer_mobile 	= $_REQUEST['customer_mobile'];
$customer_address 	= $_REQUEST['customer_address'];
$customer_type 		= $_REQUEST['customer_type'];
$job_amount 		= $_REQUEST['job_amount'];
$cleaner_name 		= $_REQUEST['cleaner_name'];
$reason 			= $_REQUEST['reason'];
$rescheduled 		= $_REQUEST['rescheduled'];
$agent_name 		= $_REQUEST['agent_name'];

$sql1 = mysqli_query($conn,"INSERT INTO `table_cancellations` ( `customer_name`, `customer_mobile`, `customer_address`, `customer_type`,`service_date`, `start_time`, `end_time`, `cleaner_name`, `job_amount`, `rescheduled`,`agent_name`, `reason`, `created_date`, `approved`) VALUES ( '$customer_name', '$customer_mobile', '$customer_address', '$customer_type', '$service_date', '$start_time', '$end_time', '$cleaner_name', '$job_amount', '$rescheduled','$agent_name', '$reason', '$today_date', 'No' )");

echo "Complaint Created Successfully!!!";


?>