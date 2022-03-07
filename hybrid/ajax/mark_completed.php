<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$status = 'Completed';

$sql = mysqli_query($conn,"UPDATE table_booking SET `booking_status` = '$status', `add_to_brilion` = 'No' WHERE id = '$Id'");

   
?>