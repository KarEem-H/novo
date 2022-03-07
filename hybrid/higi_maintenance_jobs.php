<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}
error_reporting(0);

?>

<?php include "menubar.php" ?>
        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head" style="padding-top: 15px; padding-bottom: 10px; background-color: #25476a">
                    <!--End breadcrumb-->
                    <div class="text-center pad-btm" style="color: #fff">
                        <h3 style="color: #fff">Higi Maintenance Taskboard</h3>
                        <p>You have option to <strong class="text-main" style="color: #fff">drag tasks</strong> from a list <strong class="text-main" style="color: #fff">and drop</strong> them to change their status.</p>
                    </div>
                </div>
                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                        <div class="row">
                            <div class="col-sm-4">
                    
                                <!-- Upcoming Tasklist -->
                                <!---------------------------------->
                                <div>
                                    <h4 class="text-main">New Jobs</h4>
                                    <p class="text-muted text-sm">All Assigned Jobs</p>
                                    <hr>
                                    <ul id="upcoming" class="sortable-list tasklist list-unstyled">
                                                                               
                                    </ul>
                                </div>
                                <!---------------------------------->
                    
                    
                            </div>
                            <div class="col-sm-4">                    
                    
                                <!-- Upcoming Tasklist -->
                                <!---------------------------------->
                                <div>
                                    <h4 class="text-main header-title m-t-0">In Progress</h4>
                                    <p class="text-muted text-sm">Jobs that are in progress</p>
                                    <hr>
                    
                                    <ul id="inprogress" class="sortable-list tasklist list-unstyled">
                                                                                
                                    </ul>
                                </div>
                                <!---------------------------------->
                    
                            </div>
                            <div class="col-sm-4">                    
                    
                                <!-- Upcoming Tasklist -->
                                <!---------------------------------->
                                <div>
                                    <h4 class="text-main header-title m-t-0">Completed</h4>
                                    <p class="text-muted text-sm">Jobs that are completed</p>
                                    <hr>
                    
                                    <ul id="completed" class="sortable-list tasklist list-unstyled">
                                        
                                    </ul>
                                </div>
                                <!---------------------------------->
                            </div>
                            <div id="maintenance_photos_dummy" style="display:none"></div>

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

<?php

include "footer.php";

?>

<script src="js/higi_maintenance_jobs_script.js"></script>

<script type="text/javascript">
    localStorage.setItem('maintenance', "<?php echo $_SESSION['ADMIN_ID']['MAINTENANCE']; ?>");
</script>