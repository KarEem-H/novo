<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("d-m-Y");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$service_date 		= date("d-m-Y", strtotime($_REQUEST['service_date']));
$service_type 		= $_REQUEST['service_type'];
$department 		= $_REQUEST['department'];
$issue 				= $_REQUEST['issue'];
$customer_name 		= $_REQUEST['customer_name'];
$customer_mobile 	= $_REQUEST['customer_mobile'];
$job_amount 		= $_REQUEST['job_amount'];
$staff_name 		= $_REQUEST['staff_name'];
$comments 			= $_REQUEST['comments'];
$agent_name 		= $_REQUEST['agent_name'];

$sql1 = mysqli_query($conn,"INSERT INTO `table_internal_tickets` ( `cust_name`, `cust_mobile`, `service_type`, `service_date`, `department`, `fault_by`, `issue`, `job_amount`, `agent_name`, `agent_remarks`, `created_date`) VALUES ( '$customer_name', '$customer_mobile', '$service_type', '$service_date', '$department', '$staff_name', '$issue', '$job_amount', '$agent_name', '$comments', '$today_date')");

echo "Ticket Created Successfully!!!";


?>