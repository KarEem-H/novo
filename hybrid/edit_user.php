<?php include "header.php" ?>

<?php 

include "config/connection.php";

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}


$row_id = $_REQUEST['rid'];

$sql = mysqli_query($conn,"SELECT * FROM table_agents WHERE id='$row_id'");

$row=mysqli_fetch_assoc($sql);

$agent_Name         = $row['agent_name'];
$agent_password     = $row['agent_password'];
$agent_Role         = $row['agent_role'];
$agent_extension    = $row['agent_extension'];
$bookings           = $row['bookings'];
$scheduler          = $row['scheduler'];
$coordinator        = $row['coordinator'];
$quotations         = $row['quotations'];
$inspection         = $row['inspection'];
$followup           = $row['followup'];
$payments           = $row['payments'];
$landing_page_leads = $row['landing_page_leads'];
$complaints         = $row['complaints'];
$maintenance        = $row['maintenance'];
$reports            = $row['reports'];
$user_access        = $row['user_access'];
$status             = $row['status'];

?>

<style>
    .magic-checkbox+label{
        padding-top:6px;
    }
</style>
<?php include "menubar.php" ?>



<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div id="page-head">

            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div id="page-title">
                <h1 class="page-header text-overflow">Edit Users</h1>
            </div>
            
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="demo-pli-home"></i></a></li>
                <li><a href="users.php">Users</a></li>
                <li class="active">Edit Users</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
        </div>


        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="panel">
                <div class="panel-body">
                    <div class="fixed-fluid">
                        <div class="fixed-md-200 pull-sm-left fixed-right-border">

                            <!-- Simple profile -->
                            <div class="text-center">
                                <div class="pad-ver">                                    
                                    <?php if($row['agent_role']== 'Telesales'){ ?>
                                        <img alt="Profile Picture" class="img-lg img-square" src="img/profile-photos/agent.png">
                                    <?php } ?>
                                    <?php if($row['agent_role']== 'Administrator'){ ?>
                                        <img alt="Profile Picture" class="img-lg img-square" src="img/profile-photos/admin.png">
                                    <?php } ?>
                                    <?php if($row['agent_role']== 'Coordinator'){ ?>
                                        <img alt="Profile Picture" class="img-lg img-square" src="img/profile-photos/coordinator.png">
                                    <?php } ?>
                                    <?php if($row['agent_role']== 'Scheduler'){ ?>
                                        <img alt="Profile Picture" class="img-lg img-square" src="img/profile-photos/scheduler.png">
                                    <?php } ?>
                                    <?php if($row['agent_role']== 'Payment Collector'){ ?>
                                        <img alt="Profile Picture" class="img-lg img-square" src="img/profile-photos/payment.png">
                                    <?php } ?>
                                </div>
                                <h4 class="text-lg text-overflow mar-no"><?php echo $agent_Name ?></h4>
                                <p class="text-sm text-muted"><?php echo $agent_Role ?></p>

                            </div>

                        </div>

                        <div class="fixed-sm-250 pull-sm-right fixed-left-border">

                            <!-- Tips Widget -->
                            <!--===================================================-->
                            <h4>Edit Access</h4>
                            <p class="text-sm">This will Enable/Disable features for the users</p>
                            <div class="col-sm-12">

                                <!-- Checkboxes -->
                                <div class="checkbox">
                                    <input id="bookings" class="magic-checkbox" type="checkbox" <?php echo $bookings == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $bookings ?>">
                                    <label for="bookings">Create Booking</label>
                                </div>

                                <div class="checkbox">
                                    <input id="followup" class="magic-checkbox" type="checkbox" <?php echo $followup == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $followup ?>">
                                    <label for="followup">Followup</label>
                                </div>

                                <div class="checkbox">
                                    <input id="complaints" class="magic-checkbox" type="checkbox" <?php echo $complaints == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $complaints ?>">
                                    <label for="complaints">Complaints</label>
                                </div>

                                <div class="checkbox">
                                    <input id="landing_page_leads" class="magic-checkbox" type="checkbox" <?php echo $landing_page_leads == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $landing_page_leads ?>">
                                    <label for="landing_page_leads">Landing Page Leads</label>
                                </div>

                                <div class="checkbox">
                                    <input id="scheduler" class="magic-checkbox" type="checkbox" <?php echo $scheduler == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $scheduler ?>">
                                    <label for="scheduler">Scheduling Job</label>
                                </div>

                                <div class="checkbox">
                                    <input id="coordinator" class="magic-checkbox" type="checkbox" <?php echo $coordinator == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $coordinator ?>">
                                    <label for="coordinator">Coordinating Job</label>
                                </div>

                                <div class="checkbox">
                                    <input id="quotations" class="magic-checkbox" type="checkbox" <?php echo $quotations == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $quotations ?>">
                                    <label for="quotations">Quotations</label>
                                </div>
                                
                                <div class="checkbox">
                                    <input id="inspection" class="magic-checkbox" type="checkbox" <?php echo $inspection == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $inspection ?>">
                                    <label for="inspection">Inspection</label>
                                </div>

                                <div class="checkbox">
                                    <input id="payments" class="magic-checkbox" type="checkbox" <?php echo $payments == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $payments ?>">
                                    <label for="payments">Payments</label>
                                </div> 
                                
                                <div class="checkbox">
                                    <input id="maintenance" class="magic-checkbox" type="checkbox" <?php echo $maintenance == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $maintenance ?>">
                                    <label for="maintenance">Maintenance</label>
                                </div> 

                                <div class="checkbox">
                                    <input id="reports" class="magic-checkbox" type="checkbox" <?php echo $reports == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $reports ?>">
                                    <label for="reports">Reports</label>
                                </div>

                                <div class="checkbox">
                                    <input id="user_access" class="magic-checkbox" type="checkbox" <?php echo $user_access == '1' ? 'checked' : ''; ?> onclick="$(this).attr('value', this.checked ? 1 : 0)" value="<?php echo $user_access ?>">
                                    <label for="user_access">Users - [Create, Edit, Delete]</label>
                                </div>                   

                            </div>

                            <!--===================================================-->
                        </div>
                        <div class="fluid">

                            <div class="col-sm-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Edit Login Details</strong></h3>
                                    </div>

                                    <!--Block Styled Form -->
                                    <!--===================================================-->
                                    <!-- <form action=""> -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">User Name</label>
                                                        <input type="text" class="form-control input-lg" name="agent_name" id="agent_name" value="<?php echo $agent_Name ?>">
                                                        <input type="hidden" value="<?php echo $row_id ?>" id="row_id">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Password</label>
                                                        <input type="text" class="form-control input-lg" name="agent_password" id="agent_password" value="<?php echo $agent_password ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Agent Extension</label>
                                                        <input type="text" class="form-control input-lg" name="agent_extension" id="agent_extension" value="<?php echo $agent_extension ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">User Role</label>
                                                        <div class="select" style="width: 100%">
                                                            <select class="select form-control input-lg" id="agent_role" name="agent_role">
                                                                <option <?php echo $agent_Role == 'Administrator' ? 'selected' : ''; ?> value="Administrator">Administrator</option>
                                                                <option <?php echo $agent_Role == 'Telesales' ? 'selected' : ''; ?> value="Telesales">Telesales</option>
                                                                <option <?php echo $agent_Role == 'Scheduler' ? 'selected' : ''; ?> value="Scheduler">Scheduler</option>
                                                                <option <?php echo $agent_Role == 'Coordinator' ? 'selected' : ''; ?> value="Coordinator">Coordinator</option>
                                                                <option <?php echo $agent_Role == 'Payment Collector' ? 'selected' : ''; ?> value="Payment Collector">Payment Collector</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>           
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Status</label>
                                                        <div class="select" style="width: 100%">
                                                            <select class="select form-control input-lg" id="status" name="status">
                                                                <option <?php echo $status == 'Active' ? 'selected' : ''; ?> value="Active">Active</option>
                                                                <option <?php echo $status == 'Inactive' ? 'selected' : ''; ?> value="Inactive">In-active</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer text-center">
                                            <button class="btn btn-success" id="update">Update</button>
                                        </div>
                                    <!-- </form> -->
                                    <!--===================================================-->
                                    <!--End Block Styled Form -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <script type="text/javascript">
        $("#update").on('click',function(){

            inputs = $('.magic-checkbox');
            inputs.each(function() {
                var value = $(this).val();  
                if( $( this ).attr( 'type' ) === 'checkbox' ) {
                    value = +$(this).is( ':checked' );
                }
            }); 

            var row_id = $('#row_id').val();        
            var agent_name = $('#agent_name').val();        
            var agent_password = $('#agent_password').val();    
            var agent_role = $('#agent_role').val();        
            var agent_extension = $('#agent_extension ').val();   
            var bookings = $('#bookings').val();          
            var scheduler = $('#scheduler').val();         
            var coordinator = $('#coordinator').val();       
            var quotations = $('#quotations').val(); 
            var inspection = $('#inspection').val();
            var followup = $('#followup').val();          
            var payments = $('#payments').val();          
            var landing_page_leads = $('#landing_page_leads').val();
            var complaints = $('#complaints').val();  
            var maintenance = $('#maintenance').val(); 
            var reports = $('#reports').val();           
            var user_access = $('#user_access').val();       
            var status = $('#status').val();

            $.ajax({
                    type:"post",
                    url: 'ajax/update_user_details.php' , 
                    data:'row_id='+ row_id+'&agent_name='+ agent_name+'&agent_password='+ agent_password+'&agent_role='+ agent_role+'&agent_extension='+ agent_extension+'&bookings='+ bookings+'&scheduler='+ scheduler+'&coordinator='+ coordinator+'&quotations='+ quotations+'&followup='+ followup+'&payments='+ payments+'&landing_page_leads='+ landing_page_leads+'&complaints='+ complaints+'&reports='+ reports+'&user_access='+ user_access+'&status='+ status +'&inspection='+inspection +'&maintenance=' + maintenance,                       
                        success: function(msg) {
                            // location.reload();
                            $.niftyNoty({
                                type: 'purple',
                                container: 'floating',
                                title: 'Update Success',
                                message: 'User Details has been updated successfully!',
                                closeBtn: false,
                                timer: 1500,
                                onShow: function() {
                                    
                                }
                            });
                            
                        }

                });

        });
    </script>