<?php include "header.php" ?>
<style>
    .text-2x{
        font-size:1.8em !important;
    }
    .widget-body {
        padding: 50px 0px 15px;
    }
    .label{
        font-size: 100%;
    }

    .extra-pad{
        padding-top: 19px;
        padding-bottom: 19px;
        padding-right: 15px;
        padding-left: 15px;
    }
    .make-it-bold{
        font-weight:600;
    }
</style>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {

    echo "<script type='text/javascript'>location.href = 'login.php';</script>";

}


?>
<?php include "menubar.php" ?>

<div class="boxed">
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div id="page-head">
            <div class="pad-all text-center">
                <!-- <h3 class="agent_data">Birds Eye View</h3>-->
                <!--<p>A Quick View on Performance of Telesales, Operations, Finance</p>-->
                <div style="margin-right: 5px;">
                    <select name="other_filter" id='other_filter' style="float: right; padding: 5px; margin-right:5px">
                        <option value='Today' selected>Today</option>
                        <option value='Yesterday'>Yesterday</option>
                        <option value='Tomorrow'>Tomorrow</option>
                        <option value='Last 7 Days'>Last 7 Days</option>
                        <option value='Next 7 Days'>Next 7 Days</option>
                        <option value='Last Month'>Last Month</option>
                        <option value='Current Month'>This Month</option>
                        <option value='Next Month'>Next Month</option>
                        <option value='All'>All</option>
                    </select>
                </div>              
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div id="dashboard_data">

                <!-- TELESALES DATA -->

                <div class="pad-all text-center">
                    <h3>Telesales Performance</h3>
                </div>
                <div class='row statistics_data'>
                    <div class='col-md-6 col-lg-6'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-success pad-all">
                                        <i class="demo-pli-mine icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_t_bookings">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Bookings</p>
                                    </div>
                                </div>                          
                            </div>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-danger pad-all">
                                        <i class="demo-pli-close icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_t_cancelled">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Cancellation</p>
                                    </div>
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-purple"><i class="demo-pli-clock icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_t_hours">0</span></p><p class="text-muted mar-no make-it-bold">Total Hours Booked</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-warning"><i class="demo-pli-coin icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id='total_t_revenue'>0</span> AED</p><p class="text-muted mar-no make-it-bold">Total Revenue</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OPERATIONS DATA -->

                <div class="pad-all text-center">
                    <h3>Operations Performance</h3>
                </div>
                <div class='row statistics_data'>
                    <div class='col-md-6 col-lg-6'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-info pad-all">
                                        <i class="demo-pli-mine icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_o_bookings">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Jobs Scheduled</p>
                                    </div>
                                </div>                          
                            </div>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-warning pad-all">
                                        <i class="demo-pli-warning-window icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_o_unassigned">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Un-Assigned Jobs</p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-primary"><i class="demo-pli-clock icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_o_hours">0</span></p><p class="text-muted mar-no make-it-bold">Total Hours Assigned</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-success"><i class="demo-pli-coin icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_o_revenue">0</span> AED</p><p class="text-muted mar-no make-it-bold">Total Revenue</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FINANCE DATA -->

                <div class="pad-all text-center">
                    <h3>Finance Performance</h3>
                </div>
                <div class='row statistics_data'>
                    <div class='col-md-6 col-lg-6'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-purple pad-all">
                                        <i class="demo-pli-mine icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_f_paid">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Jobs Paid</p>
                                    </div>
                                </div>                          
                            </div>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-success pad-all">
                                        <i class="demo-pli-wallet-2 icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_f_revenue">0</span> AED</p>
                                        <p class="text-muted mar-no make-it-bold">Total Revenue</p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-info"><i class="demo-pli-bag-coin icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_f_receipt">0</span> AED</p><p class="text-muted mar-no make-it-bold">Total Received Amount</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-danger"><i class="demo-pli-coin icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_f_outstanding">0</span> AED</p><p class="text-muted mar-no make-it-bold">Total Outstanding Amount</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
    
    

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
        $(document).ready(function(){

            GetData();

            $('#other_filter').on('change',function(){

                GetData();
                
                var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

                $('#dashboard_data').append(Loader);
                $('html').addClass('.no-scroll');

            });

            function GetData(){

                var other_filter = $('#other_filter').val();

                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_birds_eye_data.php",
                    data: 'filter=' + other_filter,
                    dataType: 'JSON',
                    async: true,
                    success: function(msg){
                        
                        $("#loaderimg").remove();
                        $('html').removeClass('no-scroll');

                        var total_t_bookings        = msg[0].total_t_bookings;
                        var total_t_cancelled       = msg[0].total_t_cancelled;
                        var total_t_hours           = msg[0].total_t_hours;
                        var total_t_revenue         = msg[0].total_t_revenue;

                        var total_o_bookings        = msg[0].total_o_bookings;
                        var total_o_unassigned      = msg[0].total_o_unassigned;
                        var total_o_hours           = msg[0].total_o_hours;
                        var total_o_revenue         = msg[0].total_o_revenue;


                        var total_f_paid            = msg[0].total_f_paid;
                        var total_f_revenue         = msg[0].total_f_revenue;
                        var total_f_receipt         = msg[0].total_f_receipt;
                        var total_f_outstanding     = msg[0].total_f_outstanding;

                        if(total_t_bookings != null){

                            $('#total_t_bookings').text(total_t_bookings);

                        }else{
                            $('#total_t_bookings').text('0');
                        }

                        if(total_t_cancelled != null){

                            $('#total_t_cancelled').text(total_t_cancelled);

                        }else{
                            $('#total_t_cancelled').text('0');
                        }

                        if(total_t_hours != null){

                            $('#total_t_hours').text(total_t_hours);
                        }else{
                            $('#total_t_hours').text('0');
                        }

                        if(total_t_revenue != null){

                            $('#total_t_revenue').text(total_t_revenue);
                        }else{
                            $('#total_t_revenue').text('0');
                        }


                        if(total_o_bookings != null){

                            $('#total_o_bookings').text(total_o_bookings);

                        }else{
                            $('#total_o_bookings').text('0');
                        }

                        if(total_o_unassigned != null){

                            $('#total_o_unassigned').text(total_o_unassigned);

                        }else{
                            $('#total_o_unassigned').text('0');
                        }

                        if(total_o_hours != null){

                            $('#total_o_hours').text(total_o_hours);
                        }else{
                            $('#total_o_hours').text('0');
                        }

                        if(total_o_revenue != null){

                            $('#total_o_revenue').text(total_o_revenue);
                        }else{
                            $('#total_o_revenue').text('0');
                        }

                        if(total_f_paid != null){

                            $('#total_f_paid').text(total_f_paid);

                        }else{
                            $('#total_f_paid').text('0');
                        }

                        if(total_f_revenue != null){

                            $('#total_f_revenue').text(total_f_revenue);

                        }else{
                            $('#total_f_revenue').text('0');
                        }

                        if(total_f_receipt != null){

                            $('#total_f_receipt').text(total_f_receipt);
                        }else{
                            $('#total_f_receipt').text('0');
                        }

                        if(total_f_outstanding != null){

                            $('#total_f_outstanding').text(total_f_outstanding);
                        }else{
                            $('#total_f_outstanding').text('0');
                        }

                        

                    }
                });
            }
            

            setInterval(GetData, 120000);

        });
    </script>