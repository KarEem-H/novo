<?php

include "../config/connection.php";

$today_date = date("d M, h:iA");
date_default_timezone_set("Asia/Dubai");

$now = date("d-m-Y H:i:s");
date_default_timezone_set("Asia/Dubai");

$job_id = $_REQUEST['job_ref'];
$status = $_REQUEST['job_status'];
$reason = mysqli_real_escape_string($conn,$_REQUEST['reject_reason']);
$agent_name = $_SESSION['ADMIN_ID']['NAME'];

// UPDATE STATUS

$sql = mysqli_query($conn,"UPDATE `maintenance_jobs` SET `status` = '$status', updated_at = '$now' WHERE mid = '$job_id'");

// UPDATE NOTES

$sql1 = mysqli_query($conn,"INSERT INTO `maintenance_notes` (`id`, `maintenance_id`, `name`, `vendor_id`, `note_type`, `to`, `note_text`, `note_time`, `read_notification`, `admin_read_notification`) VALUES (NULL, '$job_id', '$agent_name', NULL, NULL, NULL, '$reason', '$today_date', '0', '0')");

?>