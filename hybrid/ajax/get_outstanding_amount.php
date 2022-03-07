<?php 

	include "../config/connection.php";


	$cust_id = $_REQUEST['cust_id'];

	$job_details = mysqli_query($conn,"SELECT ROUND(SUM(outstanding - paid_amount),'2') as outstanding FROM table_unpaid_jobs WHERE payment_status !='Paid' AND cust_id = '$cust_id'");

	$row1=mysqli_fetch_assoc($job_details);

	$outstanding = $row1['outstanding'];

	echo $outstanding;


?>