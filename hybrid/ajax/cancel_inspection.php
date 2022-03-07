<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$agent_remark = $_REQUEST['agent_remark'];
$status = 'Cancelled';
$agent_name = $_SESSION['ADMIN_ID']['NAME'];

$sql = mysqli_query($conn,"UPDATE table_inspection SET `inspection_status` = '$status', `agent_remarks` = '$agent_remark', `agent_name` = '$agent_name' WHERE id = '$Id'");

   
?>