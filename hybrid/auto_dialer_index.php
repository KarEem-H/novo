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

    .dt-button {
        padding: 10px;
        border: 2px solid;
        margin: 5px;
        display: none;
    }

    .dataTables_length{
        width: 30%;
        float: left;
        padding-top: 5px;
    }

    @media screen and (max-width: 767px){

        .dataTables_length{
            display: none !important;
        }
    }
</style>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {

    echo "<script type='text/javascript'>location.href = 'login.php';</script>";

}
    $today_date = date("Y-m-d");
    date_default_timezone_set("Asia/Dubai");
    $current_time = date("h:i");
    
    $call_date = date("d-m-Y");


    // BOOKING COUNT STARTS HERE

    $eric_bookings = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='Eric' AND booking_date='$today_date'");

    $ericbooking = mysqli_fetch_row($eric_bookings);
    $tot_eric_bookings = $ericbooking[0];

    $mabel_bookings = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='Mabel' AND booking_date='$today_date'");

    $mabelbooking = mysqli_fetch_row($mabel_bookings);
    $tot_mabel_bookings = $mabelbooking[0];

    $jean_bookings = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='Jean' AND booking_date='$today_date'");

    $jeanbooking = mysqli_fetch_row($jean_bookings);
    $tot_jean_bookings = $jeanbooking[0];


    // CALL COUNT STARTS HERE

    $eric_calls = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1' AND agent_name='Eric' AND agent_remark != 'No Answer' AND call_date='$call_date'");

    $ericcalls = mysqli_fetch_row($eric_calls);
    $tot_eric_calls = $ericcalls[0];

    $mabel_calls = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1' AND agent_name='Mabel' AND agent_remark != 'No Answer' AND call_date='$call_date'");

    $mabelcalls = mysqli_fetch_row($mabel_calls);
    $tot_mabel_calls = $mabelcalls[0];

    $jean_calls = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1' AND agent_name='Jean' AND agent_remark != 'No Answer' AND call_date='$call_date'");

    $jeancalls = mysqli_fetch_row($jean_calls);
    $tot_jean_calls = $jeancalls[0];
    

    // CALL COUNT ENDS HERE

    // TOTAL LIST COUNT STARTS HERE

    $eric_list = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='0' AND agent_name='Eric'");

    $ericlist = mysqli_fetch_row($eric_list);
    $tot_eric_list = $ericlist[0];

    $mabel_list = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='0' AND agent_name='Mabel'");

    $mabellist = mysqli_fetch_row($mabel_list);
    $tot_mabel_list = $mabellist[0];

    $jean_list = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='0' AND agent_name='Jean'");

    $jeanlist = mysqli_fetch_row($jean_list);
    $tot_jean_list = $jeanlist[0];


    // TOTAL LIST COUNT ENDS HERE

    // OVERALL DATA STARTS HERE

    $tot_bookings = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1' AND agent_remark ='Booked'");

    $totbooking = mysqli_fetch_row($tot_bookings);
    $total_bookings = $totbooking[0];

    $tot_calls = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1'");

    $totcalls = mysqli_fetch_row($tot_calls);
    $total_calls = $totcalls[0];

    $tot_connected = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1' AND agent_remark != 'No Answer'");

    $totconnected = mysqli_fetch_row($tot_connected);
    $total_connected = $totconnected[0];

    $tot_list = mysqli_query($conn,"SELECT COUNT(id) as booking_count FROM `auto_dialer` WHERE status='1' AND agent_remark != 'No Answer'");

    $totlist = mysqli_fetch_row($tot_list);
    $total_list = $totlist[0];

    // OVERALL DATA ENDS HERE


?>
<?php include "menubar.php" ?>

<div class="boxed">
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div id="page-head">

            <div class="pad-all text-center">
                <h3>Auto Dialer Dashboard</h3>
                <p>Agents - Calls - Booked</p>  
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">


            <div id="dashboard_data">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="panel widget">
                                <div class="widget-header bg-success text-center">
                                    <h4 class="text-light mar-no pad-top">Mabel</h4>
                                    <p class="mar-btm">Telesales</p>
                                </div>
                                <div class="widget-body">
                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/8.png">

                                    <div class="list-group bg-trans mar-no">
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-primary pull-right"><?php echo $tot_mabel_calls ?></span>
                                            Calls Connected
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-success pull-right"><?php echo $tot_mabel_bookings ?></span>
                                            Booked
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-danger pull-right"><?php echo $tot_mabel_list ?></span>
                                            Remaining Count
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-sm-3">
                            <div class="panel widget">
                                <div class="widget-header bg-warning text-center">
                                    <h4 class="text-light mar-no pad-top">Eric</h4>
                                    <p class="mar-btm">Telesales</p>
                                </div>
                                <div class="widget-body">
                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/12.png">

                                    <div class="list-group bg-trans mar-no">
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-primary pull-right"><?php echo $tot_eric_calls ?></span>
                                            Calls Connected
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-success pull-right"><?php echo $tot_eric_bookings ?></span>
                                            Booked
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-danger pull-right"><?php echo $tot_eric_list ?></span>
                                            Remaining Count
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-sm-3">
                            <div class="panel widget">
                                <div class="widget-header bg-purple text-center">
                                    <h4 class="text-light mar-no pad-top">Jean</h4>
                                    <p class="mar-btm">Telesales</p>
                                </div>
                                <div class="widget-body">
                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/15.png">
                                    <div class="list-group bg-trans mar-no">
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-primary pull-right"><?php echo $tot_jean_calls ?></span>
                                            Calls Connected
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-success pull-right"><?php echo $tot_jean_bookings ?></span>
                                            Booked
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-danger pull-right"><?php echo $tot_jean_list ?></span>
                                            Remaining Count
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-sm-3">
                            <div class="panel widget">
                                <div class="widget-header bg-info text-center">
                                    <h4 class="text-light mar-no pad-top">Coming Soon</h4>
                                    <p class="mar-btm">Telesales</p>
                                </div>
                                <div class="widget-body">
                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/9.png">
                                    <div class="list-group bg-trans mar-no">
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-primary pull-right"><?php echo $tot_criseilda_calls ?></span>
                                            Calls Connected
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-success pull-right"><?php echo $tot_criseilda_bookings ?></span>
                                            Booked
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-danger pull-right"><?php echo $tot_criseilda_list ?></span>
                                            Remaining Count
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <!-- <div class="col-sm-3">
                            <div class="panel widget">
                                <div class="widget-header bg-danger text-center">
                                    <h4 class="text-light mar-no pad-top">Daisy</h4>
                                    <p class="mar-btm">Telesales</p>
                                </div>
                                <div class="widget-body">
                                    <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/14.png">

                                    <div class="list-group bg-trans mar-no">
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-primary pull-right"><?php echo $tot_daisy_calls ?></span>
                                            Calls Connected
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-success pull-right"><?php echo $tot_daisy_bookings ?></span>
                                            Booked
                                        </a>
                                        <a class="list-group-item list-item-sm" href="#">
                                            <span class="label label-danger pull-right"><?php echo $tot_daisy_list ?></span>
                                            Remaining Count
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>   -->              
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-danger"><i class="demo-pli-wallet-2 icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><?php echo $total_calls ?></p><p class="text-muted mar-no">Total Calls Made</p></div></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-info"><i class="demo-pli-wallet-2 icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><?php echo $total_connected ?></p><p class="text-muted mar-no">Total Connected</p></div></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-primary"><i class="demo-pli-wallet-2 icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><?php echo $total_bookings ?></p><p class="text-muted mar-no">Total Booked</p></div></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Day wise Performance</h3>
                                </div>

                                <!--Bordered Table-->
                                <!--===================================================-->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div id="demo-custom-toolbar2" class="table-toolbar-left col-sm-12 col-md-12" style="padding: 18px;" width="100%">
                                            <a href="#!" class="btn btn-default btn-active-purple btn-excel">Excel</a>
                                            <a href="#!" class="btn btn-default btn-active-purple btn-csv">CSV</a>
                                            <a href="#!" class="btn btn-default btn-active-purple btn-pdf">PDF</a>
                                            <a href="#!" class="btn btn-default btn-active-purple btn-print">Print</a>
                                            <div style="text-align: right;float: right">
                                                <select name="month_filter" id='month_filter' style="padding: 5px">
                                                    <option selected disabled>Month Filter</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
                                                </select>                        
                                                <select name="name_filter" id='name_filter' style="padding: 5px">
                                                    <option selected disabled>Agent Filter</option>
                                                    <option>Mabel</option>                            
                                                    <option>Eric</option>                            
                                                    <option>Jean</option>                            
                                                </select>
                                            </div>
                                        </div>

                                        <table id="agent_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                          <thead>
                                              <tr>
                                                  <th class="min-tablet">Id</th>
                                                  <th class="min-tablet">Date</th>
                                                  <th class="min-tablet">Agent Name</th>
                                                  <th class="min-tablet">Calls Connected</th>
                                                  <th class="min-tablet">Booked</th>
                                              </tr>
                                          </thead>
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

          var dataTable = $('#agent_table').DataTable({
            'processing': true,
            'serverSide': false,
            'serverMethod': 'post',
            "scrollX": true,
            "paging": true,
            'order': [[1, 'desc']],
            
            responsive: true,
            "dom": 'Blfrtip',
                  buttons: [{
                        extend: 'excel',
                        title: 'Auto Dialer - Day Wise Report - Telesales Dashboard'
                        
                    },
                    {
                        extend: 'csv',
                        title: 'Auto Dialer - Day Wise Report - Telesales Dashboard'
                        
                    },
                    {
                        extend: 'pdf',
                        title: 'Auto Dialer - Day Wise Report - Telesales Dashboard'
                       
                    },
                    {
                        extend: 'print',
                        title: 'Auto Dialer - Day Wise Report - Telesales Dashboard'
                        
                    },
                  ],
            'searching': false,
            'ajax': {
               'url':'ajax/get_auto_dialer_monthly_data.php',
               'data': function(data){
                  // Read values
                  var month = $('#month_filter').val();
                  var name = $('#name_filter').val();

                  // Append to data
                  data.month_filter = month;
                  data.name_filter = name;
               }
            },
            'columns': [
               { data: 'id' }, 
               { data: 'date' },
               { data: 'agent_name' },
               { data: 'call_count' },
               { data: 'booking_count' },
            ]
          });

          $('#month_filter').change(function(){
            dataTable.draw();
          });

          $('#name_filter').change(function(){
            dataTable.draw();
          });

            $('.btn-csv').click(function(){
              $('.buttons-csv').trigger('click');
            });
            $('.btn-excel').click(function(){
              $('.buttons-excel').trigger('click');
            });
            $('.btn-pdf').click(function(){
              $('.buttons-pdf').trigger('click');
            });   
            $('.btn-print').click(function(){
              $('.buttons-print').trigger('click');
            });
            
            setTimeout(function(){ location.reload(); }, 100000);


        });  
</script>