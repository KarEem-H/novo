<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.job_ref,t1.cleaning_date,t1.cleaning_time,t1.total,t1.booking_status,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.address,t1.payment_status,t1.agent_name,t1.status_by_finance FROM (SELECT id, cust_id,job_ref, cleaning_date,cleaning_time, total, address, booking_status, payment_status,agent_name,status_by_finance FROM table_booking WHERE `cleaning_date` < '$today_date' AND `approved_by_ross` != 'Yes' AND `booking_status` !='Cancelled' AND cust_id !='' AND agent_name !='') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile, address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");

$serial_no = 1;
while ($row = $sql->fetch_assoc()) {
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>