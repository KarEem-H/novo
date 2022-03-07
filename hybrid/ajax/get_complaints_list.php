<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

if($admin_role == 'Administrator'){

	$sql = mysqli_query($conn,"SELECT id, created_date, customer_name, customer_mobile, customer_address, service_date, CONCAT( start_time, ' - ', end_time ) AS service_time, job_amount, cleaner_name, remarks, agent_name, status, agent_remarks FROM `table_complaints`");

}

if($admin_role == 'Telesales'){
	$sql = mysqli_query($conn,"SELECT id, created_date, customer_name, customer_mobile, customer_address, service_date, CONCAT( start_time, ' - ', end_time ) AS service_time, job_amount, cleaner_name, remarks, agent_name, status, agent_remarks FROM `table_complaints` WHERE agent_name = '$agent_name'");
}

while ($row = $sql->fetch_assoc()) {
	
$result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}


?>