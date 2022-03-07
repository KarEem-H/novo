<?php 

include "../config/connection.php";

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$filter_value = $_REQUEST['filter'];

    $current_month = date('m');

    if( $filter_value == 'Today'){

        $today_date = date("Y-m-d");

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

    }
    
    if( $filter_value == 'Tomorrow'){

        $today_date   = date("Y-m-d", strtotime('tomorrow'));

    }

    if( $filter_value == 'Last 7 Days'){

        $today_date = date("Y-m-d");

        $date = explode('-', $today_date);

        $yesterday = date('d')-7;

        if(strlen($yesterday)=='1'){
            $yesterday = '0'.$yesterday;
        }

        $date[2] = $yesterday;

        $date = implode('-', $date);

        $from_date   = date("Y-m-d", strtotime('-7 day'));
        $to_date     = date("Y-m-d");
    }

    if( $filter_value == 'Next 7 Days'){

        $today_date = date("Y-m-d");

        $date = explode('-', $today_date);

        $yesterday = date('d')+7;

        if(strlen($yesterday)=='1'){
            $yesterday = '0'.$yesterday;
        }

        $date[2] = $yesterday;

        $date = implode('-', $date);

        $from_date = date("Y-m-d");
        $to_date   = date("Y-m-d", strtotime('+7 day'));
    }

    if( $filter_value == 'Current Month'){

        $current_month = date('m');
    }

    if( $filter_value == 'Last Month'){

        $current_month = date('m-d', strtotime('-1 months'));
    }

    if( $filter_value == 'Next Month'){

        $current_month = date('m-d', strtotime('+1 months'));
    }


if( $filter_value == 'All'){

	// TELESALES DATA

    $tot_t_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !=''");

    $totbook = mysqli_fetch_row($tot_t_bookings);
    $total_t_bookings = $totbook[0];	

    $tot_t_cancelled = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status ='Cancelled' AND agent_name != '' AND cust_id !=''");

    $totcanc = mysqli_fetch_row($tot_t_cancelled);
    $total_t_cancelled = $totcanc[0];

    $tot_t_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !=''");

    $tothour = mysqli_fetch_row($tot_t_hours);
    $total_t_hours = $tothour[0];

    $tot_t_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !=''");

    $totrev = mysqli_fetch_row($tot_t_revenue);
    $total_t_revenue = $totrev[0];



    // OPERATIONS DATA

    $tot_o_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cleaner_allocated = 'Yes' AND cust_id !=''");

    $tot_o_book = mysqli_fetch_row($tot_o_bookings);
    $total_o_bookings = $tot_o_book[0];	

    $tot_o_unassigned = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cleaner_allocated !='Yes' AND cust_id !=''");

    $tot_o_unassign = mysqli_fetch_row($tot_o_unassigned);
    $total_o_unassigned = $tot_o_unassign[0];

    $tot_o_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cleaner_allocated = 'Yes' AND cust_id !=''");

    $tot_o_hour = mysqli_fetch_row($tot_o_hours);
    $total_o_hours = $tot_o_hour[0];

    $tot_o_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cleaner_allocated = 'Yes' AND cust_id !=''");

    $tot_o_rev = mysqli_fetch_row($tot_o_revenue);
    $total_o_revenue = $tot_o_rev[0];

    // FINANCE DATA

    $tot_f_paid = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid')");

    $tot_f_pay = mysqli_fetch_row($tot_f_paid);
    $total_f_paid = $tot_f_pay[0];

    $tot_f_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid')");

    $tot_f_rev = mysqli_fetch_row($tot_f_revenue);
    $total_f_revenue = $tot_f_rev[0];

    $tot_f_receipt = mysqli_query($conn,"SELECT ROUND(SUM(receipt_amount),2) as booking_count FROM `table_receipt`");
    $tot_f_rec = mysqli_fetch_row($tot_f_receipt);
    $total_f_receipt = $tot_f_rec[0];
    
    $total_f_outstanding = $total_f_revenue - $total_f_receipt;

}

if( $filter_value == 'Current Month' || $filter_value == 'Last Month' || $filter_value == 'Next Month'){

    // TELESALES DATA

    $tot_t_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $totbook = mysqli_fetch_row($tot_t_bookings);
    $total_t_bookings = $totbook[0];    

    $tot_t_cancelled = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status ='Cancelled' AND agent_name != '' AND cust_id !='' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $totcanc = mysqli_fetch_row($tot_t_cancelled);
    $total_t_cancelled = $totcanc[0];

    $tot_t_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !='' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tothour = mysqli_fetch_row($tot_t_hours);
    $total_t_hours = $tothour[0];

    $tot_t_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $totrev = mysqli_fetch_row($tot_t_revenue);
    $total_t_revenue = $totrev[0];



    // OPERATIONS DATA

    $tot_o_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tot_o_book = mysqli_fetch_row($tot_o_bookings);
    $total_o_bookings = $tot_o_book[0]; 

    $tot_o_unassigned = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated !='Yes' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tot_o_unassign = mysqli_fetch_row($tot_o_unassigned);
    $total_o_unassigned = $tot_o_unassign[0];

    $tot_o_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tot_o_hour = mysqli_fetch_row($tot_o_hours);
    $total_o_hours = $tot_o_hour[0];

    $tot_o_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tot_o_rev = mysqli_fetch_row($tot_o_revenue);
    $total_o_revenue = $tot_o_rev[0];

    // FINANCE DATA

    $tot_f_paid = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid') AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tot_f_pay = mysqli_fetch_row($tot_f_paid);
    $total_f_paid = $tot_f_pay[0];

    $tot_f_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid') AND month(STR_TO_DATE(cleaning_date, '%Y-%m-%d')) = '$current_month'");

    $tot_f_rev = mysqli_fetch_row($tot_f_revenue);
    $total_f_revenue = $tot_f_rev[0];

    $tot_f_receipt = mysqli_query($conn,"SELECT ROUND(SUM(receipt_amount),2) as booking_count FROM `table_receipt` WHERE month(STR_TO_DATE(payment_date, '%Y-%m-%d')) = '$current_month'");
    $tot_f_rec = mysqli_fetch_row($tot_f_receipt);
    $total_f_receipt = $tot_f_rec[0];
    
    $total_f_outstanding = $total_f_revenue - $total_f_receipt;

}


if( $filter_value == 'Last 7 Days' || $filter_value == 'Next 7 Days'){

    // TELESALES DATA

    $tot_t_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $totbook = mysqli_fetch_row($tot_t_bookings);
    $total_t_bookings = $totbook[0];    

    $tot_t_cancelled = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status ='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $totcanc = mysqli_fetch_row($tot_t_cancelled);
    $total_t_cancelled = $totcanc[0];

    $tot_t_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tothour = mysqli_fetch_row($tot_t_hours);
    $total_t_hours = $tothour[0];

    $tot_t_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $totrev = mysqli_fetch_row($tot_t_revenue);
    $total_t_revenue = $totrev[0];



    // OPERATIONS DATA

    $tot_o_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tot_o_book = mysqli_fetch_row($tot_o_bookings);
    $total_o_bookings = $tot_o_book[0]; 

    $tot_o_unassigned = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated !='Yes' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tot_o_unassign = mysqli_fetch_row($tot_o_unassigned);
    $total_o_unassigned = $tot_o_unassign[0];

    $tot_o_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tot_o_hour = mysqli_fetch_row($tot_o_hours);
    $total_o_hours = $tot_o_hour[0];

    $tot_o_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tot_o_rev = mysqli_fetch_row($tot_o_revenue);
    $total_o_revenue = $tot_o_rev[0];

    // FINANCE DATA

    $tot_f_paid = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid') AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tot_f_pay = mysqli_fetch_row($tot_f_paid);
    $total_f_paid = $tot_f_pay[0];

    $tot_f_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid') AND cleaning_date >= '$from_date' AND cleaning_date <= '$to_date'");

    $tot_f_rev = mysqli_fetch_row($tot_f_revenue);
    $total_f_revenue = $tot_f_rev[0];

    $tot_f_receipt = mysqli_query($conn,"SELECT ROUND(SUM(receipt_amount),2) as booking_count FROM `table_receipt` WHERE payment_date >= '$from_date' AND payment_date <= '$to_date'");
    $tot_f_rec = mysqli_fetch_row($tot_f_receipt);
    $total_f_receipt = $tot_f_rec[0];
    
    $total_f_outstanding = $total_f_revenue - $total_f_receipt;

}


if( $filter_value == 'Today' || $filter_value == 'Yesterday' || $filter_value == 'Tomorrow'){

    // TELESALES DATA

    $tot_t_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date = '$today_date'");

    $totbook = mysqli_fetch_row($tot_t_bookings);
    $total_t_bookings = $totbook[0];    

    $tot_t_cancelled = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status ='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date = '$today_date'");

    $totcanc = mysqli_fetch_row($tot_t_cancelled);
    $total_t_cancelled = $totcanc[0];

    $tot_t_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date = '$today_date'");

    $tothour = mysqli_fetch_row($tot_t_hours);
    $total_t_hours = $tothour[0];

    $tot_t_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaning_date = '$today_date'");

    $totrev = mysqli_fetch_row($tot_t_revenue);
    $total_t_revenue = $totrev[0];



    // OPERATIONS DATA

    $tot_o_bookings = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND cleaning_date = '$today_date'");

    $tot_o_book = mysqli_fetch_row($tot_o_bookings);
    $total_o_bookings = $tot_o_book[0]; 

    $tot_o_unassigned = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated !='Yes' AND cleaning_date = '$today_date'");

    $tot_o_unassign = mysqli_fetch_row($tot_o_unassigned);
    $total_o_unassigned = $tot_o_unassign[0];

    $tot_o_hours = mysqli_query($conn,"SELECT SUM(num_of_hours * num_of_cleaners) as booking_count FROM `table_booking` WHERE booking_status != 'Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND cleaning_date = '$today_date'");

    $tot_o_hour = mysqli_fetch_row($tot_o_hours);
    $total_o_hours = $tot_o_hour[0];

    $tot_o_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND cleaner_allocated = 'Yes' AND cleaning_date = '$today_date'");

    $tot_o_rev = mysqli_fetch_row($tot_o_revenue);
    $total_o_revenue = $tot_o_rev[0];

    // FINANCE DATA

    $tot_f_paid = mysqli_query($conn,"SELECT IFNULL(COUNT(id),'0') as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid') AND cleaning_date = '$today_date'");

    $tot_f_pay = mysqli_fetch_row($tot_f_paid);
    $total_f_paid = $tot_f_pay[0];

    $tot_f_revenue = mysqli_query($conn,"SELECT ROUND(SUM(total),2) as booking_count FROM `table_booking` WHERE booking_status !='Cancelled' AND agent_name != '' AND cust_id !='' AND (status_by_finance = 'Paid' OR status_by_finance = 'Partially Paid') AND cleaning_date = '$today_date'");

    $tot_f_rev = mysqli_fetch_row($tot_f_revenue);
    $total_f_revenue = $tot_f_rev[0];

    $tot_f_receipt = mysqli_query($conn,"SELECT ROUND(SUM(receipt_amount),2) as booking_count FROM `table_receipt` WHERE payment_date='$today_date'");
    $tot_f_rec = mysqli_fetch_row($tot_f_receipt);
    $total_f_receipt = $tot_f_rec[0];
    
    $total_f_outstanding = $total_f_revenue - $total_f_receipt;

}

	$json[]= array(

		'total_t_bookings' 	      => $total_t_bookings,
        'total_t_cancelled'       => $total_t_cancelled,
        'total_t_hours' 	      => $total_t_hours,
        'total_t_revenue' 	      => $total_t_revenue,
        'total_o_bookings' 	      => $total_o_bookings,
        'total_o_unassigned'      => $total_o_unassigned,
        'total_o_hours' 	      => $total_o_hours,
        'total_o_revenue' 	      => $total_o_revenue,
        'total_f_paid' 		      => $total_f_paid,
        'total_f_revenue' 	      => $total_f_revenue,
        'total_f_receipt' 	      => $total_f_receipt,
        'total_f_outstanding' 	  => ROUND($total_f_outstanding,2),

	);
	
  
  	$jsonstring = json_encode($json);

	echo $jsonstring;


?>