<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

if($admin_role == 'Administrator' || $agent_name == 'Gina' || $agent_name == 'Purple' || $agent_name == 'Charmaine'){

$sql = mysqli_query($conn,"SELECT * FROM `table_quotations` WHERE quotation_approved !='Yes'");

}

if($admin_role == 'Telesales' && $agent_name != 'Gina' && $agent_name != 'Purple' && $agent_name != 'Charmaine'){
    
	$sql = mysqli_query($conn,"SELECT * FROM `table_quotations` WHERE agent_name = '$agent_name' AND `quotation_approved` !='Yes'");
}

while ($row = $sql->fetch_assoc()) {
	
$result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}


?>