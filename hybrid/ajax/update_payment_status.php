<?php 

include "../config/connection.php";

$today_date = date("d-m-Y");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$status = $_REQUEST['payment_status'];
$agent_remark = $_REQUEST['agent_remark'];

$sql = mysqli_query($conn,"SELECT cust_id, payment_collected_by, status_changed_date FROM table_unpaid_jobs WHERE id = '$Id'");

$cs = mysqli_fetch_row($sql);
$cust_id = $cs[0];
$payment_collected_by = $cs[1];
$status_changed_date = $cs[2];

$sql = mysqli_query($conn,"DELETE FROM table_collections WHERE cust_id = '$cust_id' AND paid_date='$status_changed_date' AND approved !='Yes'");

$sql1 = mysqli_query($conn,"UPDATE table_unpaid_jobs SET `payment_status` = '$status', `agent_remarks` = '$agent_remark',`status_changed_date` = '$today_date', `paid_amount` = '' WHERE cust_id = '$cust_id' AND status_changed_date = '$status_changed_date' AND approved != 'Yes'");
   
?>