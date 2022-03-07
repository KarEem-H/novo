<?php

include "../config/connection.php";

$job_id = $_REQUEST['job_ref'];
$notes = mysqli_real_escape_string($conn,$_REQUEST['notes']);
$agent_name = $_SESSION['ADMIN_ID']['NAME'];

$now = date("d-m-Y H:i:s");
$today_date = date("d M, h:iA");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"UPDATE maintenance_jobs SET `updated_at` = '$now' WHERE mid = '$job_id'");

$sql1 = mysqli_query($conn,"INSERT INTO `maintenance_notes` (`id`, `maintenance_id`, `name`, `vendor_id`, `note_type`, `to`, `note_text`, `note_time`, `read_notification`, `admin_read_notification`) VALUES (NULL, '$job_id', '$agent_name', NULL, NULL, NULL, '$notes', '$today_date', '0', '0')");

?>