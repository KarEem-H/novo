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
                <h3 class="agent_data">Telesales Performance Dashboard</h3>
                <h3 class="statistics_data">Telesales Performance Dashboard</h3>
                <h3 class="maintenance_data">Maintenance Dashboard</h3>
                <p>A Quick View on Performance of Staffs, Booking, Revenue</p>  
                <div style="margin-right: 5px;">
                    
                    <select name="dashboard_filter" id='dashboard_filter' style="float: right; padding: 5px">
                        <option value='Agent Dashboard' selected>Agent Dashboard</option>
                        <option value='Statistics Dashboard'>Statistics Dashboard</option>
                        <option value='Maintenance Dashboard'>Maintenance Dashboard</option>
                    </select>
                    <select name="other_filter" id='other_filter' style="float: right; padding: 5px; margin-right:5px">
                        <option value='Today' selected>Today</option>
                        <option value='Yesterday'>Yesterday</option>
                        <option value='Current Month'>This Month</option>
                        <option value='Last Month'>Last Month</option>
                        <option value='All'>All</option>
                    </select>
                </div>              
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div id="dashboard_data">
                <div class="row agent_data">
                    
                    <div class="col-sm-2 col-md-2">


                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-danger text-center">
                                <h4 class="text-light mar-no pad-top">Jam</h4>
                                <p class="mar-btm">Collections</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/jam.jpeg">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="jam_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="jam_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="jam_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="jam_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="jam_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jam_revenue">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jam_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                            <div class="widget-header bg-mint text-center">
                                <h4 class="text-light mar-no pad-top">Pauline</h4>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/pauline.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="pauline_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="pauline_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="pauline_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="pauline_cancelled">0</span>
                                        Cancelled
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="pauline_quotation">0</span>
                                        Quotations
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="pauline_revenue">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="pauline_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Leslie</h4>
                                <h5 class="text-light mar-no mar-btm">(Beauty Atelier)</h5>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/leslie.jpeg">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="leslie_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="leslie_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="leslie_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="leslie_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="leslie_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="leslie_revenue">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="leslie_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Maybel</h4>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/mabel.jpeg">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="mabel_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="mabel_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="mabel_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="mabel_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="mabel_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="mabel_revenue">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="mabel_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Eric</h4>
                                <h5 class="text-light mar-no mar-btm">(MEP)</h5>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/Eric.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="eric_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="eric_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="eric_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="eric_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="eric_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="eric_revenue">0 AED</span>
                                        Revenue(MEP)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="eric_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Jean</h4>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/jean.jpeg">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="jean_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="jean_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="jean_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="jean_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="jean_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jean_revenue">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jean_quotation_revenue">0 AED</span>
                                        Revenue(M)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->


                    </div>
                                                
                </div>
                <div class='row agent_data'>

                    <div class="col-sm-2 col-md-2">                   

                        <!-- Contact Widget -->
                        <!---------------------------------->
                        <div class="panel widget">
                            <div class="widget-header bg-purple text-center">
                                <h4 class="text-light mar-no pad-top">Arianne</h4>
                                <h5 class="text-light mar-no mar-btm">(HIGI Movers)</h5>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/arianne.jpeg">

                                <div class="list-group bg-trans mar-no">
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-purple pull-right" id="arianne_inbound_count">0</span>
                                         Inbound Calls
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-mint pull-right" id="arianne_outbound_count">0</span>
                                         Outbound Calls
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-primary pull-right" id="arianne_booking_count">0</span>
                                         Bookings
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-danger pull-right" id="arianne_cancelled">0</span>
                                         Cancelled
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-warning pull-right" id="arianne_quotation">0</span>
                                         Quotations
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-success pull-right" id="arianne_revenue">0 AED</span>
                                         Revenue(C)
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="arianne_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Edward</h4>
                                <p class="mar-btm">Telesales</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/agents/Edward.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-purple pull-right" id="edward_inbound_count">0</span>
                                         Inbound Calls
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-mint pull-right" id="edward_outbound_count">0</span>
                                         Outbound Calls
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-primary pull-right" id="edward_booking_count">0</span>
                                         Bookings
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-danger pull-right" id="edward_cancelled">0</span>
                                         Cancelled
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-warning pull-right" id="edward_quotation">0</span>
                                         Quotations
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                         <span class="label label-success pull-right" id="edward_revenue">0 AED</span>
                                         Revenue(C)
                                     </a>
                                     <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="edward_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                            <div class="widget-header bg-mint text-center">
                                <h4 class="text-light mar-no pad-top">Ms.Jen</h4>
                                <p class="mar-btm">Deep Cleaning</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/11.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="jen_inbound_count">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="jen_outbound_count">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="jen_booking_count">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="jen_cancelled">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="jen_quotation">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jen_revenue">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="jen_quotation_revenue">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Coming Soon</h4>
                                <p class="mar-btm">Agent</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/14.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Coming Soon</h4>
                                <p class="mar-btm">Agent</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/8.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="">0 AED</span>
                                        Revenue(M)
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
                                <h4 class="text-light mar-no pad-top">Coming Soon</h4>
                                <p class="mar-btm">Agent</p>
                            </div>
                            <div class="widget-body">
                                <img alt="Profile Picture" class="widget-img img-circle img-border-light" src="img/profile-photos/12.png">

                                <div class="list-group bg-trans mar-no">
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-purple pull-right" id="">0</span>
                                        Inbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-mint pull-right" id="">0</span>
                                        Outbound Calls
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-primary pull-right" id="">0</span>
                                        Bookings
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-danger pull-right" id="">0</span>
                                        Cancelled
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-warning pull-right" id="">0</span>
                                        Quotations
                                    </a>                                            
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="">0 AED</span>
                                        Revenue(C)
                                    </a>
                                    <a class="list-group-item list-item-sm make-it-bold" href="#">
                                        <span class="label label-success pull-right" id="">0 AED</span>
                                        Revenue(M)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!---------------------------------->                   

                    </div> 

                    
                </div>

                <div class="row statistics_data">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Daily Bookings</h3>
                            </div>
                            <div class="pad-all">
                                <div id="demo-morris-line-legend-1" class="text-center"></div>
                                <div id="daily_booking_chart" style="height:268px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row statistics_data'>
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
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-primary"><i class="demo-pli-mine icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id="total_collection">0</span></p><p class="text-muted mar-no make-it-bold">Total Collection</p></div></div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel media middle pad-all"><div class="media-left"><span class="icon-wrap icon-wrap-sm icon-circle bg-purple"><i class="demo-pli-warning-window icon-2x"></i></span></div><div class="media-body"><p class="text-2x mar-no text-semibold text-main"><span id='total_receivable'>0</span></p><p class="text-muted mar-no make-it-bold">Total Receivable</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row maintenance_data">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Quotations</h3>
                            </div>
                            <div class="panel-body">
                                <div id="daily_inspection_chart" style="height: 250px; text-transform: uppercase;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row maintenance_data">
                    <div class="col-md-3">
                        <div class="panel panel-warning panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="ion-clipboard icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_inspection">0</p>
                                <p class="mar-no">Total Inspections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-info panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="demo-pli-file-zip icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_quotation">0</p>
                                <p class="mar-no">Quotations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-success panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="ion-thumbsup icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_quotation_won">0</p>
                                <p class="mar-no">Quotations Won</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-purple panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="demo-pli-coin icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_revenue">0</p>
                                <p class="mar-no">Revenue</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-danger panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="ion-thumbsdown icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_quotation_lost">0</p>
                                <p class="mar-no">Quotations Lost</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-primary panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="ion-speedometer icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_quotation_open">0</p>
                                <p class="mar-no">Quotations Open</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-warning panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="ion-settings icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_jobs_open">0</p>
                                <p class="mar-no">Jobs In Progress</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="panel panel-info panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="ion-trophy icon-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold tot_jobs_completed">0</p>
                                <p class="mar-no">Jobs Completed</p>
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

            $('.agent_data').show();
            $('.statistics_data').hide();
            $('.maintenance_data').hide();


            $('#other_filter').on('change',function(){

                GetData();
                GetMaintenanceData();
                
                var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

                $('#dashboard_data').append(Loader);
                $('html').addClass('.no-scroll');

            });


            $('#dashboard_filter').on('change',function(){

                var dashboard_filter = $('#dashboard_filter').val();


                if( dashboard_filter == 'Agent Dashboard' ) {

                    $('.agent_data').show();
                    $('.statistics_data').hide();
                    $('.maintenance_data').hide();

                    GetData();
                    
                    var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

                    $('#dashboard_data').append(Loader);
                    $('html').addClass('.no-scroll');
                    
                }

                if( dashboard_filter == 'Statistics Dashboard' ) {

                    $('.agent_data').hide();
                    $('.statistics_data').show();
                    $('.maintenance_data').hide();
                    
                    GetData();
                    
                    var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

                    $('#dashboard_data').append(Loader);
                    $('html').addClass('.no-scroll');
                    
                }

                if( dashboard_filter == 'Maintenance Dashboard' ) {

                    $('.agent_data').hide();
                    $('.statistics_data').hide();
                    $('.maintenance_data').show();

                    GetMaintenanceData();
                    
                    var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

                    $('#dashboard_data').append(Loader);
                    $('html').addClass('.no-scroll');
                    
                }
                
                

            });

            function GetData(){

                var other_filter = $('#other_filter').val();

                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_daily_agent_data.php",
                    dataType: 'JSON',
                    data: 'filter=' + other_filter,
                    success: function(msg){
                        
                    $("#loaderimg").remove();
                    $('html').removeClass('no-scroll');

                    var leslie_booking_count = msg[0].total_count;
                    var leslie_inbound_count = msg[0].total_inbound_calls;
                    var leslie_outbound_count = msg[0].total_outbound_calls;
                    var leslie_revenue = msg[0].total_revenue;
                    var leslie_quotation_revenue = msg[0].total_quotation_revenue;
                    var leslie_quotation = msg[0].total_quotation;
                    var leslie_cancelled = msg[0].total_cancelled;

                    $('#leslie_booking_count').text(leslie_booking_count);
                    $('#leslie_inbound_count').text(leslie_inbound_count);
                    $('#leslie_outbound_count').text(leslie_outbound_count);
                    $('#leslie_revenue').text('AED ' + leslie_revenue.toFixed(2));
                    $('#leslie_quotation_revenue').text('AED ' + leslie_quotation_revenue.toFixed(2));
                    $('#leslie_quotation').text(leslie_quotation);
                    $('#leslie_cancelled').text(leslie_cancelled);


                    var eric_booking_count = msg[1].total_count;
                    var eric_inbound_count = msg[1].total_inbound_calls;
                    var eric_outbound_count = msg[1].total_outbound_calls;
                    var eric_revenue = msg[1].total_revenue;
                    var eric_quotation_revenue = msg[1].total_quotation_revenue;
                    var eric_quotation = msg[1].total_quotation;
                    var eric_cancelled = msg[1].total_cancelled;

                    $('#eric_booking_count').text(eric_booking_count);
                    $('#eric_inbound_count').text(eric_inbound_count);
                    $('#eric_outbound_count').text(eric_outbound_count);
                    $('#eric_revenue').text('AED ' + eric_revenue.toFixed(2));
                    $('#eric_quotation_revenue').text('AED ' + eric_quotation_revenue.toFixed(2));                    
                    $('#eric_quotation').text(eric_quotation);
                    $('#eric_cancelled').text(eric_cancelled);                    


                    var joy_booking_count = msg[2].total_count;
                    var joy_inbound_count = msg[2].total_inbound_calls;
                    var joy_outbound_count = msg[2].total_outbound_calls;
                    var joy_revenue = msg[2].total_revenue;
                    var joy_quotation_revenue = msg[2].total_quotation_revenue;
                    var joy_quotation = msg[2].total_quotation;
                    var joy_cancelled = msg[2].total_cancelled;

                    $('#joy_booking_count').text(joy_booking_count);
                    $('#joy_inbound_count').text(joy_inbound_count);
                    $('#joy_outbound_count').text(joy_outbound_count);
                    $('#joy_revenue').text('AED ' + joy_revenue.toFixed(2));
                    $('#joy_quotation_revenue').text('AED ' + joy_quotation_revenue.toFixed(2));                    
                    $('#joy_quotation').text(joy_quotation);
                    $('#joy_cancelled').text(joy_cancelled);



                    var mabel_booking_count = msg[3].total_count;
                    var mabel_inbound_count = msg[3].total_inbound_calls;
                    var mabel_outbound_count = msg[3].total_outbound_calls;
                    var mabel_revenue = msg[3].total_revenue;
                    var mabel_quotation_revenue = msg[3].total_quotation_revenue;                    
                    var mabel_quotation = msg[3].total_quotation;
                    var mabel_cancelled = msg[3].total_cancelled;


                    $('#mabel_booking_count').text(mabel_booking_count);
                    $('#mabel_inbound_count').text(mabel_inbound_count);
                    $('#mabel_outbound_count').text(mabel_outbound_count);
                    $('#mabel_revenue').text('AED ' + mabel_revenue.toFixed(2));
                    $('#mabel_quotation_revenue').text('AED ' + mabel_quotation_revenue.toFixed(2));                    
                    $('#mabel_quotation').text(mabel_quotation);
                    $('#mabel_cancelled').text(mabel_cancelled);
                    

                    var jean_booking_count = msg[4].total_count;
                    var jean_inbound_count = msg[4].total_inbound_calls;
                    var jean_outbound_count = msg[4].total_outbound_calls;
                    var jean_revenue = msg[4].total_revenue;
                    var jean_quotation_revenue = msg[4].total_quotation_revenue;                    
                    var jean_quotation = msg[4].total_quotation;
                    var jean_cancelled = msg[4].total_cancelled;

                    $('#jean_booking_count').text(jean_booking_count);
                    $('#jean_inbound_count').text(jean_inbound_count);
                    $('#jean_outbound_count').text(jean_outbound_count);
                    $('#jean_revenue').text('AED ' + jean_revenue.toFixed(2));
                    $('#jean_quotation_revenue').text('AED ' + jean_quotation_revenue.toFixed(2));                    
                    $('#jean_quotation').text(jean_quotation);
                    $('#jean_cancelled').text(jean_cancelled);


                    var jam_booking_count = msg[5].total_count;
                    var jam_inbound_count = msg[5].total_inbound_calls;
                    var jam_outbound_count = msg[5].total_outbound_calls;
                    var jam_revenue = msg[5].total_revenue;
                    var jam_quotation_revenue = msg[5].total_quotation_revenue;                    
                    var jam_quotation = msg[5].total_quotation;
                    var jam_cancelled = msg[5].total_cancelled;


                    $('#jam_booking_count').text(jam_booking_count);
                    $('#jam_inbound_count').text(jam_inbound_count);
                    $('#jam_outbound_count').text(jam_outbound_count);
                    $('#jam_revenue').text('AED ' + jam_revenue.toFixed(2));
                    $('#jam_quotation_revenue').text('AED ' + jam_quotation_revenue.toFixed(2));                    
                    $('#jam_quotation').text(jam_quotation);
                    $('#jam_cancelled').text(jam_cancelled);


                    var edward_booking_count = msg[6].total_count;
                    var edward_inbound_count = msg[6].total_inbound_calls;
                    var edward_outbound_count = msg[6].total_outbound_calls;
                    var edward_revenue = msg[6].total_revenue;
                    var edward_quotation_revenue = msg[6].total_quotation_revenue;                    
                    var edward_quotation = msg[6].total_quotation;
                    var edward_cancelled = msg[6].total_cancelled;


                    $('#edward_booking_count').text(edward_booking_count);
                    $('#edward_inbound_count').text(edward_inbound_count);
                    $('#edward_outbound_count').text(edward_outbound_count);
                    $('#edward_revenue').text('AED ' + edward_revenue.toFixed(2));
                    $('#edward_quotation_revenue').text('AED ' + edward_quotation_revenue.toFixed(2));                    
                    $('#edward_quotation').text(edward_quotation);
                    $('#edward_cancelled').text(edward_cancelled);

                    var arianne_booking_count = msg[7].total_count;
                    var arianne_inbound_count = msg[7].total_inbound_calls;
                    var arianne_outbound_count = msg[7].total_outbound_calls;
                    var arianne_revenue = msg[7].total_revenue;
                    var arianne_quotation_revenue = msg[7].total_quotation_revenue;
                    var arianne_quotation = msg[7].total_quotation;
                    var arianne_cancelled = msg[7].total_cancelled;


                    $('#arianne_booking_count').text(arianne_booking_count);
                    $('#arianne_inbound_count').text(arianne_inbound_count);
                    $('#arianne_outbound_count').text(arianne_outbound_count);
                    $('#arianne_revenue').text('AED ' + arianne_revenue.toFixed(2));
                    $('#arianne_quotation_revenue').text('AED ' + arianne_quotation_revenue.toFixed(2));                    
                    $('#arianne_quotation').text(arianne_quotation);
                    $('#arianne_cancelled').text(arianne_cancelled);
                    
                    var pauline_booking_count = msg[8].total_count;
                    var pauline_inbound_count = msg[8].total_inbound_calls;
                    var pauline_outbound_count = msg[8].total_outbound_calls;
                    var pauline_revenue = msg[8].total_revenue;
                    var pauline_quotation_revenue = msg[8].total_quotation_revenue;
                    var pauline_quotation = msg[8].total_quotation;
                    var pauline_cancelled = msg[8].total_cancelled;


                    $('#pauline_booking_count').text(pauline_booking_count);
                    $('#pauline_inbound_count').text(pauline_inbound_count);
                    $('#pauline_outbound_count').text(pauline_outbound_count);
                    $('#pauline_revenue').text('AED ' + pauline_revenue.toFixed(2));
                    $('#pauline_quotation_revenue').text('AED ' + pauline_quotation_revenue.toFixed(2));                    
                    $('#pauline_quotation').text(pauline_quotation);
                    $('#pauline_cancelled').text(pauline_cancelled);
                    
                    var jen_booking_count = msg[9].total_count;
                    var jen_inbound_count = msg[9].total_inbound_calls;
                    var jen_outbound_count = msg[9].total_outbound_calls;
                    var jen_revenue = msg[9].total_revenue;
                    var jen_quotation_revenue = msg[9].total_quotation_revenue;
                    var jen_quotation = msg[9].total_quotation;
                    var jen_cancelled = msg[9].total_cancelled;


                    $('#jen_booking_count').text(jen_booking_count);
                    $('#jen_inbound_count').text(jen_inbound_count);
                    $('#jen_outbound_count').text(jen_outbound_count);
                    $('#jen_revenue').text('AED ' + jen_revenue.toFixed(2));
                    $('#jen_quotation_revenue').text('AED ' + jen_quotation_revenue.toFixed(2));                    
                    $('#jen_quotation').text(jen_quotation);
                    $('#jen_cancelled').text(jen_cancelled);
                    

                    var total_booking_count = mabel_booking_count + joy_booking_count + leslie_booking_count + eric_booking_count + jean_booking_count + edward_booking_count + arianne_booking_count + pauline_booking_count + jam_booking_count + jen_booking_count;
                    var total_quotation = mabel_quotation + joy_quotation + leslie_quotation + eric_quotation + jean_quotation + edward_quotation + arianne_quotation + pauline_quotation + jam_quotation + jen_quotation;
                    var total_cancelled = mabel_cancelled + joy_cancelled + leslie_cancelled + eric_cancelled + jean_cancelled + edward_cancelled + arianne_cancelled + pauline_cancelled + jam_cancelled + jen_cancelled ;
                    var total_inbound = mabel_inbound_count + joy_inbound_count + leslie_inbound_count + eric_inbound_count + jean_inbound_count + edward_inbound_count + arianne_inbound_count + pauline_inbound_count + jam_inbound_count + jen_inbound_count;
                    var total_outbound = mabel_outbound_count + joy_outbound_count + leslie_outbound_count + eric_outbound_count + jean_outbound_count + edward_outbound_count + arianne_outbound_count + pauline_outbound_count + jam_outbound_count + jen_outbound_count; 
                    
                    // var tbc = total_booking_count.html();
                    // alert(jam_booking_count);

                    $('#total_booking_count').text(total_booking_count);
                    $('#total_quotation').text(total_quotation);
                    $('#total_cancelled').text(total_cancelled);
                    $('#total_inbound').text(total_inbound);
                    $('#total_outbound').text(total_outbound);

                }
            });

                

                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_monthly_data.php",
                    data: 'filter=' + other_filter,
                    dataType: 'JSON',
                    async: true,
                    success: function(msg){

                        var total_complaints = msg[0].total_complaints;
                        // var total_autodialer = msg[0].total_auto_calls;
                        // var total_whatsapp = msg[0].total_whatsapp;

                        // if(total_whatsapp!=null){

                        //     $('#total_whatsapp_count').text(total_whatsapp);

                        // }

                        // if(total_autodialer!=null){

                        //     $('#total_autodialer_calls').text(total_autodialer);

                        // }

                        if(total_complaints!=null){

                            $('#total_complaints').text(total_complaints);
                        }


                    }
                });

                $("#daily_booking_chart").empty();

                $.ajax({
                    type:"post",
                    url: 'ajax/daily_booking_chart.php',
                    data: 'filter=' + other_filter,
                    success: function(msg) {
                    var day_data = JSON.parse(msg); 
                    // console.log(msg); 

                    Morris.Line({
                        element: 'daily_booking_chart',
                        data: day_data,
                        xkey: 'elapsed',
                        ykeys: ['value'],
                        labels: ['Bookings'],
                        gridEnabled: true,
                        gridLineColor: 'rgba(0,0,0,.1)',
                        gridTextColor: '#8f9ea6',
                        gridTextSize: '11px',
                        lineColors: ['#177bbb'],
                        lineWidth: 2,
                        parseTime: false,
                        resize:true,
                        hideHover: 'auto'
                        });

                    }
                });

            }

            function GetMaintenanceData(){

                var other_filter = $('#other_filter').val();

                $("#daily_inspection_chart").empty();

                $.ajax({
                    type:"post",
                    url: 'ajax/daily_inspection_chart.php',
                    data: 'filter=' + other_filter,
                    success: function(msg) {
                    var data = JSON.parse(msg);  
                            
                        Morris.Bar({
                          element: 'daily_inspection_chart',
                          data: data,
                          xkey: 'y',
                          ykeys: ['won'],
                          labels: ['Quotation Won'],
                          resize:true,
                          xLabelMargin:10,
                          hideHover: 'auto'
                        });
                     }

                }); 


                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_maintenance_data.php",
                    data: 'filter=' + other_filter,
                    dataType: 'JSON',
                    async: true,
                    success: function(msg){
                        
                        $("#loaderimg").remove();
                        $('html').removeClass('no-scroll');

                        var total_inspection        = msg[0].total_inspection;
                        var total_quotation         = msg[0].total_quotation;
                        var total_quotation_won     = msg[0].total_quotation_won;
                        var total_quotation_open    = msg[0].total_quotation_open;
                        var total_revenue           = msg[0].total_revenue;
                        var total_quotation_lost    = msg[0].total_quotation_lost;
                        var total_jobs_completed    = msg[0].total_jobs_completed;
                        var total_jobs_open         = msg[0].total_jobs_open;


                        if(total_inspection != null){

                            $('.tot_inspection').text(total_inspection);

                        }

                        if(total_quotation != null){

                            $('.tot_quotation').text(total_quotation);

                        }

                        if(total_quotation_won != null){

                            $('.tot_quotation_won').text(total_quotation_won);
                        }

                        if(total_revenue != null){

                            $('.tot_revenue').text(total_revenue);
                        }

                        if(total_quotation_lost != null){

                            $('.tot_quotation_lost').text(total_quotation_lost);
                        }

                        if(total_jobs_completed != null){

                            $('.tot_jobs_completed').text(total_jobs_completed);
                        }

                        if(total_jobs_open != null){

                            $('.tot_jobs_open').text(total_jobs_open);
                        }


                        if(total_quotation_open != null){

                            $('.tot_quotation_open').text(total_quotation_open);
                        }

                    }
                });
            }
            

            setInterval(GetData, 120000);
            setInterval(GetMaintenanceData, 120000);

        });
    </script>