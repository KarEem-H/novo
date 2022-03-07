<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t2.address FROM (SELECT id, cust_id FROM table_booking GROUP BY cust_id) t1 LEFT JOIN (SELECT customer_id, address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}


    foreach($result as $value){
        $new_address = $value['address'];
        $row_id = $value['cust_id'];
        $sql1 = mysqli_query($conn,"UPDATE table_booking SET address = '$new_address' WHERE cust_id = '$row_id'");
        
        echo "UPDATE table_booking SET address = '$new_address' WHERE cust_id = '$row_id'";
        
    }


// $my_result = json_encode($result);


// if ('null' != $my_result){

// echo $my_result;

// }

?>