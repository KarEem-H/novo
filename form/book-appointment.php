<?php

session_start();

header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "higiae_jijo";
$password = "Higi@2021!";
$dbname = "higiae_telesalesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{	
	echo "Connection Error";
    die("Connection failed: " . $conn->connect_error);
}

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$_SESSION['counter'] = 0;

$rndm_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXZ"), 0,6);

$booking_ref          = 'HIGI_W_'.$rndm_code;
$booking_date         = $today_date;
$name                 = $_POST['name'];
$mobile_num           = $_POST['mobile'];
$email                = $_POST['email'];
$region               = $_POST['region'];
$address              = mysqli_real_escape_string($conn,$_POST['address']);
$service_type         = $_POST['service_type'];
if($service_type == 'Normal Cleaning'){

$num_hours            = $_POST['num_hours'];
$num_cleaners         = $_POST['num_cleaners'];
$num_bedroom          = '-';

}
$building_type        = $_POST['building_type'];

if($service_type == 'Deep Cleaning'){

$num_bedroom           = $_POST['num_bedroom'];

$num_hours            = $_POST['num_hours'];
$num_cleaners         = $_POST['num_cleaners'];

}
$building_type        = $_POST['building_type'];
$special_req          = mysqli_real_escape_string($conn,$_POST['special_req']);
$servicedate          = $_POST['service_date'];
$serviceDate          = strtotime($servicedate);
$service_date         = date('Y-m-d', $serviceDate);
$service_time         = $_POST['service_time'];

if($_POST['cleaning_material'] == "on"){
   $cleaning_material    = "Yes"; 
}else{
   $cleaning_material    = "No"; 
}

$material_charge      = $_POST['material_charge'];
$sub_total            = $_POST['sub_total'];
$vat                  = $_POST['vat'];
$cod                  = $_POST['cod'];
$total                = $_POST['total'];
$payment_method       = $_POST['payment_method'];
$service_name         = $service_type;
$source               = "Website";

$_SESSION['booking_ref'] = $booking_ref;

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

// EMAIL SCRIPT

    $mail = $_POST['email'];
    $to = "abdul.wahab@higitech-me.com, shahzad@higitech-me.com, jen.castillo@higitech-me.com, info@higitech-me.com, higisales2@higitech-me.com";
    $subject = "Booking from Higitech Website";
    $headers = "From: Higitech <info@higitech.ae>";
    $message = "DETAILS\n";
    $message .= "\nName: " . $name;
    $message .= "\nMobile: " . $mobile;
    $message .= "\nEmail: " . $email;
    $message .= "\nArea: " . $region;
    $message .= "\nAddress: " . $address;
    $message .= "\nBuilding Type: " . $building_type;
    $message .= "\nNum of Hours: " . $num_hours;
    $message .= "\nNum of Cleaners: " . $num_cleaners;
    $message .= "\nNum of Bedrooms: " . $num_bedroom;
    $message .= "\nService Date: " . $service_date;
    $message .= "\nService Time: " . $service_time;
    if( isset( $_POST['special_req'] ) && $_POST['special_req']) {
    $message .= "\nSpecial notes: " . $special_req;
    }
    $message .= "\nCleaning Material: " . $cleaning_material;
    $message .= "\nMaterial Charge: " . $material_charge;
    $message .= "\nSub Total: " . $sub_total;
    $message .= "\nVAT: " . $vat;
    $message .= "\nCOD: " . $cod;
    $message .= "\nTotal: " . $total;
    $message .= "\nPayment Method: " . $payment_method;



 //Confirmation page
    $user = "$mail";
    $usersubject = "Thank You";
    $userheaders = "From: Higitech ME <info@higitech-me.com>\n";
    $usermessage = "Thank you for your time. Your booking is successfully submitted. We will reply shortly or call us at 800 463.\n\nBELOW A SUMMARY\n\n$message"; 



if($_SESSION['counter'] == 0){


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

$sql = mysqli_query($conn,"INSERT INTO `table_booking` ( `booking_date`, `job_ref`, `cust_id`, `cleaning_date`, `cleaning_time`, `booking_time`, `num_of_hours`, `num_of_cleaners`, `service_type`, `address`,`area`, `special_req`, `building_type`, `num_bedrooms`, `materials`, `balcony`, `linen`, `rate`, `material_charges`, `extra_charges`, `cod_charges`, `vat`, `sub_total`, `payment_mode`, `total`, `additional_remarks`, `agent_name`, `cleaner_allocated`, `source`, `call_type`, `payment_status`, `feedback`, `booking_status` , `approved_by_ross`, `approved_by_scheduler`, `approved_by_coordinator`, `agent_remark`,`add_to_brilion`,`added_to_brilion_by`,`receipt_amount`,`receipt_generated_date`,`status_by_finance`,`finance_notes`,`receipt_ref`,`cleaners`,`driver`) VALUES ( '$booking_date', '$booking_ref', '$cust_id', '$service_date', '$service_time', '$current_time', '$num_hours', '$num_cleaners', '$service_name', '$address', '$region', '$special_req', '$building_type', '$num_bedroom', '$cleaning_material', '', '', '', '$material_charge', '', '$cod', '$vat', '$sub_total', '$payment_method', '$total', '', 'Jen', '', '$source', '', 'Not Paid','','Completed', 'No', 'No' , 'No', '','No','','','','Not Paid','','','','' )");

$sql1 = mysqli_query($conn,"INSERT INTO `table_contacts` ( `customer_id`,`customer_name`,`customer_mobile`,`customer_email`,`address`,`dob`,`gender`,`ownership`,`primary_source`,`created_date` ) VALUE ('$cust_id','$name','$mobile','$email','$address','','','','$source','$today_date' ) ON DUPLICATE KEY UPDATE `address` = '$address', `customer_email` = '$email',`created_date` = '$today_date'");

// EMAIL
    $sentOk = mail($to,$subject,$message,$headers);
    mail($user,$usersubject,$usermessage,$userheaders);


$_SESSION['counter'] = 1;


}
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Book Now" />
<meta name="description" content="Book Now - Higitec" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Book Now | Higitech Middle East</title>

    
      <style>
  #telr {
    width: 100%;
    min-width: 600px;
    height: 600px;
    frameborder: 0;
  }
</style>

    
</head>
<body>

    <!--page start-->
    <div class="page">

    <?php if($payment_method=='cash') { 

        echo "<script type='text/javascript'>location.href = 'https://higitech.me/thank-you.php';</script>";

     } ?>
</div>

</body>
<?php

 if($payment_method!='cash') { 


$params = array(
        'ivp_method'  => 'create',
        'ivp_store'   => '25698',
        'ivp_authkey' => '35Pg#vqLcW^Zgzt3',
        'ivp_cart'    => $booking_ref,  
        'ivp_test'    => '0',
        'ivp_amount'  => $total,
        'ivp_currency'=> 'AED',
        'ivp_desc'    => $service_type,
        'bill_fname'  => $name,
        'bill_sname'  => ' ',
        'bill_phone'  => $mobile,
        'bill_addr1'  => $address,
        'bill_city'  => 'Dubai',
        'bill_country'  => 'AE',
        'bill_email'  => $email,
        'return_auth' => 'https://higitech.me/thank-you.php',
        'return_can'  => 'https://higitech.me/failed.php',
        'return_decl' => 'https://higitech.me/failed.php'
    );


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://secure.telr.com/gateway/order.json");
curl_setopt($ch, CURLOPT_POST, count($params));
curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$results = curl_exec($ch);
curl_close($ch);
$results = json_decode($results,true);
$ref= trim($results['order']['ref']);
$url= trim($results['order']['url']);
echo "<script> location.href='$url'; </script>";
if (empty($ref) || empty($url)) {
# Failed to create order
}

}

?>

</html>