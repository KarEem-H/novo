<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$filter_month = $_REQUEST['selected_month'];

if ($filter_month == 'January'){
	$select_month = '1';
}

if ($filter_month == 'February'){
	$select_month = '2';
}

if ($filter_month == 'March'){
	$select_month = '3';
}

if ($filter_month == 'April'){
	$select_month = '4';
}

if ($filter_month == 'May'){
	$select_month = '5';
}

if ($filter_month == 'June'){
	$select_month = '6';
}

if ($filter_month == 'July'){
	$select_month = '7';
}

if ($filter_month == 'August'){
	$select_month = '8';
}

if ($filter_month == 'September'){
	$select_month = '9';
}

if ($filter_month == 'October'){
	$select_month = '10';
}

if ($filter_month == 'November'){
	$select_month = '11';
}

if ($filter_month == 'December'){
	$select_month = '12';
}


	$call_date = date("d-m-Y");

    $tot_autodialer_calls = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as call_count FROM `auto_dialer` WHERE status='1' AND agent_remark != 'No Answer' AND call_date='$call_date'");

    $totcalls = mysqli_fetch_row($tot_autodialer_calls);
    $total_auto_calls = $totcalls[0];	

    $tot_whatsapp = mysqli_query($conn,"SELECT COUNT(id) as whatsapp_count FROM `table_outbound_calls` WHERE call_status='Send Whatsapp Message' AND call_date='$today_date'");

    $totwhatsapp = mysqli_fetch_row($tot_whatsapp);
    $total_whatsapp = $totwhatsapp[0];

	$total_complaints = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_complaints` WHERE AND status='Open'");

	$complaints = mysqli_fetch_row($total_complaints);
	$tot_complaints = $complaints[0];

	$json[]= array(

		'total_auto_calls' 	=> $total_auto_calls,
        'total_complaints' 	=> $tot_complaints,
        'total_whatsapp' 	=> $total_whatsapp,

	);
	
  
  	$jsonstring = json_encode($json);

	echo $jsonstring;


?>