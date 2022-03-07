<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time 	= date("h:i");

$Id 			= $_REQUEST['id'];
$service_date 	= $_REQUEST['service_date'];
$start_time 	= $_REQUEST['start_time'];
$end_time 		= $_REQUEST['end_time'];
$agent_name 	= $_SESSION['ADMIN_ID']['NAME'];

$sql = mysqli_query($conn,"SELECT quotation_id,customer_name,customer_email,customer_mobile,customer_address,service,scope_of_work,quotation_rate FROM `table_quotations` WHERE id='$Id'");

$row = mysqli_fetch_assoc($sql);
	
$quotation_id = $row['quotation_id'];
$customer_name = $row['customer_name'];
$customer_email = $row['customer_email'];
$customer_mobile = $row['customer_mobile'];
$customer_address = mysqli_real_escape_string($conn,$row['customer_address']);
$service = mysqli_real_escape_string($conn,$row['service']);
$scope_of_work = mysqli_real_escape_string($conn,$row['scope_of_work']);
$job_amount = $row['quotation_rate'];

$sql1 = mysqli_query($conn,"SELECT id FROM table_jobs ORDER BY id DESC LIMIT 1");

$last_insert_id = mysqli_fetch_row($sql1);

$job_sheet_id = 'HIGI-J-100'.$last_insert_id[0];

$sql2 = mysqli_query($conn,"INSERT INTO `table_jobs` ( `quotation_id`,`job_sheet_id`,`cust_name`,`cust_mobile`,`cust_email`,`cust_address`,`service`, `booking_date`,`start_date`,`end_date`, `start_time`, `end_time`,`technician`,`job_to_do`,`tools_required`,`spare_parts`, `agent_name`, `agent_remark`, `job_sheet_generated`, `created_date`, `job_sheet_generated_date`, `jobsheet_status`, `job_status_changed_date`,`job_amount`) VALUES ( '$quotation_id','$job_sheet_id','$customer_name','$customer_mobile','$customer_email','$customer_address','$service','$service_date','$service_date','','$start_time','$end_time','','$scope_of_work','','','$agent_name','','No','$today_date','','','','$job_amount' )");

$sql3 = mysqli_query($conn,"UPDATE `table_quotations` SET `job_scheduled` = 'Yes' WHERE `id` = '$Id'");

echo "Job Scheduled Successfully!!!";


?>