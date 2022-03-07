<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];


$sql = mysqli_query($conn,"SELECT id,created_date,cust_name,cust_mobile,cust_email,cust_region,cust_address,service_type,lead_status FROM `table_leads` WHERE approved_by_abdul = 'No'");	


while ($row = $sql->fetch_assoc()) {
	
$result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}


?>