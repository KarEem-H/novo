<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];


if($admin_role == 'Administrator' || $admin_role == 'Payment Collector'){

	$sql = mysqli_query($conn,"SELECT id, cust_id, service_date, service_time, cust_name, cust_mobile,source, cust_address, SUM(outstanding - paid_amount) as outstanding, payment_status, agent_remarks, status_changed_date,status_changed_time,payment_collected_by, agent_name FROM table_unpaid_jobs WHERE payment_status != 'Paid' GROUP BY cust_id");

}else{

	$sql = mysqli_query($conn,"SELECT id, cust_id, service_date, service_time, cust_name, cust_mobile,source, cust_address, SUM(outstanding - paid_amount) as outstanding, payment_status, agent_remarks, status_changed_date,status_changed_time,payment_collected_by, agent_name FROM table_unpaid_jobs WHERE payment_status != 'Paid' AND agent_name= '$agent_name' GROUP BY cust_id");
}


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

	echo $my_result;


}
// print_r($my_result);


?>