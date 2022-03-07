<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$agent_role = $_SESSION['ADMIN_ID']['ROLE'];

// if($agent_role == 'Administrator' || $agent_name == 'Gina'){

//     $sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.booking_date,t1.cleaning_date,t1.total,t1.booking_status,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.address,t1.agent_remark,t1.agent_name FROM (SELECT id, cust_id, booking_date,cleaning_date, total, booking_status, address,agent_remark,agent_name FROM table_booking WHERE cleaning_date >= '$today_date' AND cust_id !='' AND agent_name !='') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile,address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");
    

// }else{
    
//     $sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.booking_date,t1.cleaning_date,t1.total,t1.booking_status,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.address,t1.agent_remark,t1.agent_name FROM (SELECT id, cust_id, booking_date,cleaning_date, total, booking_status, address,agent_remark,agent_name FROM table_booking WHERE cleaning_date >= '$today_date' AND agent_name = '$agent_name') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile,address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");
    
// }

$sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.booking_date,t1.cleaning_date,t1.total,t1.booking_status,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.address,t1.agent_remark,t1.agent_name FROM (SELECT id, cust_id, booking_date,cleaning_date, total, booking_status, address,agent_remark,agent_name FROM table_booking WHERE cleaning_date >= '2021-10-13' AND cust_id !='' AND agent_name !='') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile,address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

print_r($result);

$my_result = json_encode($result);

if ('null' != $my_result){

// echo $my_result;

}

?>