<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$agent_name = $_REQUEST['agent_name'];
$agent_password = $_REQUEST['agent_password'];
$agent_extension = $_REQUEST['agent_extension'];
$agent_role = $_REQUEST['agent_role'];
$status = 'Active';

if($agent_role == 'Administrator'){
	$user_access = 1;
	$bookings = 1;
	$scheduler = 1;
	$coordinator = 1;
	$quotations = 1;
	$followup = 1;
	$payments = 1;
	$landing_page_leads = 1;
	$complaints = 1;
	$reports = 1;
	$autodialer = 1;
	$inspection = 1;
	$maintenance = 1;
	$call_report = 1;
	$agent_report = 1;
	$payment_report = 1;
	$maintenance_report = 1;
}

if($agent_role == 'Telesales'){
	$user_access = 0;
	$bookings = 1;
	$scheduler = 0;
	$coordinator = 0;
	$quotations = 1;
	$followup = 1;
	$payments = 0;
	$landing_page_leads = 0;
	$complaints = 1;
	$reports = 1;
}

if($agent_role == 'Scheduler' || $agent_role == 'Coordinator'){
	$user_access = 0;
	$bookings = 1;
	$scheduler = 1;
	$coordinator = 1;
	$quotations = 0;
	$followup = 0;
	$payments = 0;
	$landing_page_leads = 0;
	$complaints = 0;
	$reports = 1;
}

if($agent_role == 'Payment Collector'){
	$user_access = 0;
	$bookings = 1;
	$scheduler = 0;
	$coordinator = 0;
	$quotations = 0;
	$followup = 0;
	$payments = 1;
	$landing_page_leads = 0;
	$complaints = 0;
	$reports = 1;
}

if($agent_role == 'Staycae'){
    
    $user_access = 0;
	$bookings = 0;
	$scheduler = 0;
	$coordinator = 0;
	$quotations = 0;
	$followup = 0;
	$payments = 0;
	$landing_page_leads = 0;
	$complaints = 0;
	$reports = 0;
	$maintenance = 0;
    
}

$sql1 = mysqli_query($conn,"INSERT INTO `table_agents` ( `agent_name`, `agent_password`, `agent_extension`, `agent_role`, `user_access`, `bookings`, `scheduler`, `coordinator`, `quotations`, `inspection`, `followup`, `payments`, `landing_page_leads`, `complaints`, `reports`, `status`, `last_login` , `maintenance` ,`call_report`, `agent_report`, `payment_report`, `maintenance_report` ) VALUES ( '$agent_name', '$agent_password', '$agent_extension', '$agent_role', '$user_access', '$bookings', '$scheduler', '$coordinator', '$quotations', '$inspection', '$followup', '$payments', '$landing_page_leads', '$complaints','$reports', '$status','$today_date','$maintenance','$call_report','$agent_report','$payment_report','$maintenance_report' )");


echo "User created Successfully!!!";

// echo "INSERT INTO `table_agents` ( `agent_name`, `agent_password`, `agent_extension`, `agent_role`, `user_access`, `bookings`, `scheduler`, `coordinator`, `quotations`, `inspection`, `followup`, `payments`, `landing_page_leads`, `complaints`, `reports`, `status`, `last_login` , `maintenance` ,`call_report`, `agent_report`, `payment_report`, `maintenance_report` ) VALUES ( '$agent_name', '$agent_password', '$agent_extension', '$agent_role', '$user_access', '$bookings', '$scheduler', '$coordinator', '$quotations', '$inspection', '$followup', '$payments', '$landing_page_leads', '$complaints','$reports', '$status','$today_date','$maintenance','$call_report','$agent_report','$payment_report','$maintenance_report'";



?>