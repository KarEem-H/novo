<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id FROM table_inspection WHERE approved != 'Yes' AND inspection_status != 'Open'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    
	$sql1 = mysqli_query($conn,"UPDATE table_inspection SET `approved` = 'Yes' WHERE id = '$Id'");
}

echo "Inspection Sync Successful!";

?>