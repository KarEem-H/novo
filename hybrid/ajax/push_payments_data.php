<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id,cust_id,status_changed_date FROM table_unpaid_jobs WHERE approved_by_ross != 'Yes' AND payment_status = 'Paid' AND approved = 'Yes'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    $cust_id = $row['cust_id'];
    $status_changed_date = $row['status_changed_date'];
    
	$sql1 = mysqli_query($conn,"UPDATE table_unpaid_jobs SET `approved_by_ross` = 'Yes' WHERE id = '$Id'");
	$sql2 = mysqli_query($conn,"UPDATE table_collections SET `approved_by_ross` = 'Yes' WHERE cust_id = '$cust_id' AND paid_date = '$status_changed_date' AND approved = 'Yes'");
}

echo "Payments Data Synced Successfully!";

?>