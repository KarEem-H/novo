<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$staff_name = $_REQUEST['staff_name'];
$staff_id = $_REQUEST['staff_id'];
$staff_mobile = $_REQUEST['staff_mobile'];
$staff_category = $_REQUEST['staff_category'];
$status = 'Active';



$sql1 = mysqli_query($conn,"INSERT INTO `table_staffs` ( `staff_name`, `staff_id`, `staff_category`, `staff_status`, `created_date` ) VALUES ( '$staff_name', '$staff_id', '$staff_category', '$status', '$today_date' )");


echo "Staff created Successfully!!!";


?>