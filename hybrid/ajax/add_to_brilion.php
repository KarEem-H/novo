<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
                                               
$ID = $_REQUEST['job_ref'];                     
$agent_name = $_REQUEST['agent_name'];                     
    
$sql1 = mysqli_query($conn,"UPDATE table_booking SET `add_to_brilion` = 'Yes', `added_to_brilion_by` = '$agent_name' WHERE id = '$ID'");

echo "Booking Added to Brilion!";

?>
