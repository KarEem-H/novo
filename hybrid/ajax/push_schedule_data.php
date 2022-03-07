<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id FROM table_booking WHERE approved_by_scheduler != 'Yes' AND cleaning_date <= '$today_date' AND booking_status !='Cancelled' AND add_to_brilion = 'Yes'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    
	$sql1 = mysqli_query($conn,"UPDATE table_booking SET `approved_by_scheduler` = 'Yes' WHERE id = '$Id'");
}

echo "Scheduler Data Synced Successfully!";

?>