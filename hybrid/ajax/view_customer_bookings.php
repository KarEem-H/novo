<?php 

include "../config/connection.php";

$cust_id=$_REQUEST['cid'];

$filter_month = $_REQUEST['selected_month'];

if ($filter_month == 'January'){
	$select_month = '1';
}

if ($filter_month == 'February'){
	$select_month = '2';
}

if ($filter_month == 'March'){
	$select_month = '3';
}

if ($filter_month == 'April'){
	$select_month = '4';
}

if ($filter_month == 'May'){
	$select_month = '5';
}

if ($filter_month == 'June'){
	$select_month = '6';
}

if ($filter_month == 'July'){
	$select_month = '7';
}

if ($filter_month == 'August'){
	$select_month = '8';
}

if ($filter_month == 'September'){
	$select_month = '9';
}

if ($filter_month == 'October'){
	$select_month = '10';
}

if ($filter_month == 'November'){
	$select_month = '11';
}

if ($filter_month == 'December'){
	$select_month = '12';
}


$sql = mysqli_query($conn,"SELECT job_ref, cleaning_date, cleaning_time, cust_id, address, total,receipt_amount, agent_name, payment_status, service_type,status_by_finance FROM table_booking WHERE cust_id ='$cust_id' AND booking_status !='Cancelled' ORDER BY id DESC");

if (isset($_REQUEST['selected_month']) && $_REQUEST['selected_month']!="") {

	$sql = mysqli_query($conn,"SELECT STR_TO_DATE(cleaning_date, '%Y-%m-%d') AS 'date', job_ref, cleaning_date, cleaning_time, cust_id, address, total, agent_name, payment_status,receipt_amount, service_type,status_by_finance FROM table_booking WHERE cust_id ='$cust_id' AND booking_status !='Cancelled' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$select_month' ORDER BY id DESC");

}

$serial_no = 1;
while ($row = $sql->fetch_assoc()) {
	$row['id'] = $serial_no++;
    $result[] = $row; 
    
}


$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}


?>