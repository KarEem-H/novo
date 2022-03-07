<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("d-m-Y");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT id, quotation_id, booking_date, cust_name, cust_mobile, cust_email, cust_address, service, start_time, end_time, job_sheet_generated FROM table_jobs WHERE booking_date > '$today_date'");


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>