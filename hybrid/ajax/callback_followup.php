<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

if($admin_role == 'Telesales'){

$sql = mysqli_query($conn,"SELECT id, customer_name, customer_mobile, call_status, call_source FROM table_outbound_calls WHERE agent_name = '$agent_name' AND (call_status = 'Active' OR call_status = 'Call Back' OR call_status = 'Potential Lead')");
}

if($admin_role == 'Administrator'){
	$sql = mysqli_query($conn,"SELECT id, customer_name, customer_mobile, call_status, call_source, agent_name FROM table_outbound_calls WHERE (call_status = 'Active' OR call_status = 'Call Back' OR call_status = 'Potential Lead')");
}

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>