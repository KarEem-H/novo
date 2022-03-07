<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id,job_ref FROM table_booking WHERE approved_by_ross != 'Yes' AND status_by_finance = 'Paid'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    $job_ref = $row['job_ref'];
    
	$sql2 = mysqli_query($conn,"UPDATE table_booking SET `approved_by_ross` = 'Yes' WHERE job_ref = '$job_ref'");
}

echo "Payments Data Synced Successfully!";

?>