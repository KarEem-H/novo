<?php 

include "../config/connection.php";
$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

error_reporting(1);

$markpaid = mysqli_query($conn,"SELECT id, job_ref, total FROM table_booking WHERE STR_TO_DATE(cleaning_date, '%Y-%m-%d') < '2021-08-01'");

 while ($row = $markpaid->fetch_assoc()) {

    $job_ref = $row['job_ref'];
    $amount = $row['total'];

    $sql = mysqli_query($conn,"UPDATE table_booking SET `payment_status` = 'Paid' AND status_by_finance = 'Paid', finance_notes='Cleared By Admin' WHERE `job_ref` = '$job_ref'");

}


   
?>