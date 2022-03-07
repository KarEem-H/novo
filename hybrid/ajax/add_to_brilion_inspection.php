<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
                                               
$ID = $_REQUEST['row_id'];                     
$agent_name = $_REQUEST['agent_name'];                     
    
$sql1 = mysqli_query($conn,"UPDATE table_inspection SET `add_to_brilion` = 'Yes' WHERE id = '$ID'");

// echo "Inspection Added to Brilion!";

echo "UPDATE table_inspection SET `add_to_brilion` = 'Yes' WHERE id = '$ID'";

?>
