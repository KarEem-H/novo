<?php 

include "../config/connection.php";

error_reporting(1);

$search_mobile = $_REQUEST['number'];

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$cust_rnd_code = substr(str_shuffle("0123456789"), 0,6);
$cust_id = 'HIGI_'.$cust_rnd_code;

$new_number = $_REQUEST['number'];
$new_name = '3CX Contact';

$sql5 = mysqli_query($conn,"INSERT IGNORE INTO `table_contacts` (customer_id, customer_name, customer_mobile, customer_email, address, DOB, gender, ownership,primary_source,created_date) VALUES ('$cust_id','$new_name','$new_number','','','','','','','$today_date')");

$sql = mysqli_query($conn,"SELECT id as contactid, customer_name as firstname, customer_mobile as phonemobile FROM `table_contacts` WHERE customer_mobile= '$search_mobile'");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 

    $sql3 = mysqli_query($conn,"UPDATE `table_contacts` SET `customer_name` = '".$row['firstname']."' WHERE id = '".$row['contactid']."'");
    
}

echo json_encode($result);

?>