<?php 
session_start();

include "config/connection.php";

$today_date = date("Y-m-d");
date_default_timezone_set("Asia/Dubai");

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$agent_role = $_SESSION['ADMIN_ID']['ROLE'];

// MY UPCOMING BOOKING NOTIFICATION STARTS

$my_bookings = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_booking` WHERE cleaning_date >= '$today_date' AND agent_name = '$agent_name' AND agent_remark = ''");

$my_booking = mysqli_fetch_row($my_bookings);
$my_booking_count = $my_booking[0];

// MY UPCOMING BOOKING NOTIFICATION ENDS

// SCHEDULER NOTIFICATION STARTS

$scheduler = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM table_booking WHERE `approved_by_coordinator` != 'Yes' AND `approved_by_scheduler` != 'Yes' AND cleaning_date > '$today_date' AND add_to_brilion !='Yes' AND booking_status !='Cancelled'");

$my_scheduler = mysqli_fetch_row($scheduler);
$my_scheduler_count = $my_scheduler[0];

// SCHEDULER NOTIFICATION ENDS

// COORDINATOR NOTIFICATION STARTS

$coordinator = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM table_booking WHERE `approved_by_coordinator` != 'Yes' AND `approved_by_scheduler` != 'Yes' AND cleaning_date = '$today_date' AND add_to_brilion !='Yes' AND booking_status !='Cancelled'");

$my_coordinator = mysqli_fetch_row($coordinator);
$my_coordinator_count = $my_coordinator[0];

// COORDINATOR NOTIFICATION ENDS

// DAMAC BOOKINGS NOTIFICATION STARTS

$damac_booking = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM table_damac_booking WHERE `approved_by_coordinator` != 'Yes' AND `approved_by_scheduler` != 'Yes' AND add_to_brilion !='Yes' AND booking_status !='Cancelled' AND booking_status !='Failed'");

$my_damac = mysqli_fetch_row($damac_booking);
$my_damac_count = $my_damac[0];

// DAMAC BOOKINGS NOTIFICATION ENDS

// DAMAC ENQUIRY NOTIFICATION STARTS

$damac_leads = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM table_damac_enquires WHERE `approved_by_abdul` != 'Yes'");

$my_damac_leads = mysqli_fetch_row($damac_leads);
$my_damac_lead_count = $my_damac_leads[0];

// DAMAC ENQUIRY NOTIFICATION ENDS

// CANCELLED JOBS NOTIFICATION STARTS

$cancelledjobs = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_booking` WHERE booking_status = 'Cancelled' AND cleaning_date > '$today_date' AND add_to_brilion !='Removed'");

$my_cancelledjobs = mysqli_fetch_row($cancelledjobs);
$my_cancelledjobs_count = $my_cancelledjobs[0];

$samedaycancel = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_booking` WHERE booking_status = 'Cancelled' AND cleaning_date = '$today_date' AND add_to_brilion !='Removed' AND booking_date='$today_date'");

$my_samedaycancel = mysqli_fetch_row($samedaycancel);
$my_samedaycancel_count = $my_samedaycancel[0];

// CANCELLED JOBS NOTIFICATION ENDS

// LANDING PAGE NOTIFICATION STARTS

$landingpage = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_leads` WHERE approved_by_abdul = 'No' AND lead_status = 'Lead'");

$my_landingpage = mysqli_fetch_row($landingpage);
$my_landingpage_count = $my_landingpage[0];

// LANDING PAGE NOTIFICATION ENDS

// COMPLAINTS NOTIFICATION STARTS

if($agent_role == 'Telesales'){
    $complaints = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_complaints` WHERE agent_name = '$agent_name' AND status !='Closed'");
}

if($agent_role == 'Administrator'){

    $complaints = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_complaints` WHERE status !='Closed'");

}

$my_complaints = mysqli_fetch_row($complaints);
$my_complaints_count = $my_complaints[0];


// COMPLAINTS NOTIFICATION ENDS

// PAYMENTS NOTIFICATION STARTS

if($agent_role == 'Telesales'){
    $payment = mysqli_query($conn,"SELECT COUNT(t1.mycount) FROM(SELECT COUNT( * ) AS mycount FROM table_unpaid_jobs WHERE agent_name = '$agent_name' AND payment_status != 'Paid' GROUP BY cust_id) t1;");
}

if($agent_role == 'Administrator' || $agent_role == 'Payment Collector'){
     $payment = mysqli_query($conn,"SELECT COUNT(t1.mycount) FROM(SELECT COUNT( * ) AS mycount FROM table_unpaid_jobs WHERE payment_status != 'Paid' GROUP BY cust_id) t1;");
}

if($agent_role == 'Administrator' || $agent_role == 'Payment Collector'){

    $payment1 = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_collections` WHERE approved != 'Yes'");

}


$my_payments = mysqli_fetch_row($payment);
$my_payments_count = $my_payments[0];

$my_payments1 = mysqli_fetch_row($payment1);
$my_payments_count1 = $my_payments1[0];


// PAYMENTS NOTIFICATION ENDS

// INSPECTION NOTIFICATION STARTS

$inspection = mysqli_query($conn,"SELECT COUNT(id) as inspection_count FROM `table_inspection` WHERE `inspection_status` = 'Open'");


$my_inspection = mysqli_fetch_row($inspection);
$my_inspection_count = $my_inspection[0];

$schedule_inspection = mysqli_query($conn,"SELECT COUNT(id) as inspection_count FROM `table_inspection` WHERE `add_to_brilion` != 'Yes' AND `approved_by_scheduler` = 'Yes");


$my_schedule_inspection = mysqli_fetch_row($schedule_inspection);
$my_schedule_inspection_count = $my_schedule_inspection[0];


// INSPECTION NOTIFICATION ENDS

// QUOTATION NOTIFICATION STARTS

$quotation = mysqli_query($conn,"SELECT COUNT(id) as quotation_count FROM `table_quotations` WHERE quotation_approved !='Yes'");


$my_quotation = mysqli_fetch_row($quotation);
$my_quotation_count = $my_quotation[0];


// QUOTATION NOTIFICATION ENDS

// APPROVED QUOTATION NOTIFICATION STARTS


$approved_quotation = mysqli_query($conn,"SELECT COUNT(id) as quotation_count FROM `table_quotations` WHERE quotation_status = 'Won' AND job_scheduled ='No'");


$my_approved_quotation = mysqli_fetch_row($approved_quotation);
$my_approved_quotation_count = $my_approved_quotation[0];


// APPROVED QUOTATION NOTIFICATION ENDS

// PROCESS JOBSHEET NOTIFICATION STARTS


$process_jobsheet = mysqli_query($conn,"SELECT COUNT(id) as jobsheet_count FROM table_jobs WHERE job_sheet_generated='No'");


$my_process_jobsheet = mysqli_fetch_row($process_jobsheet);
$my_process_jobsheet_count = $my_process_jobsheet[0];

// PROCESS JOBSHEET NOTIFICATION ENDS


// JOBSHEETS NOTIFICATION STARTS

$jobsheet = mysqli_query($conn,"SELECT COUNT(id) as jobsheet_count FROM table_jobs WHERE job_sheet_generated = 'Yes' AND jobsheet_status !='Completed'");


$my_jobsheet = mysqli_fetch_row($jobsheet);
$my_jobsheet_count = $my_jobsheet[0];

// JOBSHEETS NOTIFICATION ENDS

// CALLOUT NOTIFICATION STARTS

$callout = mysqli_query($conn,"SELECT COUNT(id) as callout FROM table_callouts WHERE approved != 'Yes'");


$my_callout = mysqli_fetch_row($callout);
$my_callout_count = $my_callout[0];

// CALLOUT NOTIFICATION ENDS

// MAINTENANCE BOOKING LOG NOTIFICATION STARTS

$maintenance_log = mysqli_query($conn,"SELECT COUNT(id) as maintenance_booking_count FROM maintenance_jobs WHERE add_to_brilion != 'Yes'");


$my_maintenance_log = mysqli_fetch_row($maintenance_log);
$my_maintenance_log_count = $my_maintenance_log[0];

// MAINTENANCE BOOKING LOG NOTIFICATION ENDS

// FOLLOWUP NOTIFICATION STARTS

$followup_noti = mysqli_query($conn,"SELECT DISTINCT cust_id, COUNT(id) FROM table_booking WHERE cleaning_date < '$today_date' AND feedback != 'Yes' AND booking_status !='Cancelled' AND agent_name = '$agent_name'");


$my_followup_noti = mysqli_fetch_row($followup_noti);
$my_followup_noti_count = $my_followup_noti[1];

// FOLLOWUP NOTIFICATION ENDS


?> 

<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">
        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <div class="mainnav-brand">
            <a href="index.php" class="brand">
                <img src="img/higi-hybrid-logo.png" alt="Higitech" class="brand-icon">
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap" style="margin-top: 20px;">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                        <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>

                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>                                        
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <?php if($agent_role != 'Staycae'){ ?>
                        <!--Menu list item-->
                        <li class="side" align="center" style="text-align:center">
                            <a href="index.php">
                                <i class="demo-pli-home"></i><br><br>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>

                        <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <li class="side" align="center" style="text-align:center">
                            <a href="auto_dialer_index.php">
                                <i class="demo-pli-old-telephone"></i><br><br>
                                <span class="menu-title">Auto Dialer Dashboard</span>
                            </a>
                        </li>
                            
                        <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <li class="side" align="center" style="text-align:center">
                            <a href="higi_maintenance_jobs.php">
                                <i class="demo-pli-firewall icon-3x"></i><br><br>
                                <span class="menu-title">Higi Maintenance Dashboard</span>
                                
                            </a>
                        </li>
                        <?php } ?>
                        
                        <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>
                            
                            <li class="side" align="center" style="text-align:center">
                                <a href="customer_list.php">
                                    <i class="demo-pli-male-female"></i><br><br>
                                    <span class="menu-title">Customers</span>
                                </a>
                            </li>

                        <!-- USER CREATION & UPDATION -->

                        <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <?php 
                        if($_SESSION['ADMIN_ID']['USER_ACCESS'] == 1){

                            ?>

                            <li class="side" align="center" style="text-align:center">
                                <a href="users.php">
                                    <i class="demo-pli-male-female"></i><br><br>
                                    <span class="menu-title">Users</span>
                                </a>
                            </li>

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <?php } ?>

                        <!-- BOOKING & SCHEDULE SECTION START -->

                        <?php 
                        if($_SESSION['ADMIN_ID']['BOOKINGS'] == 1){

                            ?>

                            <li class="side" align="center" style="text-align:center">
                                <a href="create_bookings.php">
                                    <i class="demo-pli-add"></i><br><br>
                                    <span class="menu-title">Create Booking</span>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <li class="side" align="center" style="text-align:center">
                                <a href="my_bookings.php">
                                    <i class="demo-pli-basket-coins"></i><br><br>
                                    <span class="menu-title">My Bookings</span>
                                    <?php if($my_booking_count > 0){ ?>
                                        <span class="pull-right badge badge-info"><?php echo $my_booking_count ?></span>
                                    <?php } ?>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <?php } ?>

                        <?php 
                        if($_SESSION['ADMIN_ID']['SCHEDULER'] == '1'){

                            ?>

                            <!--Menu list item-->
                            <li class="side" align="center" style="text-align:center">
                                <a href="job_list.php">
                                    <i class="demo-pli-mine"></i><br><br>
                                    <span class="menu-title">Future Bookings</span>
                                    <?php if($my_scheduler_count > 0){ ?>
                                        <span class="pull-right badge badge-warning"><?php echo $my_scheduler_count ?></span>
                                    <?php } ?>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <?php } ?>

                        <?php 
                        if($_SESSION['ADMIN_ID']['COORDINATOR'] == '1'){

                            ?>

                            <li class="side" align="center" style="text-align:center">
                                <a href="coordinator.php">
                                    <i class="demo-pli-map-2"></i><br><br>
                                    <span class="menu-title">Same Day Bookings</span>
                                    <?php if($my_coordinator_count > 0){ ?>
                                        <span class="pull-right badge badge-success"><?php echo $my_coordinator_count ?></span>
                                    <?php } ?>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <?php } ?>
                            
                        
                        <?php if($agent_role == 'Administrator' || $agent_role == 'Coordinator' || $agent_role == 'Scheduler'){ ?>

                        <!-- CANCELLATION SECTION STARTS -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="same_day_cancellations.php">
                                    <i class="demo-pli-trash"></i><br><br>
                                    <span class="menu-title">Same Day Cancellations</span>
                                    <?php if($my_samedaycancel_count > 0){ ?>
                                        <span class="pull-right badge badge-danger"><?php echo $my_samedaycancel_count ?></span>
                                    <?php } ?>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>
                            
                             <li class="side" align="center" style="text-align:center">
                                <a href="cancelled_jobs.php">
                                    <i class="demo-pli-trash"></i><br><br>
                                    <span class="menu-title">Future Cancellations</span>
                                    <?php if($my_cancelledjobs_count > 0){ ?>
                                        <span class="pull-right badge badge-danger"><?php echo $my_cancelledjobs_count ?></span>
                                    <?php } ?>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>
                            
                            <li class="side" align="center" style="text-align:center">
                                <a href="recurring_cancellations.php">
                                    <i class="demo-pli-cross"></i><br><br>
                                    <span class="menu-title">Recurring Cancellations</span>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <?php } ?>
                            
                            <!-- CANCELLATION SECTION ENDS -->
                            

                            <!-- QUOTATION CREATION AND STATUS UPDATION SECTION START -->

                            <!--<li class="side" align="center" style="text-align:center">-->
                            <!--    <a href="create_quotation.php">-->
                            <!--        <i class="demo-pli-file-edit"></i><br><br>-->
                            <!--        <span class="menu-title">Create Quotation</span>-->
                            <!--    </a>-->
                            <!--</li>   -->

                            <!--<li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>-->

                            <!--<li class="side" align="center" style="text-align:center">-->
                            <!--    <a href="create_job_sheet.php">-->
                            <!--        <i class="demo-pli-pen-5"></i><br><br>-->
                            <!--        <span class="menu-title">Create Jobsheet</span>-->
                            <!--    </a>-->
                            <!--</li>   -->

                            <!--<li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>-->
                            
                            
                            
                            <?php 
                                if($_SESSION['ADMIN_ID']['QUOTATIONS'] == '1'){

                            ?>

                            <li class="side" align="center" style="text-align:center">
                                <a href="quotation_list.php">
                                    <i class="demo-pli-file-html"></i><br><br>
                                    <span class="menu-title">Process Quotation</span>
                                    <?php if($my_quotation_count > 0){ ?>
                                        <span class="pull-right badge badge-success"><?php echo $my_quotation_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <?php } ?>

                            
                            
                             

                            <?php 
                                if($_SESSION['ADMIN_ID']['QUOTATIONS'] == '1'){

                            ?>
                            <li class="side" align="center" style="text-align:center">
                                <a href="process_job_sheet.php">
                                    <i class="ion-clock icon-3x"></i><br><br>
                                    <span class="menu-title">Process Job Sheets</span>
                                    <?php if($my_process_jobsheet_count > 0){ ?>
                                        <span class="pull-right badge badge-warning"><?php echo $my_process_jobsheet_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 
                        

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <li class="side" align="center" style="text-align:center">
                                <a href="job_sheet.php">
                                    <i class="demo-pli-boot-2 icon-3x"></i><br><br>
                                    <span class="menu-title">Job Sheets</span>
                                    <?php if($my_jobsheet_count > 0){ ?>
                                        <span class="pull-right badge badge-default"><?php echo $my_jobsheet_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>
                            
                            <li class="side" align="center" style="text-align:center">
                                <a href="completed_jobs.php">
                                    <i class="demo-pli-medal-2 icon-3x"></i><br><br>
                                    <span class="menu-title">Completed Job Sheets</span>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>
                            
                            <li class="side" align="center" style="text-align:center">
                                <a href="callouts.php">
                                    <i class="demo-pli-wrench icon-3x"></i><br><br>
                                    <span class="menu-title">Callouts</span>
                                    <?php if($my_callout_count > 0){ ?>
                                        <span class="pull-right badge badge-info"><?php echo $my_callout_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        <?php } ?>

                        <?php 
                            if($_SESSION['ADMIN_ID']['FOLLOWUP'] == '1'){

                            ?>                                   

                            <!-- FEEDBACK FOLLOWUP SECTION START -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="follow_up.php">
                                    <i class="demo-pli-support"></i><br><br>
                                    <span class="menu-title">Follow up</span>
                                    <?php if($my_followup_noti_count > 0){ ?>
                                        <span class="pull-right badge badge-info"><?php echo $my_followup_noti_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- FEEDBACK FOLLOWUP SECTION END -->
                            
                            <?php } ?>
                        

                        <?php 
                        if($_SESSION['ADMIN_ID']['LANDING_PAGE_LEADS'] == '1'){

                            ?> 

                            <!-- NEW LEADS FROM LANDING PAGE STARTS -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="landing_page_leads.php">
                                    <i class="demo-pli-happy"></i><br><br>
                                    <span class="menu-title">Landing Page Leads</span>
                                    <?php if($my_landingpage_count > 0){ ?>
                                        <span class="pull-right badge badge-success"><?php echo $my_landingpage_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- NEW LEADS FROM LANDING PAGE ENDS -->

                        <?php } ?>

                        <?php 
                        if($_SESSION['ADMIN_ID']['COMPLAINTS'] == '1'){

                            ?> 

                            <!-- COMPLAINTS SECTION START -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="complaints_list.php">
                                    <i class="demo-pli-warning-window"></i><br><br>
                                    <span class="menu-title">Complaints</span>
                                    <?php if($my_complaints_count > 0){ ?>
                                        <span class="pull-right badge badge-danger"><?php echo $my_complaints_count ?></span>
                                    <?php } ?>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- COMPLAINTS SECTION ENDS -->

                        <?php } ?>
                        
                        <?php 
                        if($_SESSION['ADMIN_ID']['ROLE'] == 'Administrator'){

                            ?> 

                        <!-- COMPLAINTS SECTION START -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="internal_issues.php">
                                    <i class="demo-pli-speech-bubble-7"></i><br><br>
                                    <span class="menu-title">Internal Issues</span>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- COMPLAINTS SECTION ENDS -->

                        <?php } ?>

                        <?php 
                        if($_SESSION['ADMIN_ID']['ROLE'] == 'Administrator'){

                            ?> 

                            <!-- AUTODIALER SECTION START -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="upload_numbers.php">
                                    <i class="demo-pli-data-settings"></i><br><br>
                                    <span class="menu-title">Upload Contacts</span>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- AUTODIALER SECTION ENDS -->

                        <?php } ?>
                        
                        
                        
                        <?php 
                        if($agent_name == 'Angel'){

                            ?> 

                            <!-- REPORTING SECTION START -->
                            <li class="side" align="center" style="text-align:center">
                                <a href="auto_dialer_report.php">
                                    <i class="demo-pli-bar-chart"></i><br><br>
                                    <span class="menu-title">Auto Dialer Reports</span>
                                </a>
                            </li>
                            <!-- REPORTING SECTION END -->

                        <?php } ?>
                        
                        <?php 
                        if($agent_role == 'Telesales'){

                            ?> 

                            <!-- REPORTING SECTION START -->
                            <li class="side" align="center" style="text-align:center">
                                <a href="agent_booking_report.php">
                                    <i class="icon-lg demo-pli-calendar-4"></i><br><br>
                                    <span class="menu-title">Agent Booking Report</span>
                                </a>
                            </li>
                            <!-- REPORTING SECTION END -->

                        <?php } ?>

                        <?php 
                        if($_SESSION['ADMIN_ID']['REPORTS'] == '1'){

                            ?> 

                            <!-- REPORTING SECTION START -->
                            <li class="side" align="center" style="text-align:center">
                                <a href="reports.php">
                                    <i class="demo-pli-bar-chart"></i><br><br>
                                    <span class="menu-title">Reports</span>
                                </a>
                            </li>
                            <!-- REPORTING SECTION END -->

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->

</div>