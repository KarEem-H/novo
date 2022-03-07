<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
                                               
$rid = $_REQUEST['job_ref'];                   
    
$sql1 = mysqli_query($conn,"UPDATE maintenance_jobs SET `add_to_brilion` = 'Yes' WHERE id = '$rid'");

echo "Booking Added to Brilion!";

?>
