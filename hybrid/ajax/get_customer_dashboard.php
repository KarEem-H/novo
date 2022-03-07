<?php 

include "../config/connection.php";

error_reporting(1);

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



$sql5 = mysqli_query($conn,"SELECT customer_name FROM customer_list WHERE cust_id = '$cust_id'");

$row5 = mysqli_fetch_assoc($sql5);
$cust_name = $row5['customer_name'];


$sql1 = mysqli_query($conn,"SELECT * FROM table_booking WHERE cust_id = '$cust_id' AND booking_status !='Cancelled'");

$cleaning_count = $sql1->num_rows;

$row1=mysqli_fetch_assoc($sql1);

$total_amount_payable = mysqli_query($conn,"SELECT IFNULL(ROUND(SUM(total),2),'0') FROM table_booking WHERE cust_id = '$cust_id' AND booking_status !='Cancelled'");

$payable_amount = mysqli_fetch_row($total_amount_payable);

$total_amount_paid = mysqli_query($conn,"SELECT IFNULL(ROUND(SUM(receipt_amount),2),'0') FROM table_receipt WHERE cust_id = '$cust_id'");

$paid_amount = mysqli_fetch_row( $total_amount_paid );


$total_amount_outstanding = $paid_amount[0] - $payable_amount[0];

if (isset($_REQUEST['selected_month']) && $_REQUEST['selected_month']!="") {

	$sql5 = mysqli_query($conn,"SELECT customer_name FROM customer_list WHERE cust_id = '$cust_id'");

	$row5 = mysqli_fetch_assoc($sql5);
	$cust_name= $row5['customer_name'];

	$sql1 = mysqli_query($conn,"SELECT *,STR_TO_DATE(cleaning_date, '%Y-%m-%d') AS 'date' FROM table_booking WHERE cust_id = '$cust_id' AND booking_status !='Cancelled' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$select_month'");

	$cleaning_count = $sql1->num_rows;

	$row1=mysqli_fetch_assoc($sql1);

	$total_amount_payable = mysqli_query($conn,"SELECT IFNULL(ROUND(SUM(total),2),'0') FROM table_booking WHERE cust_id = '$cust_id' AND booking_status !='Cancelled' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$select_month'");

	$payable_amount = mysqli_fetch_row($total_amount_payable);

	$total_amount_paid = mysqli_query($conn,"SELECT IFNULL(ROUND(SUM(receipt_amount),2),'0') FROM table_booking WHERE cust_id = '$cust_id' AND booking_status !='Cancelled' AND month(STR_TO_DATE(receipt_generated_date, '%Y-%m-%d')) = '$select_month'");

	$paid_amount = mysqli_fetch_row( $total_amount_paid );

	$total_amount_outstanding = $paid_amount[0] - $payable_amount[0];

}

$json[] = array(
            'payable_amount' 			=> $payable_amount[0],
            'paid_amount' 				=> $paid_amount[0],
            'total_amount_outstanding' 	=> $total_amount_outstanding,
            'cleaning_count' 			=> $cleaning_count
        );

	$jsonstring = json_encode($json);
    echo $jsonstring;

?>