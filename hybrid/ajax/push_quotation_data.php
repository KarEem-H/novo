<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id FROM table_quotations WHERE quotation_approved != 'Yes' AND (quotation_status = 'Cancelled' || quotation_status = 'Lost' || quotation_status = 'Won')");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row;

    $Id = $row['id'];
    
	$sql1 = mysqli_query($conn,"UPDATE table_quotations SET `quotation_approved` = 'Yes' WHERE id = '$Id'");
}

echo "Quotation Sync Successful!";

?>