<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$status = 'Paid';

$sql = mysqli_query($conn,"UPDATE table_booking SET `payment_status` = '$status' WHERE id = '$Id'");

   
?>