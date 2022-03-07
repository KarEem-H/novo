<?php include "../config/connection.php";
    
    error_reporting(1);
    
    $today_date = date("Y-m-d");
    date_default_timezone_set("Asia/Dubai");
    $current_time = date("h:i");
    
    $contact_number = $_POST['contactnumber'];
    $agent_extension = $_POST['agentextension'];
    
    $get_agent_name = mysqli_query($conn,"SELECT agent_name FROM table_agents WHERE agent_extension = '$agent_extension'");

    $res = mysqli_fetch_row($get_agent_name);
    $agent_name = $res[0];


    $call_duration = $_POST['callduration'];
    $description = $_POST['description'];
    $call_date_time = $_POST['calldatetime'];

    $trim = explode( ': ', $description );
    $trim_description = $trim[1];

    if($trim_description == ''){
        $trim_description = $description;
    }

    $sql = mysqli_query($conn,"INSERT INTO calls ( `contactnumber`,`agentextension`,`agent_name`,`description`,`agent_remarks`,`calldatetime`,`call_date`,`call_time`,`callduration` ) VALUES ('$contact_number', '$agent_extension','$agent_name', '$trim_description', '','$call_date_time', '$today_date', '$current_time', '$call_duration')");

    $sql1 = mysqli_query($conn,"UPDATE auto_dialer SET `callduration` = '$call_duration' WHERE mobile = '$contact_number' AND status = '1' AND callduration = '' ORDER BY id DESC LIMIT 1");
    

?>