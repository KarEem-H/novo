<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");


if($admin_role == 'Administrator' || $agent_name == 'Josephine'){
    
	$sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.job_ref,t1.cleaning_date,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.agent_name,t1.payment_status,t1.service_type, t1.num_of_hours,t1.num_of_cleaners,t1.total,t1.address FROM (SELECT DISTINCT cust_id, id, job_ref, cleaning_date, payment_status, agent_name, total, num_of_hours, num_of_cleaners, service_type,address FROM table_booking WHERE cleaning_date < '$today_date' AND feedback != 'Yes' AND booking_status !='Cancelled') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");

}

if($admin_role == 'Telesales'){

    $sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.job_ref,t1.cleaning_date,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.agent_name,t1.payment_status,t1.service_type, t1.num_of_hours,t1.num_of_cleaners,t1.total,t1.address FROM (SELECT DISTINCT cust_id, id, job_ref, cleaning_date, payment_status, agent_name, total, num_of_hours, num_of_cleaners, service_type,address FROM table_booking WHERE cleaning_date < '$today_date' AND agent_name = '$agent_name' AND feedback != 'Yes' AND booking_status !='Cancelled') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");

}

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>