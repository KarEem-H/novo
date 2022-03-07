<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

$sql = mysqli_query($conn,"SELECT id, inspection_id, created_date, cust_name, cust_mobile, cust_email, area, cust_address, service,service_date,start_time,technician, notes, agent_name, agent_remarks, inspection_status FROM `table_inspection` WHERE `approved` != 'Yes'");	


while ($row = $sql->fetch_assoc()) {
	
$result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>