<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.cleaning_date,t1.total,t2.customer_mobile,t2.customer_id,t2.customer_name,t2.address FROM (SELECT id, cust_id, cleaning_date, total FROM table_booking WHERE approved_by_ross != 'Yes' AND booking_status !='Cancelled') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile, address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 

    $Id = $row['id'];

    $sql1 = mysqli_query($conn,"UPDATE table_bookings SET `approved_by_ross` = 'Yes' WHERE id = '$Id'");
    
}

echo 'Payments Approved By Ross!!!';

?>