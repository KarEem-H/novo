<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");


$fieldname  = $_REQUEST['agent_remark'];
$value=$_REQUEST['value'];
$id=$_REQUEST['pk'];



$sql = mysqli_query($conn,"UPDATE table_booking SET `agent_remark` = '$value' WHERE id = '$id'");

echo "Agent Remarks Updated";



  
?>