<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id FROM table_leads WHERE approved_by_abdul != 'Yes' AND lead_status !='Lead'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    
	$sql1 = mysqli_query($conn,"UPDATE table_leads SET `approved_by_abdul` = 'Yes' WHERE id = '$Id'");
}

echo "Lead Sync Successful!";

?>