<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT t1.id, t1.cust_id, t1.service_date, t1.service_time, t1.cust_name, t1.cust_mobile, t1.source, t1.cust_address, ROUND(t2.paid_amount,'2') as outstanding, t1.payment_status, t1.agent_remarks,t1.approved, t1.status_changed_date, t1.status_changed_time, t1.payment_collected_by, t1.agent_name FROM (SELECT id, cust_id, service_date, service_time, cust_name, cust_mobile,source, cust_address, ROUND(SUM(paid_amount),'2') as outstanding, payment_status, agent_remarks, status_changed_date, status_changed_time, payment_collected_by, agent_name,approved FROM table_unpaid_jobs WHERE payment_status = 'Paid' AND approved_by_ross != 'Yes' GROUP BY cust_id) t1 LEFT JOIN (SELECT paid_amount, cust_id FROM table_collections WHERE approved_by_ross !='Yes' GROUP BY cust_id) t2 ON (t2.cust_id = t1.cust_id)");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>