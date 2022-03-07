<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$status = $_REQUEST['callout_status'];
$agent_remark = mysqli_real_escape_string($conn,$_REQUEST['agent_remark']);

$sql = mysqli_query($conn,"UPDATE table_callouts SET `status` = '$status', `agent_remarks` = '$agent_remark' WHERE id = '$Id'");

   
?>