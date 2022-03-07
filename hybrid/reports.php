<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$agent_role = $_SESSION['ADMIN_ID']['ROLE'];

?>
<?php include "menubar.php" ?>


        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Reports</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
					<li><a href="index.php"><i class="demo-pli-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li class="active">Reports</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                    <?php if($_SESSION['ADMIN_ID']['REPORTS'] == '1'){ ?>

                	<div class="row">
					    <div class="col-md-3 col-md-offset-2">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-old-telephone icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Call Report</p>
					                <p class="text-muted">Inbound | Call Time | Agents</p>
					                <a class="btn btn-primary mar-ver" href="inbound_report.php">View reports</a>
					            </div>
					        </div>
					    </div>
					    
					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-mine icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Bookings Report</p>
					                <p class="text-muted">Bookings | Revenue | Agents</p>
					                <a class="btn btn-primary mar-ver" href="booking_report.php">View reports</a>
					            </div>
					        </div>
					    </div>

					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-file-edit icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Quotation Report</p>
					                <p class="text-muted">Quotation | Status | Agent</p>
					                <a class="btn btn-primary mar-ver" href="quotation_report.php">View Report</a>
					            </div>
					        </div>
					    </div>
					    
					</div>

				
					
					

					<div class="row">
						<div class="col-md-3 col-md-offset-2">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-receipt-4 icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Landing Page Leads</p>
					                <p class="text-muted">Bookings | New Customer | Agents</p>
					                <a class="btn btn-primary mar-ver" href="landing_page_report.php">View reports</a>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-mail icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Auto Dialer</p>
					                <p class="text-muted">Auto Dialer | Calls Connected | Booked</p>
					                <a class="btn btn-primary mar-ver" href="auto_dialer_report.php">View reports</a>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-speech-bubble-7 icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Complaints</p>
					                <p class="text-muted">Customers | Agents | Cleaners</p>
					                <a class="btn btn-primary mar-ver" href="complaints_report.php">View reports</a>
					            </div>
					        </div>
					    </div>
					</div>
					
					
				    
				    <div class="row">
						<div class="col-md-3 col-md-offset-2">
						    <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-information icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Feedback Report</p>
					                <p class="text-muted">Booking | Review | Agent</p>
					                <a class="btn btn-primary mar-ver" href="feedback_report.php">View Report</a>
					            </div>
					        </div>
					    </div>

					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-wrench icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Higi Maintenance Report</p>
					                <p class="text-muted">Maintenance | Jobs | Status</p>
					                <a class="btn btn-primary mar-ver" href="higi-maintenance-job-report.php">View reports</a>
					            </div>
					        </div>
					    </div>
					    
					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-calendar-4 icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Summary Report</p>
					                <p class="text-muted">Receivables | Collections | Cancellations</p>
					                <a class="btn btn-primary mar-ver" href="summary_report.php">View reports</a>
					            </div>
					        </div>
					    </div>
				    </div>
				    
				    <div class="row">
						<div class="col-md-3 col-md-offset-2">
						    <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-credit-card-2 icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Receipts</p>
					                <p class="text-muted">Receipt | Collection | Remarks</p>
					                <a class="btn btn-primary mar-ver" href="payment_report.php">View Report</a>
					            </div>
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="panel">
					            <div class="panel-body text-center">
					                <div class="pad-ver mar-top text-main"><i class="demo-pli-bar-chart icon-4x"></i></div>
					                <p class="text-lg text-semibold mar-no text-main">Sanal's Report</p>
					                <p class="text-muted">Finance | Revenue | Customers</p>
					                <a class="btn btn-primary mar-ver" href="finance-report.php">View reports</a>
					            </div>
					        </div>
					    </div>
				    </div>
				    
				    <?php } ?>

					
                </div>
            </div>

<?php

    $agent_role = $_SESSION['ADMIN_ID']['ROLE'];
    
    if($agent_role == 'Administrator'){
    
        include "admin_sidebar.php";
    
    }else{
        
        include "sidebar.php";
        
    }

?>

<?php include "footer.php" ?>

