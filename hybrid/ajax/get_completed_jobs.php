<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("d-m-Y");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT t1.id, t1.quotation_id, t1.job_sheet_id, t1.booking_date, t1.cust_name, t1.cust_mobile, t1.cust_email, t1.cust_address, t1.service, t1.technician, t1.agent_name, t1.agent_remark, t1.jobsheet_status, t1.job_status_changed_date,t2.quotation_rate FROM (SELECT id, quotation_id,job_sheet_id, booking_date, cust_name, cust_mobile, cust_email, cust_address, service, technician, agent_name, agent_remark, jobsheet_status, job_status_changed_date FROM table_jobs WHERE jobsheet_status = 'Completed') t1 LEFT JOIN (SELECT quotation_id,quotation_rate FROM table_quotations) t2 ON (t1.quotation_id = t2.quotation_id)");


while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>