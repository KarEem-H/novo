<?php  
include "../config/connection.php";
include "../plugins/excel/PHPExcel.php";
include "../plugins/excel/PHPExcel/IOFactory.php";

$startdate = $_REQUEST['start_date'];
$startDate = strtotime($startdate);
$start_date= date('Y-m-d', $startDate);

$enddate = $_REQUEST['end_date'];
$endDate = strtotime($enddate);
$end_date= date('Y-m-d', $endDate);


$result = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.address,t1.service_date,t1.total,t1.receipt_amount,t1.driver,t1.agent_name,t1.materials,t1.job_ref,t1.service_type,t1.area,t1.source,t1.cleaners,t1.payment_mode,t1.receipt_ref,t1.outstanding,t1.booking_status,t2.customer_name,t2.customer_mobile,t3.start_time,t3.end_time FROM (SELECT id,cust_id,address,STR_TO_DATE(cleaning_date, '%Y-%m-%d') as service_date,total,receipt_amount,driver,agent_name,materials,job_ref,service_type,area,source,cleaners,payment_mode,receipt_ref, (total - receipt_amount) as outstanding, booking_status FROM `table_booking` WHERE cleaning_date >= '$start_date' AND cleaning_date <= '$end_date' AND booking_status !='Cancelled' AND agent_name !='' AND cust_id !='') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id) LEFT JOIN (SELECT DISTINCT booking_id, start_time, end_time FROM table_assigned_task) t3 ON (t1.job_ref = t3.booking_id) ORDER BY t1.service_date ASC");

/* Create new PHPExcel object*/
$objPHPExcel = new PHPExcel();

/* Create a first sheet, representing sales data*/
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Entry No');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Customer Code');
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Customer Name');
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Location/Narration');
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Date');
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Job Amount');
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Collected Amount');
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Receivable Amount');
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Driver');
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'Agent');
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'Start Time');
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'End Time');
$objPHPExcel->getActiveSheet()->setCellValue('M1', 'With Material Yes/No');
$objPHPExcel->getActiveSheet()->setCellValue('N1', 'Currency');
$objPHPExcel->getActiveSheet()->setCellValue('O1', 'Exchange Rate');
$objPHPExcel->getActiveSheet()->setCellValue('P1', 'Job Type');
$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Job Code');
$objPHPExcel->getActiveSheet()->setCellValue('R1', 'Job');
$objPHPExcel->getActiveSheet()->setCellValue('S1', 'Country');
$objPHPExcel->getActiveSheet()->setCellValue('T1', 'Emirate');
$objPHPExcel->getActiveSheet()->setCellValue('U1', 'TRN');
$objPHPExcel->getActiveSheet()->setCellValue('V1', 'Mobile');
$objPHPExcel->getActiveSheet()->setCellValue('W1', 'Area');
$objPHPExcel->getActiveSheet()->setCellValue('X1', 'Source');
$objPHPExcel->getActiveSheet()->setCellValue('Y1', 'Service Provided By');
$objPHPExcel->getActiveSheet()->setCellValue('Z1', 'Job Status');


$i=2;
$serialno=1;

while($row = mysqli_fetch_array($result)) {
    $id                 =   $serialno++;
    $cust_id            =   $row['cust_id'];
    $address            =   $row['address'];
    $service_date       =   $row['service_date'];
    $total              =   $row['total'];
    $receipt_amount     =   $row['receipt_amount'];
    $driver             =   $row['driver'];
    $agent_name         =   $row['agent_name'];
    $materials          =   $row['materials'];
    $currency           =   'AED';
    $exchange_rate      =   '1';
    $job_ref            =   $row['job_ref'];
    $job_type           =   'Cleaning';
    $service_type       =   $row['service_type'];
    $country            =   'UAE';
    $emirates           =   'Dubai';
    $trn                =   '';
    $area               =   $row['area'];
    $source             =   $row['source'];
    $cleaners           =   $row['cleaners'];
    $payment_mode       =   $row['payment_mode'];
    $receipt_ref        =   $row['receipt_ref'];
    $outstanding        =   $row['outstanding'];
    $cust_name          =   $row['customer_name'];
    $cust_mobile        =   $row['customer_mobile'];
    $start_time         =   $row['start_time'];
    $end_time           =   $row['end_time'];
    $booking_status     =   $row['booking_status'];
    

    $objPHPExcel->getActiveSheet()->setCellValue("A$i",$id);
    $objPHPExcel->getActiveSheet()->setCellValue("B$i",$cust_id);
    $objPHPExcel->getActiveSheet()->setCellValue("C$i",$cust_name);
    $objPHPExcel->getActiveSheet()->setCellValue("D$i",$address);
    $objPHPExcel->getActiveSheet()->setCellValue("E$i",$service_date);
    $objPHPExcel->getActiveSheet()->setCellValue("F$i",$total);
    $objPHPExcel->getActiveSheet()->setCellValue("G$i",$receipt_amount);
    $objPHPExcel->getActiveSheet()->setCellValue("H$i",$outstanding);
    $objPHPExcel->getActiveSheet()->setCellValue("I$i",$driver);
    $objPHPExcel->getActiveSheet()->setCellValue("J$i",$agent_name);
    $objPHPExcel->getActiveSheet()->setCellValue("K$i",$start_time);
    $objPHPExcel->getActiveSheet()->setCellValue("L$i",$end_time);
    $objPHPExcel->getActiveSheet()->setCellValue("M$i",$materials);
    $objPHPExcel->getActiveSheet()->setCellValue("N$i",$currency);
    $objPHPExcel->getActiveSheet()->setCellValue("O$i",$exchange_rate);
    $objPHPExcel->getActiveSheet()->setCellValue("P$i",$job_type);
    $objPHPExcel->getActiveSheet()->setCellValue("Q$i",$job_ref);
    $objPHPExcel->getActiveSheet()->setCellValue("R$i",$service_type);
    $objPHPExcel->getActiveSheet()->setCellValue("S$i",$country);
    $objPHPExcel->getActiveSheet()->setCellValue("T$i",$emirates);
    $objPHPExcel->getActiveSheet()->setCellValue("U$i",$trn);
    $objPHPExcel->getActiveSheet()->setCellValue("V$i",$cust_mobile);
    $objPHPExcel->getActiveSheet()->setCellValue("W$i",$area);
    $objPHPExcel->getActiveSheet()->setCellValue("X$i",$source);
    $objPHPExcel->getActiveSheet()->setCellValue("Y$i",$cleaners);
    $objPHPExcel->getActiveSheet()->setCellValue("Z$i",$booking_status);

$i++;
}

/*Rename sheet*/
$objPHPExcel->getActiveSheet()->setTitle('Higi');

$file_name='Finance Report - '.$today_date.'.xls';

/* Redirect output to a client’s web browser (Excel5)*/
header('Content-Type: application/vnd.ms-excel');
header("Content-Disposition: attachment;filename=\"$file_name\"");
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');


?>