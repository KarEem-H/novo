<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$job_ref = $_REQUEST['job_ref'];
$cust_id = $_REQUEST['cust_id'];
$cleaning_date = $_REQUEST['cleaning_date'];
$cleaner_on_time = $_REQUEST['cleaner_on_time'];
$uniform = $_REQUEST['uniform'];
$followed_instruction = $_REQUEST['followed_instruction'];
$completed_on_time = $_REQUEST['completed_on_time'];
$attitude = $_REQUEST['attitude'];
$cleaner_name = $_REQUEST['cleaner_name'];
$regular = $_REQUEST['regular'];
$rating = $_REQUEST['rating'];
$remarks = mysqli_real_escape_string($conn,$_REQUEST['remarks']);
$size_of_apartment = $_REQUEST['size_of_apartment'];

$agent_name = $_SESSION['ADMIN_ID']['NAME'];


$sql1 = "INSERT INTO `table_feedback` ( `customer_id`, `job_ref`, `date_of_service`, `cleaner_name`, `cleaner_on_time`, `wearing_uniform`, `good_attitude`, `asked_followed_instruction`, `completed_task_on_time`, `regular`, `rating`, `remarks`, `agent_name`, `feedback_date`, `size_of_apartment`) VALUES ( '$cust_id', '$job_ref', '$cleaning_date', '$cleaner_name', '$cleaner_on_time', '$uniform', '$attitude', '$followed_instruction', '$completed_on_time', '$regular', '$rating', '$remarks', '$agent_name','$today_date','$size_of_apartment' );";

$sql1 .= "UPDATE `table_booking` SET  `feedback` = 'Yes' WHERE `job_ref` = '$job_ref'";


mysqli_multi_query($conn,$sql1);


echo "Feedback Submitted Successfully!!!";


?>