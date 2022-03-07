<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$service_date = $_REQUEST['service_date'];
$start_time = $_REQUEST['start_time'];
$end_time = $_REQUEST['end_time'];
$customer_name = $_REQUEST['customer_name'];
$customer_mobile = $_REQUEST['customer_mobile'];
$customer_address = $_REQUEST['customer_address'];
$job_amount = $_REQUEST['job_amount'];
$cleaner_name = $_REQUEST['cleaner_name'];
$remarks = $_REQUEST['remarks'];
$agent_name = $_REQUEST['agent_name'];
$status = 'Open';

$sql1 = mysqli_query($conn,"INSERT INTO `table_complaints` ( `customer_name`, `customer_mobile`, `customer_address`, `service_date`, `start_time`, `end_time`, `cleaner_name`, `job_amount`, `remarks`, `agent_name`, `status`, `agent_remarks`, `created_date`, `created_time`) VALUES ( '$customer_name', '$customer_mobile', '$customer_address', '$service_date', '$start_time', '$end_time', '$cleaner_name', '$job_amount', '$remarks', '$agent_name', '$status', '', '$today_date', '$current_time' )");

echo "Ticket Created Successfully!!!";


?>