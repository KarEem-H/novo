<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("m/d/Y");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT * FROM table_cancellations WHERE service_date >='".$today_date."'");


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>