<?php 

include "../config/connection.php";

$today_date = date("d-m-Y");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$cust_id = $_REQUEST['cust_id'];
$status = $_REQUEST['payment_status'];
$get_paid_amount = $_REQUEST['paid_amount'];
$agent_remark = $_REQUEST['agent_remark'];
$agent_name = $_SESSION['ADMIN_ID']['NAME'];

if($status == 'Paid' || $status == 'Partially Paid'){

$sql = mysqli_query($conn,"INSERT table_collections (`cust_id`,`paid_amount`,`paid_date`,`paid_time`,`agent_name`,`agent_remark`,`approved`,`approved_by_ross`) VALUES ('$cust_id','$get_paid_amount','$today_date','$current_time','$agent_name','$agent_remark','No','No')");


$knockoff = mysqli_query($conn,"SELECT t1.cust_id, IFNULL(paid_amount,'0') as Paid_Amount, (IFNULL(paid_amount,'0') - IFNULL(receipt_amount,'0')) AS total FROM (SELECT cust_id, SUM(paid_amount) as receipt_amount FROM table_unpaid_jobs GROUP BY cust_id) t1 LEFT JOIN (SELECT SUM(paid_amount) as paid_amount, cust_id FROM table_collections GROUP BY cust_id) t2 ON (t2.cust_id = t1.cust_id) WHERE t1.cust_id = '$cust_id'");

$cs = mysqli_fetch_row($knockoff);
$total = $cs[2];

$markpaid = mysqli_query($conn,"SELECT id,STR_TO_DATE(service_date, '%d-%m-%Y') as jobdate, cust_id, job_ref, outstanding, (outstanding - paid_amount) as new_outstanding FROM table_unpaid_jobs WHERE cust_id = '$cust_id' AND payment_status != 'Paid' ORDER BY jobdate ASC");

	while ($row = $markpaid->fetch_assoc()) {

	$result[] = $row;

    $Id 				= $row['id'];
    $cust_id 			= $row['cust_id'];
    $job_ref 			= $row['job_ref'];
    $outstanding 		= $row['new_outstanding'];

    $knockoff1 = mysqli_query($conn,"SELECT (IFNULL(paid_amount,'0') - IFNULL(receipt_amount,'0')) AS total FROM (SELECT cust_id, SUM(paid_amount) as receipt_amount FROM table_unpaid_jobs GROUP BY cust_id) t1 LEFT JOIN (SELECT SUM(paid_amount) as paid_amount, cust_id FROM table_collections GROUP BY cust_id) t2 ON (t2.cust_id = t1.cust_id) WHERE t1.cust_id = '$cust_id'");

    $new_tot = mysqli_fetch_row($knockoff1);
    
    $new_out = ROUND($new_tot[0],'2');

    if ($outstanding <= $new_out){

    	mysqli_query($conn,"UPDATE table_unpaid_jobs SET `payment_status` = 'Paid',`paid_amount` = '$outstanding',`payment_collected_by` = '$agent_name', `agent_remarks` = '$agent_remark',`status_changed_date` = '$today_date',`status_changed_time` = '$current_time' WHERE id = '$Id'");

    }

    if ($new_out > 0 && $new_out < $outstanding){

    	mysqli_query($conn,"UPDATE table_unpaid_jobs SET `payment_status` = 'Partially Paid',`paid_amount` = '$new_out',`payment_collected_by` = '$agent_name', `agent_remarks` = '$agent_remark',`status_changed_date` = '$today_date',`status_changed_time` = '$current_time' WHERE id = '$Id'");

    }

}

}else{

	mysqli_query($conn,"UPDATE table_unpaid_jobs SET `payment_status` = '$status',`payment_collected_by` = '$agent_name', `agent_remarks` = '$agent_remark',`status_changed_date` = '$today_date',`status_changed_time` = '$current_time' WHERE cust_id = '$cust_id' AND payment_status !='Paid'");

}



   
?>