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

$complaints = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_complaints` WHERE status !='Closed'");


$my_complaints = mysqli_fetch_row($complaints);
$my_complaints_count = $my_complaints[0];


// COMPLAINTS NOTIFICATION ENDS


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

$followup_noti = mysqli_query($conn,"SELECT DISTINCT cust_id, COUNT(id) FROM table_booking WHERE cleaning_date < '$today_date' AND feedback != 'Yes' AND booking_status !='Cancelled'");


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

                        
                        <!--Menu list item-->
                        <li class="side" align="center" style="text-align:center">
                            <a href="#">
                                <i class="demo-pli-home"></i><br><br>
                                <span class="menu-title">Dashboard</span>
                            </a>
            
                            <!--Submenu-->
                            <ul class="collapse in">
                                <li class="active-link"><a href="index.php">Agent Dashboard</a></li>
                                <li><a href="birds-eye-view.php"> Birds Eye View</a></li>
                                <li><a href="auto_dialer_index.php">Auto Dialer</a></li>
                                <li><a href="higi_maintenance_jobs.php"> Maintenance Dashboard</a></li>
                            </ul>
                        </li>                       

                        <!-- USER CREATION & UPDATION -->

                        <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>                    

                            <li class="side" align="center" style="text-align:center">
                                <a href="users.php">
                                    <i class="demo-pli-add-user-star"></i><br><br>
                                    <span class="menu-title">Agents</span>
                                </a>
                            </li>

                        <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>                    

                            <li class="side" align="center" style="text-align:center">
                                <a href="staffs.php">
                                    <i class="demo-pli-address-book"></i><br><br>
                                    <span class="menu-title">Staffs</span>
                                </a>
                            </li>

                        

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>
                            
                            <li class="side" align="center" style="text-align:center">
                                <a href="customer_list.php">
                                    <i class="demo-pli-lock-user"></i><br><br>
                                    <span class="menu-title">Customers</span>
                                </a>
                            </li>

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        

                            <li class="side" align="center" style="text-align:center">
                                <a href="schedule_board.php">
                                    <i class="demo-pli-calendar-4"></i><br><br>
                                    <span class="menu-title">Schedule Board</span>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                        

                            <li class="side" align="center" style="text-align:center">
                                <a href="create_bookings.php">
                                    <i class="demo-pli-add"></i><br><br>
                                    <span class="menu-title">Create Booking</span>
                                </a>
                            </li>  

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <li class="side" align="center" style="text-align:center">
                                <a href="#">
                                    <i class="demo-pli-mine"></i><br><br>
                                    <span class="menu-title">Bookings</span>
                                </a>
                
                                <!--Submenu-->
                                <ul class="collapse in">
                                    <li>
                                        <a href="my_bookings.php">
                                            My Bookings
                                            <?php if($my_booking_count > 0){ ?>
                                                <span class="pull-right badge badge-info"><?php echo $my_booking_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="job_list.php">Future Bookings
                                            <?php if($my_scheduler_count > 0){ ?>
                                                <span class="pull-right badge badge-warning"><?php echo $my_scheduler_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="coordinator.php">Same Day Bookings
                                            <?php if($my_coordinator_count > 0){ ?>
                                                <span class="pull-right badge badge-success"><?php echo $my_coordinator_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="completed_bookings.php">Completed Bookings
                                            <?php if($my_completed_booking_count > 0){ ?>
                                                <span class="pull-right badge badge-success"><?php echo $my_completed_booking_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li> 
                                </ul>
                            </li>                          

                           

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- BOOKING & SCHEDULE SECTION ENDS -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="#">
                                    <i class="demo-pli-trash"></i><br><br>
                                    <span class="menu-title">Cancellations</span>
                                </a>
                
                                <!--Submenu-->
                                <ul class="collapse in">
                                    <li>
                                        <a href="same_day_cancellations.php">Same Day Cancellations
                                            <?php if($my_samedaycancel_count > 0){ ?>
                                                <span class="pull-right badge badge-danger"><?php echo $my_samedaycancel_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cancelled_jobs.php">Future Cancellations
                                            <?php if($my_cancelledjobs_count > 0){ ?>
                                                <span class="pull-right badge badge-danger"><?php echo $my_cancelledjobs_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <li class="side" align="center" style="text-align:center">
                                <a href="#">
                                    <i class="demo-pli-wrench icon-3x"></i><br><br>
                                    <span class="menu-title">Maintenance</span>
                                </a>
                
                                <!--Submenu-->
                                <ul class="collapse in">
                                    <li>
                                        <a href="quotation_list.php">Process Quotation
                                            <?php if($my_quotation_count > 0){ ?>
                                                <span class="pull-right badge badge-success"><?php echo $my_quotation_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="approved_quotations.php">Approved Quotations
                                            <?php if($my_approved_quotation_count > 0){ ?>
                                                <span class="pull-right badge badge-info"><?php echo $my_approved_quotation_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="process_job_sheet.php">Process Job Sheets
                                            <?php if($my_process_jobsheet_count > 0){ ?>
                                                <span class="pull-right badge badge-warning"><?php echo $my_process_jobsheet_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="job_sheet.php">Job Sheets
                                            <?php if($my_jobsheet_count > 0){ ?>
                                                <span class="pull-right badge badge-default"><?php echo $my_jobsheet_count ?></span>
                                            <?php } ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="completed_jobs.php">Completed Job Sheets
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

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
                        

                        <!-- COMPLAINTS SECTION START -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="internal_issues.php">
                                    <i class="demo-pli-speech-bubble-7"></i><br><br>
                                    <span class="menu-title">Internal Issues</span>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- COMPLAINTS SECTION ENDS -->


                            <!-- AUTODIALER SECTION START -->

                            <li class="side" align="center" style="text-align:center">
                                <a href="upload_numbers.php">
                                    <i class="demo-pli-data-settings"></i><br><br>
                                    <span class="menu-title">Upload Contacts</span>
                                </a>
                            </li> 

                            <li class="list-divider" style="border-bottom: 1px solid #e4e9f214"></li>

                            <!-- AUTODIALER SECTION ENDS -->
                            
                            
                             <!-- REPORTING SECTION START -->
                            <li class="side" align="center" style="text-align:center">
                                <a href="reports.php">
                                    <i class="demo-pli-bar-chart"></i>
                                    <span class="menu-title">Reports</span>
                                </a>
                            </li>
                            <!-- REPORTING SECTION END -->

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