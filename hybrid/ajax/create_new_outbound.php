<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	
$name = mysqli_real_escape_string($conn,$_REQUEST['cust_name']);
$mobile = $_REQUEST['cust_mobile'];
$email = $_REQUEST['cust_email'];
$cust_address = mysqli_real_escape_string($conn,strtr( $_REQUEST['cust_address'], $unwanted_array ));
$area = $_REQUEST['area'];
$lead_id = $_REQUEST['lead_id'];
$service = $_REQUEST['service_type'];
$service_date = $_REQUEST['service_date'];
$service_slot = $_REQUEST['service_slot'];
$technician = $_REQUEST['technician'];
$status = mysqli_real_escape_string($conn,$_REQUEST['call_status']);
$source = mysqli_real_escape_string($conn,$_REQUEST['call_source']);
$call_type = mysqli_real_escape_string($conn,$_REQUEST['call_type']);
$agent_remarks = mysqli_real_escape_string($conn,$_REQUEST['special_req']);
$agent_name = $_SESSION['ADMIN_ID']['NAME'];

$sql = mysqli_query($conn,"INSERT INTO table_outbound_calls ( `customer_name`,`customer_mobile`,`call_status`,`call_source`,`call_date`,`call_time`,`agent_name`,`call_type`,`agent_remarks` ) VALUES ('$name', '$mobile', '$status', '$source', '$today_date', '$current_time', '$agent_name','$call_type','$agent_remarks')");

$sql1 = mysqli_query($conn,"UPDATE calls SET agent_remarks='$agent_remarks' WHERE contactnumber = '$mobile' ORDER BY id DESC LIMIT 1");
    
if($source == 'Landing Page' || $source == 'Website'){

	$sql2 = mysqli_query($conn,"UPDATE table_leads SET `lead_status` = '$status' WHERE id = '$lead_id'");
	
}

if($source == 'Auto Dialer'){
    
    $sql3 = mysqli_query($conn,"UPDATE auto_dialer SET `call_status` = '$status' ,`agent_remark` = '$agent_remarks',`name` = '$name' WHERE mobile = '$mobile' ORDER BY id DESC");

}


    


    


?>