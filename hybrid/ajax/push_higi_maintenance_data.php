<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id FROM maintenance_jobs WHERE `add_to_brilion` = 'Yes' AND `approved_by_coordinator` != 'Yes'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    
	$sql1 = mysqli_query($conn,"UPDATE maintenance_jobs SET `approved_by_coordinator` = 'Yes' WHERE id = '$Id'");
}

echo "Booking Sync Successful!";

?>