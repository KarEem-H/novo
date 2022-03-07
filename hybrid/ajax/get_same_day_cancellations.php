<?php 

	include "../config/connection.php";

	error_reporting(1);

	$today_date = date("Y-m-d");
	date_default_timezone_set("Asia/Dubai");

	$sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.cleaning_date,t1.total,t1.booking_status,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.address,t1.reject_reason,t1.agent_remark,t1.add_to_brilion,t1.agent_name FROM (SELECT id, cust_id, cleaning_date, total, booking_status, address,reject_reason,agent_remark, add_to_brilion,agent_name FROM table_booking WHERE `booking_status` = 'Cancelled' AND `approved_by_coordinator` != 'Yes' AND `approved_by_scheduler` != 'Yes' AND `cleaning_date` = '$today_date' AND `booking_date` = '$today_date') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");

	while ($row = $sql->fetch_assoc()) {
		
	    $result[] = $row; 
	    
	}

	$my_result = json_encode($result);

	if ('null' != $my_result){

	echo $my_result;

	}

?>