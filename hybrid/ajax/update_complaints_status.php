<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$status = $_REQUEST['ticket_status'];
$agent_remarks = $_REQUEST['agent_remarks'];

$sql = mysqli_query($conn,"UPDATE table_complaints SET `status` = '$status', `agent_remarks` = '$agent_remarks' WHERE id = '$Id'");
   
?>
