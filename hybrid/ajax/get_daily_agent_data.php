<?php 

	include "../config/connection.php";

	error_reporting(1);

	$filter_value = $_REQUEST['filter'];

	$current_month = date('m');

	if( $filter_value == 'Today'){

		$today_date = date("Y-m-d");
		$today_date_2 = date("m-d-Y");
		$today_date_3 = date("d-m-Y");

	} 

	if( $filter_value == 'Yesterday'){

		$today_date = date("Y-m-d");
		$next_day = date("d-m-Y");

		$date = explode('-', $today_date);

		$yesterday = date('d')-1;

		if(strlen($yesterday)=='1'){
			$yesterday = '0'.$yesterday;
		}

		$date[2] = $yesterday;

		$date = implode('-', $date);

		$today_date   = date("Y-m-d", strtotime($date));
		$today_date_2 = date("m-d-Y", strtotime($date));
		$today_date_3 = date("d-m-Y", strtotime($date));

	}

	if( $filter_value == 'Current Month'){

		$current_month = date('m');
	}

	if( $filter_value == 'Last Month'){

		$current_month = date('m')-1;
	}

	if( $filter_value == 'All'){

		$total_bookings = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_count FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE booking_status != 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_revenue = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(revenue,'0') as total_revenue FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT SUM(total) as revenue, agent_name FROM `table_booking` WHERE booking_status != 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_cancelled = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_cancelled FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE booking_status = 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_quotation = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_quotation FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_quotations` GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_inbound_calls = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(call_count,'0') as total_inbound_calls FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(contactnumber) as call_count, agent_name FROM `calls` WHERE description ='Inbound Call' AND contactnumber NOT IN (SELECT mobile FROM auto_dialer) GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_outbound_calls = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_outbound_calls FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `calls` WHERE description ='Outbound Call' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_inspection = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_inspection FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_inspection` GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_won = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_won FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_quotations` WHERE quotation_status='Won' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_quotation_revenue = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(revenue,'0') as total_quotation_revenue FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT SUM(quotation_rate) as revenue, agent_name FROM `table_quotations` WHERE quotation_status = 'Won' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		
	}

	if( $filter_value == 'Current Month' || $filter_value == 'Last Month'){

		$total_bookings = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_count FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE month(STR_TO_DATE(booking_date, '%Y-%m-%d')) = '$current_month' AND booking_status != 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_revenue = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(revenue,'0') as total_revenue FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT SUM(total) as revenue, agent_name FROM `table_booking` WHERE month(STR_TO_DATE(booking_date, '%Y-%m-%d')) = '$current_month' AND booking_status != 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_cancelled = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_cancelled FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE month(STR_TO_DATE(booking_date, '%Y-%m-%d')) = '$current_month' AND booking_status = 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_quotation = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_quotation FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_quotations` WHERE month(STR_TO_DATE(created_date, '%Y-%m-%d')) = '$current_month' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_inbound_calls = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(call_count,'0') as total_inbound_calls FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(contactnumber) as call_count, agent_name FROM `calls` WHERE month(STR_TO_DATE(call_date, '%Y-%m-%d')) = '$current_month' AND description ='Inbound Call' AND contactnumber NOT IN (SELECT mobile FROM auto_dialer WHERE month(STR_TO_DATE(call_date, '%d-%m-%Y')) = '$current_month') GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_outbound_calls = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_outbound_calls FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `calls` WHERE month(STR_TO_DATE(call_date, '%Y-%m-%d')) = '$current_month' AND description ='Outbound Call' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_inspection = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_inspection FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_inspection` WHERE month(STR_TO_DATE(created_date, '%Y-%m-%d')) = '$current_month' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_won = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_won FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_quotations` WHERE month(STR_TO_DATE(created_date, '%Y-%m-%d')) = '$current_month' AND quotation_status='Won' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

		$total_quotation_revenue = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(revenue,'0') as total_quotation_revenue FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT SUM(quotation_rate) as revenue, agent_name FROM `table_quotations` WHERE month(STR_TO_DATE(created_date, '%Y-%m-%d')) = '$current_month' AND quotation_status = 'Won' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
	}



	if( $filter_value == 'Today' || $filter_value == 'Yesterday'){

		$total_bookings = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_count FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE booking_date = '".$today_date."' AND booking_status != 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_revenue = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(revenue,'0') as total_revenue FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT SUM(total) as revenue, agent_name FROM `table_booking` WHERE booking_date = '".$today_date."' AND booking_status != 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_cancelled = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_cancelled FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE booking_date = '".$today_date."' AND booking_status = 'Cancelled' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_quotation = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_quotation FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_quotations` WHERE created_date = '".$today_date."' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_inbound_calls = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(call_count,'0') as total_inbound_calls FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(contactnumber) as call_count, agent_name FROM `calls` WHERE call_date = '".$today_date."' AND description ='Inbound Call' AND contactnumber NOT IN (SELECT mobile FROM auto_dialer WHERE call_date='".$today_date_3."') GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_outbound_calls = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_outbound_calls FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `calls` WHERE call_date = '".$today_date."' AND description ='Outbound Call' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_inspection = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_inspection FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_inspection` WHERE created_date = '".$today_date."' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_won = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(booking_count,'0') as total_won FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT COUNT(id) as booking_count, agent_name FROM `table_quotations` WHERE created_date = '".$today_date."' AND quotation_status='Won' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");
		

		$total_quotation_revenue = mysqli_query($conn,"SELECT t1.agent_name, IFNULL(revenue,'0') as total_quotation_revenue FROM (SELECT agent_name FROM `table_agents` WHERE agent_role = 'Telesales' OR agent_role = 'Scheduler') t1 LEFT JOIN (SELECT SUM(quotation_rate) as revenue, agent_name FROM `table_quotations` WHERE created_date = '".$today_date."' AND quotation_status = 'Won' GROUP BY agent_name) t2 ON (t2.agent_name = t1.agent_name)");

	}

	


	while ($row = $total_bookings->fetch_assoc()) {
	
	    $bookings[] = $row;

	}

	while ($row1 = $total_revenue->fetch_assoc()) {
	
	    $revenue[] = $row1;

	}

	while ($row2 = $total_cancelled->fetch_assoc()) {
	
	    $cancelled[] = $row2;

	}

	while ($row3 = $total_quotation->fetch_assoc()) {
	
	    $converted[] = $row3;

	}

	while ($row4 = $total_inbound_calls->fetch_assoc()) {
	
	    $inboundcalls[] = $row4;

	}

	while ($row5 = $total_outbound_calls->fetch_assoc()) {
	
	    $outboundcalls[] = $row5;

	}

	while ($row6 = $total_inspection->fetch_assoc()) {
	
	    $inspection[] = $row6;

	}

	while ($row7 = $total_won->fetch_assoc()) {
	
	    $quotation_won[] = $row7;

	}

	while ($row8 = $total_quotation_revenue->fetch_assoc()) {
	
	    $quotation_revenue[] = $row8;

	}



	foreach(array_merge((array)$bookings, (array)$revenue, (array)$cancelled, (array)$converted, (array)$inboundcalls, (array)$outboundcalls, (array)$inspection, (array)$quotation_won, (array)$quotation_revenue) as $array){
	      if(isset($result[$array['agent_name']])){
	          $result[$array['agent_name']]['total_count']+=$array['total_count'];
	          $result[$array['agent_name']]['total_revenue']+=$array['total_revenue'];
	          $result[$array['agent_name']]['total_cancelled']+=$array['total_cancelled'];
	          $result[$array['agent_name']]['total_quotation']+=$array['total_quotation'];
	          $result[$array['agent_name']]['total_inbound_calls']+=$array['total_inbound_calls'];
	          $result[$array['agent_name']]['total_outbound_calls']+=$array['total_outbound_calls'];
	          $result[$array['agent_name']]['total_inspection']+=$array['total_inspection'];
	          $result[$array['agent_name']]['total_won']+=$array['total_won'];
	          $result[$array['agent_name']]['total_quotation_revenue']+=$array['total_quotation_revenue'];
	      }else{
	          $result[$array['agent_name']]=$array;
	      }
	  }
  
  	$results=array_values($result);

	$final = json_encode($results);

	echo $final;

?>