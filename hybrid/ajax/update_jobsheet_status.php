<?php 

include "../config/connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

error_reporting(1);

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

$Id = $_REQUEST['Id'];
$status = $_REQUEST['jobsheet_status'];
$remarks = $_REQUEST['agent_remarks'];

$sql = mysqli_query($conn,"UPDATE table_jobs SET `jobsheet_status` = '$status', `agent_remark` = '$remarks', `job_status_changed_date` = '$today_date' WHERE id = '$Id'");

$sql1= mysqli_query($conn,"SELECT * FROM table_jobs WHERE id='$Id'");

$row = mysqli_fetch_assoc($sql1);
    
    $job_sheet_id    = $row['job_sheet_id'];
    $quotation_id    = $row['quotation_id'];
    $client_name     = $row['cust_name'];
    $client_mobile   = $row['cust_mobile'];
    $client_email    = $row['cust_email'];
    $client_address  = mysqli_real_escape_string($conn,$row['cust_address']);
    $technician      = mysqli_real_escape_string($conn,$row['technician']);
    $booking_date    = $row['booking_date'];
    $start_date      = $row['start_date'];
    $end_date        = $row['end_date'];
    $start_time      = $row['start_time'];
    $end_time        = $row['end_time'];
    $job_to_do       = mysqli_real_escape_string($conn,$row['job_to_do']);
    $spare_parts     = mysqli_real_escape_string($conn,$row['spare_parts']);
    $tools_required  = mysqli_real_escape_string($conn,$row['tools_required']);
    $agent_name      = $_SESSION['ADMIN_ID']['NAME'];



 $html ='<!DOCTYPE html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

<link href="../css/nifty.min.css" rel="stylesheet">

<style type="text/css">
.bootstrap-select{
width: 100% !important;
}
tr td{
padding: 5px;
}

body .select2-container--default .select2-selection--multiple .select2-selection__choice{
height: 32px !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
padding-top: 5px !important;
}

.select2-container .select2-selection--multiple{
height: 46px !important;
}

.select2-container .select2-search--inline .select2-search__field{
height: 46px !important;
margin-top: 0px !important;
}

.new_row{
margin-top:15px;
}

.note-editor{
border: 1px solid rgba(0, 0, 0, 0.07);
border-radius: 3px;
padding: 5px;
}

.invoice-text{
padding-top: 15px;
}

#container .invoice-masthead{
margin-bottom: 0px;
    padding-bottom: 20px;
}

.invoice_body_container{
border:2px solid;
}

.one{
width: 25%;
}

.two{
width: 25%
}

.three{
width: 25%
}

.four{
width: 25%
}

#container .table-bordered, #container .table-bordered td, #container .table-bordered th{
border:1px solid;
}

#content-container:before{
    background-color: #ffffff;
}

#content-container{
    padding-top: 0px;
    padding-bottom: 0px;
}

#page-content{
    padding: 0px;
}

body{
    background-color: #ffffff;
    min-width: 290px;
}

.panel-body{
    padding: 0px;
}

.table{
    margin-bottom: 0px;
}

</style>
<div class="boxed">

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container" style="background-color:#ffffff">

<!--Page content-->
<!--===================================================-->
<div id="page-content">

<div class="panel">
<div class="panel-body">
<div class="col-sm-12">
<div class="mar-all">
<div class="panel">
<div class="panel-body">


<div class="invoice-masthead" style="padding-bottom: 15px;">
<div class="invoice-text" style="text-align: right;padding-top: 15px; width: 50%;float: right">
<h3 class="h4 text-uppercase mar-no text-primary">JOB COMPLETION REPORT</h3>
</div>
<div class="invoice-brand" style="white-space:nowrap; text-align: left;width: 50%;">
<div class="invoice-logo">
<img src="../img/higi-logo-header.png" width="150px">
</div>
</div>
</div>

</div>
<div class="invoice_body_container">
<div class="invoice-bill row">
<div class="col-sm-12 text-xs-center" style="padding-right: 10px; margin-left: 10px; padding-left:0px;width:100%">
<table class="table table-bordered invoice-summary">
<thead>
<tr class="top_bar">
<th class="text-uppercase one text-center">Booking Date</th>
<th class="text-uppercase two text-center">Technician</th>
<th class="text-uppercase three text-center">Start</th>
<th class="text-uppercase four text-center">Expected Finish</th>

</tr>
</thead>
<tbody>
<tr class="top_bar">
<td class="text-center">
'.$booking_date.'                  
</td>
<td class="text-center">'.$technician.'</td>
<td>
<strong>Date: </strong>'.$start_date.'                   
</td>
<td>
<strong>Date: </strong>'.$end_date.'
</td>

</tr>
<tr>
<td colspan="2"><strong>Customer Name: </strong>'.$client_name.'</td>
<td>
<strong>Time: </strong>'.$start_time.'                   
</td>
<td>
<strong>Time: </strong>'.$end_time.'
</td>
</tr>  
<tr>
<td colspan="2"><strong>Mobile/Phone: </strong>'.$client_mobile.'</td>
<td colspan="2"><strong>Email: </strong>'.$client_email.'</td>
</tr> 
<tr>
<td colspan="4"><strong>Location: </strong>'.$client_address.'</td>
</tr>                                          
</tbody>
</table>                
</div>

</div>

<div class="row">
    <div class="col-lg-12" style="padding-left: 8px;padding-right: 8px">
        <table class="table table-bordered" style="width: 100%">
            <tr>
                <td class="text-center">
                    <h6><strong>JOB TO DO</strong></h6>
                </td>
                
            </tr>
            <tr>
                <td style="min-height:250px;height:250px;"">
                    '.$job_to_do.'
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row">
<div class="col-lg-12" style="padding-left: 8px;padding-right: 8px">
<table class="table table-bordered" style="width: 100%">
    <tr>
        <td>
            <h6><strong>TOOLS REQUIRED:</strong></h6><br>
            <p style="min-height:100px">'.$tools_required.'</p>
        </td>
        <td>
            <h6><strong>SPARE PARTS:</strong></h6><br>
            <p style="min-height:100px">'.$spare_parts.'</p>
        </td>
    </tr>
    <tr>
    <td colspan="2"><h6><strong>ADDITIONAL COMMENTS:</strong></h6><br>
    	<p style="min-height:100px">'.$remarks.'</p>
    </td>
    </tr>
    <tr>
        <td>
            <p style="min-height:50px"></p><br>
            <h6><strong>CLIENT SIGNATURE</strong></h6>
        </td>
        <td>
            <p style="min-height:50px"></p><br>
            <h6><strong>TECHNICIAN SIGNATURE</strong>
            </h6><br>
            <img src="../img/completed.jpg" width="150px">
        </td>
    </tr>
    <tr>
        <td><h6><strong>&nbsp;DATE:</strong></h6></td>
        <td><h6><strong>&nbsp;DATE:</strong></h6></td>
    </tr>
</table>
</div>
</div>

</div>


</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</head>';

    // include autoloader
    require_once '../dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    // $content = file_get_contents('view_invoice.php');

    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    $pdf_name = 'Jobsheet-Higi-'.$job_sheet_id;

    $file_name = $pdf_name.'.pdf';

    if($status == 'Completed'){

    $output = $dompdf->output();
    file_put_contents("../uploads/jobsheets/".$file_name, $output);

    echo "Job Sheet Created Successfully!";

    } else{

        echo 'Only Status Updated!';
        // echo "UPDATE table_jobs SET `jobsheet_status` = '$status', `agent_remark` = '$remarks', `job_status_changed_date` = '$today_date' WHERE id = '$Id'";
    }
   
?>