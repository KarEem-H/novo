<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time 	= date("h:i");

$Id 			= $_REQUEST['id'];
$quotation_id 	= $_REQUEST['quotation_id'];
$start_date 	= $_REQUEST['start_date'];
$start_time 	= $_REQUEST['start_time'];
$end_time 	= $_REQUEST['end_time'];

$sql = mysqli_query($conn,"UPDATE `table_quotations` SET `job_scheduled` = 'Yes' WHERE `id` = '$Id'");

$sql1 = mysqli_query($conn,"UPDATE `table_jobs` SET `start_date` = '$start_date', `start_time` = '$start_time', `end_time` = '$end_time' WHERE `quotation_id` = '$quotation_id'");


echo "Job Scheduled Successfully!!!";



?>