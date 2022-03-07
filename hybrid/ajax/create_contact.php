<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$cust_rnd_code = substr(str_shuffle("0123456789"), 0,4);
	$cust_id = 'WCL_'.$rndm_code;

	$new_number = $_REQUEST['phone'];
    $new_name = $_REQUEST['firstname'];

    $sql = mysqli_query($conn,"INSERT INTO `table_contacts` ( `customer_id`,`customer_name`,`customer_mobile` ) VALUE ('$cust_id','$new_name','$new_number')");


?>