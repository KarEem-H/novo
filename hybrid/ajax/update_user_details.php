<?php 

include "../config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$row_id         	= $_REQUEST['row_id'];
$agent_name         = $_REQUEST['agent_name'];
$agent_password     = $_REQUEST['agent_password'];
$agent_role         = $_REQUEST['agent_role'];
$agent_extension    = $_REQUEST['agent_extension'];
$bookings           = $_REQUEST['bookings'];
$scheduler          = $_REQUEST['scheduler'];
$coordinator        = $_REQUEST['coordinator'];
$quotations         = $_REQUEST['quotations'];
$inspection         = $_REQUEST['inspection'];
$followup           = $_REQUEST['followup'];
$payments           = $_REQUEST['payments'];
$landing_page_leads = $_REQUEST['landing_page_leads'];
$complaints         = $_REQUEST['complaints'];
$maintenance         = $_REQUEST['maintenance'];
$reports            = $_REQUEST['reports'];
$user_access        = $_REQUEST['user_access'];
$status             = $_REQUEST['status'];


$sql = mysqli_query($conn,"UPDATE table_agents SET `agent_name` = '$agent_name', `agent_password` = '$agent_password', `agent_role` = '$agent_role', `agent_extension` = '$agent_extension', `bookings` = '$bookings', `scheduler` = '$scheduler', `coordinator` = '$coordinator', `quotations` = '$quotations', `inspection` = '$inspection', `followup` = '$followup', `payments` = '$payments', `landing_page_leads` = '$landing_page_leads', `complaints` = '$complaints', `maintenance` = '$maintenance', `reports` = '$reports', `user_access` = '$user_access', `status` = '$status' WHERE id = '$row_id'");

echo "User Details Updated";



  
?>