<?php 

include "../config/connection.php";

error_reporting(1);

$now = date("d-m-Y H:i:s");
$today_date = date("d M, h:iA");
date_default_timezone_set("Asia/Dubai");

$sql1 = mysqli_query($conn,"SELECT id FROM maintenance_jobs ORDER BY id DESC LIMIT 1");

$last_insert_id = mysqli_fetch_row($sql1);

$maintenance_id 	= 'HIGI-M-100'.$last_insert_id[0];
$servicedate 		= $_REQUEST['service_date'];
$start_time 		= $_REQUEST['start_time'];
$unit 				= $_REQUEST['unit'];
$building 			= $_REQUEST['building'].','.$unit;
$address 			= mysqli_real_escape_string($conn,$_REQUEST['address']);
$source 			= $_REQUEST['source'];
$category_type		= 'Maintenance';
$status				= 'New';
$category 			= $_REQUEST['category'];
$cust_name 			= mysqli_real_escape_string($conn,$_REQUEST['cust_name']);
$cust_mobile 		= $_REQUEST['cust_mobile'];
$cust_email			= $_REQUEST['cust_email'];
$agent_name 		= $_REQUEST['agent_name'];
$job_title 			= mysqli_real_escape_string($conn,$_REQUEST['job_title']);
$job_description 	= mysqli_real_escape_string($conn,$_REQUEST['job_description']);
$notes 				= 'New service request created';

$serviceDate = strtotime($servicedate);
$service_date= date('d-m-Y', $serviceDate);

$sql1 = mysqli_query($conn,"INSERT INTO `maintenance_jobs` (`id`, `mid`, `category_type`, `category`, `quotation_id`, `status`, `title`, `duration`, `available_date`, `time_slot`, `priority`, `details`, `completed_date`, `email`, `reject_note`, `tenant_full_name`, `tenant_phone`, `property_name`, `property_address`,`source`, `agent_name`, `created_at`, `updated_at`, `quotation_status`, `quotation_created_date_time`, `approved_by`, `schedule_date`, `schedule_time`,`add_to_brilion`,`approved_by_coordinator`) VALUES (NULL, '$maintenance_id', '$category_type', '$category', '', '$status', '$job_title', '', '$service_date', '$start_time', 'Normal', '$job_description', '', '$cust_email', '', '$cust_name', '$cust_mobile', '$building', '$address', '$source', '$agent_name', '$now', '$now', '', '', '', '', '','','')");

$sql2 = mysqli_query($conn,"INSERT INTO `maintenance_notes` (`id`, `maintenance_id`, `name`, `vendor_id`, `note_type`, `to`, `note_text`, `note_time`, `read_notification`, `admin_read_notification`) VALUES (NULL, '$maintenance_id', '$agent_name', NULL, NULL, NULL, '$notes', '$today_date', '0','0')");

echo "Job Created Successfully!!!";


?>