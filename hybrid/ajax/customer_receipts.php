<?php 

include "../config/connection.php";

$cust_id = $_REQUEST['cid'];

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


$sql = mysqli_query($conn,"SELECT * FROM `table_receipt` WHERE `cust_id` = '$cust_id'");

if (isset($_REQUEST['selected_month']) && $_REQUEST['selected_month']!="") {

	$sql = mysqli_query($conn,"SELECT STR_TO_DATE(payment_date, '%Y-%m-%d') AS 'date',receipt_ref,receipt_amount,payment_mode,payment_date,agent_remarks FROM `table_receipt` WHERE `cust_id` = '$cust_id' AND month(STR_TO_DATE(payment_date, '%Y-%m-%d')) = '$select_month'");

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