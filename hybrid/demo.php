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
                <h3>Telesales Performance Dashboard</h3>
                <p>A Quick View on Performance of Staffs, Booking, Revenue</p>  
                <div style="margin-right: 5px">
                    <select name="month_filter" id='filter' disabled style="float: right; padding: 5px">
                        <?php 

                        for($i=0;$i<=11;$i++){
                            $month=date('F',strtotime("first day of -$i month"));
                            echo "<option value='$month'>$month</option><br>";
                        }?>                                                                    
                    </select>
                </div>              
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div id="dashboard_data">
                <div class="row">
                    <div class="col-sm-2 col-md-2">                   

                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-mint text-center">
                                <h4 class="text-light mar-no pad-top">Gina</h4>
                                <p class="mar-btm">Agent 1</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/11.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="gina_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="gina_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="gina_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="gina_cancelled">0</span>
                                        Cancelled
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="gina_quotation">0</span>
                                        Quotations
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="gina_revenue">0 AED</span>
                                        Revenue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->
                    </div>

                    <div class="col-sm-2 col-md-2">

                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-success text-center">
                                <h4 class="text-light mar-no pad-top">Grace</h4>
                                <p class="mar-btm">Agent 2</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/8.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="grace_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="grace_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="grace_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="grace_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="grace_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="grace_revenue">0 AED</span>
                                        Revenue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->


                    </div>
                    <div class="col-sm-2 col-md-2">


                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-warning text-center">
                                <h4 class="text-light mar-no pad-top">Miles</h4>
                                <p class="mar-btm">Agent 3</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/12.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="miles_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="miles_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="miles_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="miles_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="miles_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="miles_revenue">0 AED</span>
                                        Revenue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->


                    </div>
                    <div class="col-sm-2 col-md-2">


                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-info text-center">
                                <h4 class="text-light mar-no pad-top">Angel</h4>
                                <p class="mar-btm">Agent 4</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/13.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="angel_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="angel_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="angel_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="angel_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="angel_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="angel_revenue">0 AED</span>
                                        Revenue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->


                    </div>
                    <div class="col-sm-2 col-md-2">


                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-purple text-center">
                                <h4 class="text-light mar-no pad-top">Josephine</h4>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/15.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="jos_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="jos_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="jos_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="jos_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="jos_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jos_revenue">0 AED</span>
                                        Revenue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->


                    </div>
                    <div class="col-sm-2 col-md-2">


                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-danger text-center">
                                <h4 class="text-light mar-no pad-top">Ross</h4>
                                <p class="mar-btm">Collections</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/14.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="ross_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="ross_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="ross_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="ross_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="ross_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="ross_revenue">0 AED</span>
                                        Revenue
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->                   

                    </div>                            
                </div>
                <div class='row'>
                    <div class='col-md-6 col-lg-6'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-primary pad-all">
                                        <i class="demo-pli-add-cart icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_booking_count">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Bookings</p>
                                    </div>
                                </div>                          
                            </div>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-purple pad-all">
                                        <i class="demo-pli-receipt-4 icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_quotation">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Quotations</p>
                                    </div>
                                </div>                                
                            </div>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-danger pad-all">
                                        <i class="demo-pli-trash icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_cancelled">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Cancellation</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="panel media middle">
                                    <div class="media-left bg-dark pad-all">
                                        <i class="demo-pli-speech-bubble-7 icon-3x"></i>
                                    </div>
                                    <div class="media-body pad-all extra-pad">
                                        <p class="text-2x mar-no text-semibold text-main"><span id="total_complaints">0</span></p>
                                        <p class="text-muted mar-no make-it-bold">Total Complaints</p>
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-warning"><i class="demo-pli-support icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_inbound">0</span></p><p class="text-muted mar-no make-it-bold">Total Inbound Calls</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-info"><i class="demo-pli-support icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_outbound">0</span></p><p class="text-muted mar-no make-it-bold">Total Outbound Calls</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-primary"><i class="demo-pli-old-telephone icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_autodialer_calls">0</span></p><p class="text-muted mar-no make-it-bold">Total Auto Dialer Calls</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-purple"><i class="demo-pli-smartphone-3 icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id='total_whatsapp_count'>0</span></p><p class="text-muted mar-no make-it-bold">Total Whatsapp Message</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===================================================-->
    <!--END CONTENT CONTAINER-->

    <?php include "sidebar.php" ?>

    <?php include "footer.php" ?>

    <script type="text/javascript">
        $(document).ready(function(){

            GetData();

            function GetData(){
                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_daily_agent_data.php",
                    dataType: 'JSON',
                    success: function(msg){

                    var miles_booking_count = msg[1].total_count;
                    var miles_inbound_count = msg[1].total_inbound_calls;
                    var miles_outbound_count = msg[1].total_outbound_calls;
                    var miles_revenue = msg[1].total_revenue;
                    var miles_quotation = msg[1].total_quotation;
                    var miles_cancelled = msg[1].total_cancelled;


                    $('#miles_booking_count').text(miles_booking_count);
                    $('#miles_inbound_count').text(miles_inbound_count);
                    $('#miles_outbound_count').text(miles_outbound_count);
                    $('#miles_revenue').text('AED ' + miles_revenue.toFixed(2));
                    $('#miles_quotation').text(miles_quotation);
                    $('#miles_cancelled').text(miles_cancelled);

                    var ross_booking_count = msg[0].total_count;
                    var ross_inbound_count = msg[0].total_inbound_calls;
                    var ross_outbound_count = msg[0].total_outbound_calls;
                    var ross_revenue = msg[0].total_revenue;
                    var ross_quotation = msg[0].total_quotation;
                    var ross_cancelled = msg[0].total_cancelled;


                    $('#ross_booking_count').text(ross_booking_count);
                    $('#ross_inbound_count').text(ross_inbound_count);
                    $('#ross_outbound_count').text(ross_outbound_count);
                    $('#ross_revenue').text('AED ' + ross_revenue.toFixed(2));
                    $('#ross_quotation').text(ross_quotation);
                    $('#ross_cancelled').text(ross_cancelled);


                    var gina_booking_count = msg[2].total_count;
                    var gina_inbound_count = msg[2].total_inbound_calls;
                    var gina_outbound_count = msg[2].total_outbound_calls;
                    var gina_revenue = msg[2].total_revenue;
                    var gina_quotation = msg[2].total_quotation;
                    var gina_cancelled = msg[2].total_cancelled;

                    $('#gina_booking_count').text(gina_booking_count);
                    $('#gina_inbound_count').text(gina_inbound_count);
                    $('#gina_outbound_count').text(gina_outbound_count);
                    $('#gina_revenue').text('AED ' + gina_revenue.toFixed(2));
                    $('#gina_quotation').text(gina_quotation);
                    $('#gina_cancelled').text(gina_cancelled);

                    var grace_booking_count = msg[3].total_count;
                    var grace_inbound_count = msg[3].total_inbound_calls;
                    var grace_outbound_count = msg[3].total_outbound_calls;
                    var grace_revenue = msg[3].total_revenue;
                    var grace_quotation = msg[3].total_quotation;
                    var grace_cancelled = msg[3].total_cancelled;

                    $('#grace_booking_count').text(grace_booking_count);
                    $('#grace_inbound_count').text(grace_inbound_count);
                    $('#grace_outbound_count').text(grace_outbound_count);
                    $('#grace_revenue').text('AED ' + grace_revenue.toFixed(2));
                    $('#grace_quotation').text(grace_quotation);
                    $('#grace_cancelled').text(grace_cancelled);


                    var angel_booking_count = msg[4].total_count;
                    var angel_inbound_count = msg[4].total_inbound_calls;
                    var angel_outbound_count = msg[4].total_outbound_calls;
                    var angel_revenue = msg[4].total_revenue;
                    var angel_quotation = msg[4].total_quotation;
                    var angel_cancelled = msg[4].total_cancelled;

                    $('#angel_booking_count').text(angel_booking_count);
                    $('#angel_inbound_count').text(angel_inbound_count);
                    $('#angel_outbound_count').text(angel_outbound_count);
                    $('#angel_revenue').text('AED ' + angel_revenue.toFixed(2));
                    $('#angel_quotation').text(angel_quotation);
                    $('#angel_cancelled').text(angel_cancelled);

                    var jos_booking_count = msg[5].total_count;
                    var jos_inbound_count = msg[5].total_inbound_calls;
                    var jos_outbound_count = msg[5].total_outbound_calls;
                    var jos_revenue = msg[5].total_revenue;
                    var jos_quotation = msg[5].total_quotation;
                    var jos_cancelled = msg[5].total_cancelled;

                    $('#jos_booking_count').text(jos_booking_count);
                    $('#jos_inbound_count').text(jos_inbound_count);
                    $('#jos_outbound_count').text(jos_outbound_count);
                    $('#jos_revenue').text('AED ' + jos_revenue.toFixed(2));
                    $('#jos_quotation').text(jos_quotation);
                    $('#jos_cancelled').text(jos_cancelled);
                    
                    var aileen_quotation = msg[6].total_quotation;
                    var hem_quotation = msg[7].total_quotation;


                    var total_booking_count = miles_booking_count + ross_booking_count + gina_booking_count + grace_booking_count + angel_booking_count + jos_booking_count;
                    var total_quotation = miles_quotation + ross_quotation + gina_quotation + grace_quotation + angel_quotation + jos_quotation + aileen_quotation + hem_quotation;
                    var total_cancelled = miles_cancelled + ross_cancelled + gina_cancelled + grace_cancelled + angel_cancelled + jos_cancelled;
                    var total_inbound = miles_inbound_count + ross_inbound_count + gina_inbound_count + grace_inbound_count + angel_inbound_count + jos_inbound_count;
                    var total_outbound = miles_outbound_count + ross_outbound_count + gina_outbound_count + grace_outbound_count + angel_outbound_count + jos_outbound_count;

                    $('#total_booking_count').text(total_booking_count);
                    $('#total_quotation').text(total_quotation);
                    $('#total_cancelled').text(total_cancelled);
                    $('#total_inbound').text(total_inbound);
                    $('#total_outbound').text(total_outbound);


                }
            });

                var selected_month = $('#filter').val();

                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_monthly_data.php",
                    dataType: 'JSON',
                    async: true,
                    success: function(msg){

                        var total_complaints = msg[0].total_complaints;
                        var total_autodialer = msg[0].total_auto_calls;
                        var total_whatsapp = msg[0].total_whatsapp;

                        if(total_whatsapp!=null){

                            $('#total_whatsapp_count').text(total_whatsapp);

                        }

                        if(total_autodialer!=null){

                            $('#total_autodialer_calls').text(total_autodialer);

                        }

                        if(total_complaints!=null){

                            $('#total_complaints').text(total_complaints);
                        }


                    }
                });

            }

            setInterval(GetData, 60000);

        });
    </script>