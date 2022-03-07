<?php 

include "../config/connection.php";
$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$created_at = $today_date.' '.$current_time;

error_reporting(1);

$job_ref = $_REQUEST['job_ref'];
$receipt_amount = str_replace(",", '',$_REQUEST['receipt_amount']);
$payment_type = $_REQUEST['payment_type'];
$paymentDate = $_REQUEST['payment_date'];
$payment_Date = strtotime($paymentDate);
$payment_date= date('Y-m-d', $payment_Date);
$receipt_ref = $_REQUEST['receipt_ref'];
$remarks = $_REQUEST['remarks'];
$agent_name = $_SESSION['ADMIN_ID']['NAME'];

$get_cust_details = mysqli_query($conn,"SELECT t1.cust_id,t1.total, t2.customer_name,t2.customer_mobile FROM (SELECT cust_id,total FROM table_booking WHERE job_ref = '$job_ref') t1 LEFT JOIN (SELECT customer_name, customer_id, customer_mobile FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");

$cust_details=mysqli_fetch_assoc($get_cust_details);

$cust_id = $cust_details['cust_id'];
$customer_name = $cust_details['customer_name'];
$customer_mobile = $cust_details['customer_mobile'];
$job_amount = $cust_details['total'];

    $insert_receipt = mysqli_query($conn,"INSERT INTO table_receipt SET `receipt_amount` = '$receipt_amount', `cust_id` = '$cust_id',`customer_name` = '$customer_name', `customer_mobile` = '$customer_mobile', `receipt_ref` = '$receipt_ref', `payment_date` = '$payment_date', `payment_by` = '$agent_name', `payment_mode` = '$payment_type',`agent_remarks` = '$remarks',`created_at` = '$created_at'");

    $new_total = ROUND($job_amount,'2');

        if ($receipt_amount >= $new_total){

         mysqli_query($conn,"UPDATE table_booking SET `receipt_amount` = '$new_total',`status_by_finance` = 'Paid',`payment_status` = 'Paid',`receipt_generated_date` = '$today_date' WHERE `job_ref` = '$job_ref'");
        }

        if ($receipt_amount < $new_total){

         mysqli_query($conn,"UPDATE table_booking SET `receipt_amount` = '$receipt_amount',`status_by_finance` = 'Partially Paid', `receipt_generated_date` = '$today_date',`payment_status` = 'Partially Paid' WHERE `job_ref` = '$job_ref'");
        }
        

        $markpaid = mysqli_query($conn,"SELECT id,STR_TO_DATE(cleaning_date, '%Y-%m-%d') as jobdate, cust_id, job_ref, total, receipt_amount,total-receipt_amount as outstanding FROM table_booking WHERE cust_id = '$cust_id' AND booking_status !='Cancelled' AND (status_by_finance = 'Not Paid' OR status_by_finance = 'Partially Paid') ORDER BY jobdate ASC");

            while ($row = $markpaid->fetch_assoc()) {
            
            $result[] = $row;

            $invoice = ROUND($row['total'],'2');
            $outstanding = $row['outstanding'];
            $job_id = $row['job_ref'];
            $Id = $row['id'];
            
            $knockoff1 = mysqli_query($conn,"SELECT (IFNULL(paid_amount,'0') - IFNULL(receipt_amount,'0')) AS total FROM (SELECT SUM(receipt_amount) as paid_amount, cust_id FROM table_receipt GROUP BY cust_id) t1 LEFT JOIN (SELECT SUM(receipt_amount) as receipt_amount, cust_id, total FROM table_booking WHERE booking_status !='Cancelled' GROUP BY cust_id) t2 ON (t1.cust_id = t2.cust_id) WHERE t1.cust_id = '$cust_id'");

            $new_tot = mysqli_fetch_row($knockoff1);
            $new_total = ROUND($new_tot[0],'2');

            if ($outstanding <= $new_total){

                mysqli_query($conn,"UPDATE table_booking SET `receipt_amount` = '$invoice',`status_by_finance` = 'Paid', payment_status = 'Paid' ,`receipt_generated_date` = '$today_date' WHERE `cust_id` = '$cust_id' AND `id` = '$Id'");
            }
            
            if ($new_total > 0 && $new_total < $outstanding){

                mysqli_query($conn,"UPDATE table_booking SET `receipt_amount` = '$new_total',`status_by_finance` = 'Partially Paid', payment_status = 'Partially Paid', `receipt_generated_date` = '$today_date' WHERE `cust_id` = '$cust_id' AND `id` = '$Id'");

            }
            
        }

        
   
?>