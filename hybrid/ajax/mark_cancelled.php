<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$reject_reason = $_REQUEST['reject_reason'];
$agent_remark = $_REQUEST['agent_remark'];
$status = 'Cancelled';

$sql = mysqli_query($conn,"UPDATE table_booking SET `booking_status` = '$status',`reject_reason` = '$reject_reason',`agent_remark` = '$agent_remark' WHERE id = '$Id'");

$booking_details = mysqli_query($conn,"SELECT job_ref FROM table_booking WHERE id = '$Id'");

$row1=mysqli_fetch_assoc($booking_details);

$booking_id = $row1['job_ref'];

$unassign_staffs = mysqli_query($conn,"UPDATE table_assigned_task SET status='un_assigned' WHERE booking_id = '$booking_id'");

   
?>