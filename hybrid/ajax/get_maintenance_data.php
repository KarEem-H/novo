<?php 

	include "../config/connection.php";

	error_reporting(1);

	$filter_value = $_REQUEST['filter'];

	$current_month = date('m');

	if( $filter_value == 'Today'){

		$today_date = date("Y-m-d");
		$quotation_date = date("d-m-Y");
	}

	if( $filter_value == 'Yesterday'){

		$today_date = date("Y-m-d");

		$date = explode('-', $today_date);

		$yesterday = date('d')-1;

		if(strlen($yesterday)=='1'){
			$yesterday = '0'.$yesterday;
		}

		$date[2] = $yesterday;

		$date = implode('-', $date);

		$today_date   = date("Y-m-d", strtotime($date));
		$quotation_date = date("d-m-Y", strtotime($date));

	}

	if( $filter_value == 'Today' || $filter_value == 'Yesterday'){

		$tot_inspection = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as inspections FROM `table_inspection` WHERE created_date = '$today_date'");

	    $tot_quotation = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as quotations FROM `table_quotations` WHERE quotation_date = '$quotation_date'");

		$tot_quotation_won = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as won FROM `table_quotations` WHERE status_changed_date = '$today_date' AND quotation_status = 'Won'");

		$tot_revenue = mysqli_query($conn,"SELECT IFNULL(SUM(quotation_rate),'0') as revenue FROM `table_quotations` WHERE status_changed_date = '$today_date' AND quotation_status = 'Won'");

		$tot_quotation_lost = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as won FROM `table_quotations` WHERE status_changed_date = '$today_date' AND quotation_status = 'Lost'");

		$tot_jobs_completed = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as completed FROM `table_jobs` WHERE job_status_changed_date = '$today_date' AND jobsheet_status = 'Completed'");

		$tot_jobs_open = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as completed FROM `table_jobs` WHERE job_status_changed_date <= '$today_date' AND jobsheet_status = 'In Progress'");

		$tot_quotation_open = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as open FROM `table_quotations` WHERE quotation_date <= '$quotation_date' AND quotation_status != 'Won' AND quotation_status != 'Lost'");

	}


	if( $filter_value == 'Current Month'){

	    $tot_inspection = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as inspections FROM `table_inspection` WHERE month(STR_TO_DATE(created_date, '%Y-%m-%d')) = '$current_month'");

	    $tot_quotation = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as quotations FROM `table_quotations` WHERE month(STR_TO_DATE(quotation_date, '%d-%m-%Y')) = '$current_month'");

		$tot_quotation_won = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as won FROM `table_quotations` WHERE month(STR_TO_DATE(status_changed_date, '%Y-%m-%d')) = '$current_month' AND quotation_status = 'Won'");

		$tot_revenue = mysqli_query($conn,"SELECT IFNULL(SUM(quotation_rate),'0') as revenue FROM `table_quotations` WHERE month(STR_TO_DATE(status_changed_date, '%Y-%m-%d')) = '$current_month' AND quotation_status = 'Won'");

		$tot_quotation_lost = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as won FROM `table_quotations` WHERE month(STR_TO_DATE(status_changed_date, '%Y-%m-%d')) = '$current_month' AND quotation_status = 'Lost'");

		$tot_jobs_completed = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as completed FROM `table_jobs` WHERE month(STR_TO_DATE(job_status_changed_date, '%Y-%m-%d')) = '$current_month' AND jobsheet_status = 'Completed'");

		$tot_jobs_open = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as completed FROM `table_jobs` WHERE month(STR_TO_DATE(job_status_changed_date, '%Y-%m-%d')) = '$current_month' AND jobsheet_status = 'In Progress'");

		$tot_quotation_open = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as open FROM `table_quotations` WHERE month(STR_TO_DATE(quotation_date, '%d-%m-%Y')) = '$current_month' AND quotation_status != 'Won' AND quotation_status != 'Lost'");

	}

	

	$totinsp = mysqli_fetch_row($tot_inspection);
    $total_inspection = $totinsp[0];

    $totquotation = mysqli_fetch_row($tot_quotation);
    $total_quotation = $totquotation[0];

    $won = mysqli_fetch_row($tot_quotation_won);
	$total_quotation_won = $won[0];

	$open = mysqli_fetch_row($tot_quotation_open);
	$total_quotation_open = $open[0];

	$lost = mysqli_fetch_row($tot_quotation_lost);
	$total_quotation_lost = $lost[0];

	$revenue = mysqli_fetch_row($tot_revenue);
	$total_revenue = $revenue[0];

	$jobs_completed = mysqli_fetch_row($tot_jobs_completed);
	$total_jobs_completed = $jobs_completed[0];

	$jobs_open = mysqli_fetch_row($tot_jobs_open);
	$total_jobs_open = $jobs_open[0];


	$json[]= array(

		'total_inspection' 		=> $total_inspection,
        'total_quotation' 		=> $total_quotation,
        'total_quotation_won' 	=> $total_quotation_won,
        'total_quotation_open' 	=> $total_quotation_open,
        'total_revenue' 		=> $total_revenue,
        'total_quotation_lost' 	=> $total_quotation_lost,
        'total_jobs_completed' 	=> $total_jobs_completed,
        'total_jobs_open' 		=> $total_jobs_open,

	);
	
  
  	$jsonstring = json_encode($json);

	echo $jsonstring;


?>