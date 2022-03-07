<?php

include "../config/connection.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

$today_date = date("d M, h:iA");
date_default_timezone_set("Asia/Dubai");

$mid = $_REQUEST['mid'];
$status = 'Approved by '.$agent_name;

$sql = mysqli_query($conn,"UPDATE maintenance_jobs SET `approved_by` = '$status' WHERE mid = '$mid'");

$sql1 = mysqli_query($conn,"INSERT INTO `maintenance_notes` (`id`, `maintenance_id`, `name`, `vendor_id`, `note_type`, `to`, `note_text`, `note_time`, `read_notification`, `admin_read_notification`) VALUES (NULL, '$mid', '$agent_name', NULL, NULL, NULL, '$status', '$today_date', '0', '0')");

// echo $response;

?>

