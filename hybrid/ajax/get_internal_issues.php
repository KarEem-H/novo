<?php 

include "../config/connection.php";

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];


$sql = mysqli_query($conn,"SELECT * FROM `table_internal_tickets`");

while ($row = $sql->fetch_assoc()) {
	
$result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}


?>