<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$sql = mysqli_query($conn,"SELECT t1.id,t1.mid,t1.quotation_id,t1.status,t1.title,t1.details,t1.source,t1.agent_name,t1.tenant_full_name,t1.tenant_phone,t1.property_name,t1.property_address,t1.add_to_brilion,t1.available_date,t1.time_slot,t1.schedule_date,t1.schedule_time,t2.quotation_rate FROM (SELECT id,mid,quotation_id,status,title,details,source,agent_name,tenant_full_name,tenant_phone,property_name,property_address,add_to_brilion,available_date,time_slot,schedule_date,schedule_time from maintenance_jobs WHERE approved_by_coordinator !='Yes') t1 LEFT JOIN (SELECT quotation_id,quotation_rate FROM table_quotations) t2 ON (t1.quotation_id = t2.quotation_id)");


while ($row = $sql->fetch_assoc()) {
	if($row['quotation_id'] != ''){
		$row['available_date'] = $row['schedule_date'];
		$row['time_slot'] = $row['schedule_time'];
	}

    $result[] = $row; 
    
}


$my_result = json_encode($result);

if ('null' != $my_result){

echo $my_result;

}

?>