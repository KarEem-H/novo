<?php

include "../config/connection.php";

$now = date("d-m-Y H:i:s");
$today_date = date("d M, h:iA");
date_default_timezone_set("Asia/Dubai");

$job_id          = $_REQUEST['job_ref'];
$target          = $_REQUEST['target'];
$agent_name      = $_SESSION['ADMIN_ID']['NAME'];

if($target == "upcoming"){
  $status = 'New';
}

if($target == "inprogress"){
  $status = 'In Progress';
}

if($target == "completed"){
  $status = 'Resolved';
}

$notes 	= 'Status changed to '.$status;

$sql = mysqli_query($conn,"UPDATE maintenance_jobs SET `status` = '$status',`updated_at` = '$now' WHERE mid = '$job_id'");

$sql2 = mysqli_query($conn,"INSERT INTO `maintenance_notes` (`id`, `maintenance_id`, `name`, `vendor_id`, `note_type`, `to`, `note_text`, `note_time`, `read_notification`, `admin_read_notification`) VALUES (NULL, '$job_id', '$agent_name', NULL, NULL, NULL, '$notes', '$today_date', '0', '0')");

echo "Status Updated'";

?>
