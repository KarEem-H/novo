<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
                                               
$row_id = $_REQUEST['row_id'];                     
$agent_name = $_REQUEST['agent_name'];                     
    
$sql1 = mysqli_query($conn,"UPDATE table_damac_booking SET `add_to_brilion` = 'Yes', `added_to_brilion_by` = '$agent_name' WHERE id = '$row_id'");

$booking_details = mysqli_query($conn,"SELECT t2.customer_mobile, t2.customer_id, t2.customer_name, t2.customer_email, t2.token, t1.id, t1.booking_date, t1.job_ref, t1.cust_id, t1.cleaning_date, t1.cleaning_time, t1.booking_time, t1.num_of_hours, t1.num_of_cleaners, t1.service_type_id, t1.service_type, t1.address,t1.area, t1.special_req, t1.building_type, t1.num_bedrooms, t1.materials, t1.balcony, t1.linen, t1.rate, t1.material_charges, t1.balcony_charges, t1.extra_charges, t1.cod_charges, t1.vat, t1.sub_total, t1.payment_method, t1.total, t1.additional_remarks, t1.agent_name, t1.source, t1.call_status, t1.payment_status, t1.is_feedback_enabled, t1.booking_status , t1.approved_by_ross, t1.approved_by_scheduler, t1.approved_by_coordinator, t1.agent_remark, t1.add_to_brilion, t1.added_to_brilion_by, t1.promo_code, t1.discount, t1.customer_ip FROM (SELECT id, booking_date, job_ref, cust_id, cleaning_date, cleaning_time, booking_time, num_of_hours, num_of_cleaners, service_type_id, service_type, address,area, special_req, building_type, num_bedrooms, materials, balcony, linen, rate, material_charges, balcony_charges, extra_charges, cod_charges, vat, sub_total, payment_method, total, additional_remarks, agent_name, source, call_status, payment_status, is_feedback_enabled, booking_status , approved_by_ross, approved_by_scheduler, approved_by_coordinator, agent_remark, add_to_brilion, added_to_brilion_by, promo_code, discount, customer_ip FROM table_damac_booking WHERE id = '$row_id') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile, customer_email, token FROM table_damac_contacts) t2 ON (t1.cust_id = t2.customer_id)");

$row = mysqli_fetch_assoc($booking_details);

$booking_date = $row['booking_date'];
$job_ref = $row['job_ref'];
$cust_id = $row['customer_id'];
$cust_name = $row['customer_name'];
$cust_mobile = $row['customer_mobile'];
$cust_email = $row['customer_email'];
$token = $row['token'];
$cleaning_date = $row['cleaning_date'];
$cleaning_time = $row['cleaning_time'];
$booking_time = $row['booking_time'];
$num_of_hours = $row['num_of_hours'];
$num_of_cleaners = $row['num_of_cleaners'];
$service_type_id = $row['service_type_id'];
$service_type = mysqli_real_escape_string($conn,$row['service_type']);
$address = mysqli_real_escape_string($conn,$row['address']);
$area = mysqli_real_escape_string($conn,$row['area']);
$special_req = mysqli_real_escape_string($conn,$row['special_req']);
$building_type = $row['building_type'];
$num_bedrooms = $row['num_bedrooms'];
$materials = $row['materials'];
$balcony = $row['balcony'];
$linen = $row['linen'];
$rate = $row['rate'];
$material_charges = $row['material_charges'];
$balcony_charges = $row['balcony_charges'];
$extra_charges = $row['extra_charges'];
$cod_charges = $row['cod_charges'];
$vat = $row['vat'];
$sub_total = $row['sub_total'];
$payment_method = $row['payment_method'];
$total = $row['total'];
$additional_remarks = $row['additional_remarks'];
$agent_name = $row['agent_name'];
$source = $row['source'];
$call_status = $row['call_status'];
$payment_status = $row['payment_status'];
$feedback = $row['is_feedback_enabled'];
$booking_status  = $row['booking_status']; 
$approved_by_ross = $row['approved_by_ross'];
$approved_by_scheduler = $row['approved_by_scheduler'];
$approved_by_coordinator = $row['approved_by_coordinator'];
$agent_remark = $row['agent_remark'];
$add_to_brilion = $row['add_to_brilion'];
$added_to_brilion_by = $row['added_to_brilion_by'];
$promo_code = $row['promo_code'];
$discount = $row['discount'];
$customer_ip = $row['customer_ip'];
$agent_name = $_SESSION['ADMIN_ID']['NAME'];


$sql = "INSERT INTO `table_booking` ( `booking_date`, `job_ref`, `cust_id`, `cleaning_date`, `cleaning_time`, `booking_time`, `num_of_hours`, `num_of_cleaners`, `service_type`, `address`,`area`, `special_req`, `building_type`, `num_bedrooms`, `materials`, `balcony`, `linen`, `rate`, `material_charges`, `extra_charges`, `cod_charges`, `vat`, `sub_total`, `payment_method`, `total`, `additional_remarks`, `agent_name`, `cleaner_allocated`, `source`, `call_type`, `payment_status`, `feedback`, `booking_status` , `approved_by_ross`, `approved_by_scheduler`, `approved_by_coordinator`, `agent_remark`,`add_to_brilion`,`added_to_brilion_by`) VALUES ( '$booking_date', '$job_ref', '$cust_id', '$cleaning_date', '$cleaning_time', '$booking_time', '$num_of_hours', '$num_of_cleaners', '$service_type', '$address', '$area', '$special_req', '$building_type', '$num_bedrooms', '$materials', '$balcony', '$linen', '$rate', '$material_charges', '$extra_charges', '$cod_charges', '$vat', '$sub_total', '$payment_method', '$total', '$additional_remarks', '$agent_name', '', '$source', '', '$payment_status','','$booking_status', 'No', 'No' , 'No', '','No','' );";

$sql .= "INSERT INTO `table_contacts` ( `customer_id`,`token`,`customer_name`,`customer_mobile`,`customer_email`,`address`,`DOB`,`gender`,`ownership`,`otp`,`mobile_num_verified`,`mobile_num_verified_time_date`,`created_date` ) VALUE ('$cust_id','$token','$cust_name','$cust_mobile','$cust_email','$address','','','','','0','','$today_date' ) ON DUPLICATE KEY UPDATE `address` = '$address',`customer_name` = '$cust_name',`customer_email` = '$cust_email'";

mysqli_multi_query($conn,$sql);

echo "Booking Successfully Created!";

?>
