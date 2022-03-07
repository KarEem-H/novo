<?php 

include "../config/connection.php";

error_reporting(1);

$sql = mysqli_query($conn,"SELECT t1.id,t1.quotation_id, t1.quotation_date, t1.customer_name, t1.customer_mobile, t1.customer_address, t1.service, t1.quotation_rate, t2.start_date, t2.start_time, t2.end_time, t1.job_scheduled, t1.agent_remarks FROM (SELECT id,quotation_id, quotation_date, customer_name, customer_mobile, customer_address, service, quotation_rate, job_scheduled, agent_remarks FROM `table_quotations` WHERE quotation_status = 'Won' AND job_scheduled ='No') t1 LEFT JOIN ( SELECT start_date, start_time, end_time,quotation_id FROM table_jobs GROUP BY quotation_id) t2 ON (t2.quotation_id = t1.quotation_id) ORDER BY quotation_id ASC");

while ($row = $sql->fetch_assoc()) {
	
$result[] = $row; 
    
}

$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>