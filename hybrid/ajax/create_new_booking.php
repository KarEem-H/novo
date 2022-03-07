<?php 
include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$rndm_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXZ"), 0,6);

$unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E','Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

$bookingID = 'HIGI_'.$rndm_code;
$name = mysqli_real_escape_string($conn,$_REQUEST['cust_name']);
$mobile_num = $_REQUEST['cust_mobile'];
$address = mysqli_real_escape_string($conn,strtr( $_REQUEST['cust_address'], $unwanted_array ));
$email = mysqli_real_escape_string($conn,$_REQUEST['cust_email']);
$area = mysqli_real_escape_string($conn,$_REQUEST['area']);
$DOB = $_REQUEST['DOB'];
$gender = mysqli_real_escape_string($conn,$_REQUEST['gender']);
$ownership = mysqli_real_escape_string($conn,$_REQUEST['ownership']);
$special_req = mysqli_real_escape_string($conn,strtr($_REQUEST['special_req'], $unwanted_array ));
$cleaning_type = mysqli_real_escape_string($conn,$_REQUEST['cleaningType']);
$building_type = mysqli_real_escape_string($conn,$_REQUEST['buildingType']);
$num_bedrooms = mysqli_real_escape_string($conn,$_REQUEST['num_bedrooms']);
$num_hours = mysqli_real_escape_string($conn,$_REQUEST['num_hours']);
$num_cleaners = mysqli_real_escape_string($conn,$_REQUEST['num_cleaners']);
$material = mysqli_real_escape_string($conn,$_REQUEST['material']);
$balcony = mysqli_real_escape_string($conn,$_REQUEST['balcony']);
$linen = mysqli_real_escape_string($conn,$_REQUEST['linen']);
$material_charges = mysqli_real_escape_string($conn,$_REQUEST['material_charges']);
$booking_date = $today_date;
$booking_time = $current_time;
$servicedate = $_REQUEST['service_date'];
$serviceDate = strtotime($servicedate);
$service_date= date('Y-m-d', $serviceDate);
$service_slot = $_REQUEST['service_slot'];
$cod = mysqli_real_escape_string($conn,$_REQUEST['cod']);
$extra_charges = mysqli_real_escape_string($conn,$_REQUEST['extra_charges']);
$rate = mysqli_real_escape_string($conn,$_REQUEST['rate']);
$vat = mysqli_real_escape_string($conn,$_REQUEST['vat']);
$sub_total = mysqli_real_escape_string($conn,$_REQUEST['sub_total']);
$total = mysqli_real_escape_string($conn,$_REQUEST['total']);
$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$source = $_REQUEST['source'];
$call_type = $_REQUEST['call_type'];

$mobile = preg_replace('/[^\dxX]/', '', $mobile_num);

if ( '9710' == substr( $mobile, 0, 4 ) ){
	$mobile = '0' . substr($mobile,4);
}

if ( '971' == substr( $mobile, 0, 3 ) ){
	$mobile = '0' . substr($mobile,3);
}

if ( '5' == substr( $mobile, 0, 1 ) ){
    $mobile = '0' . $mobile;
}

$customer_details = mysqli_query($conn,"SELECT customer_id, customer_mobile FROM table_contacts WHERE customer_mobile = '$mobile'");

$row = mysqli_fetch_assoc($customer_details);

$contact_number = $row['customer_mobile'];
$contact_ID = $row['customer_id'];


if ($contact_number == $mobile ) {
	$cust_id = $contact_ID;
}else{
    
    $sql1 = mysqli_query($conn,"SELECT id FROM table_contacts ORDER BY id DESC LIMIT 1");

    $last_insert_id = mysqli_fetch_row($sql1);

	$cust_id = 'HIGI_C'.$last_insert_id[0];
}

$sql = mysqli_query($conn,"INSERT INTO `table_booking` ( `booking_date`, `job_ref`, `cust_id`, `cleaning_date`, `cleaning_time`, `booking_time`, `num_of_hours`, `num_of_cleaners`, `service_type`, `address`,`area`, `special_req`, `building_type`, `num_bedrooms`, `materials`, `balcony`, `linen`, `rate`, `material_charges`, `extra_charges`, `cod_charges`, `vat`, `sub_total`, `payment_mode`, `total`, `additional_remarks`, `agent_name`, `cleaner_allocated`, `source`, `call_type`, `payment_status`, `feedback`, `booking_status` , `approved_by_ross`, `approved_by_scheduler`, `approved_by_coordinator`, `agent_remark`,`add_to_brilion`,`added_to_brilion_by`,`receipt_amount`,`receipt_generated_date`,`status_by_finance`,`finance_notes`,`receipt_ref`,`cleaners`,`driver`) VALUES ( '$booking_date', '$bookingID', '$cust_id', '$service_date', '$service_slot', '$booking_time', '$num_hours', '$num_cleaners', '$cleaning_type', '$address', '$area', '$special_req', '$building_type', '$num_bedrooms', '$material', '$balcony', '$linen', '$rate', '$material_charges', '$extra_charges', '$cod', '$vat', '$sub_total', '', '$total', '', '$agent_name', '', '$source', '$call_type', 'Not Paid','','Completed', 'No', 'No' , 'No', '','No','','','','Not Paid','','','','' )");

$sql1 = mysqli_query($conn,"INSERT INTO `table_contacts` ( `customer_id`,`customer_name`,`customer_mobile`,`customer_email`,`address`,`dob`,`gender`,`ownership`,`primary_source`,`created_date` ) VALUE ('$cust_id','$name','$mobile','$email','$address','$DOB','$gender','$ownership','$source','$today_date' ) ON DUPLICATE KEY UPDATE `address` = '$address',`customer_name` = '$name',`customer_email` = '$email',`ownership` = '$ownership',`DOB` = '$DOB',`gender` = '$gender',`created_date` = '$created_date'");

// mysqli_multi_query($conn,$sql);

echo "Booking Created Successfully!!!";


?>
