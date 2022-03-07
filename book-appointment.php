<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Book Now" />
    <meta name="description" content="Book Now - Higitec" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Book Now | Higitech Middle East</title>

    <?php include "common_header.php" ?>

    <style type="text/css">
        td a.ui-state-default {
    color: #333 !important;
}

td.ui-datepicker-unselectable span.ui-state-default {
    color: #ccc !important;
}

.ui-widget.ui-widget-content {
    border: 7px solid #f3f3f3;
    width: 100% !important;
    padding: 0;
    background: #f3f3f3;
}
.ui-datepicker table {
    border-collapse: inherit
}
.ui-datepicker .ui-datepicker-title {
    background: #fff;
    margin: 0 0 -2px;
    font-size: 14px;
    padding: 8px 0;
    border-left: 2px solid #f3f3f3;
    border-right: 2px solid #f3f3f3;
}
.ui-datepicker td {
    border: 0;
    padding: 1px;
    background: #fff;
    border: 1px solid #f3f3f3;
}
.ui-datepicker th {
    background: #fff;
    padding: .7em .3em;
    border: 1px solid #f3f3f3;
}
.ui-widget {
    font-family: 'Gotham';
    font-size: 1em;
}
.ui-widget-header {
    border: none;
    background: transparent;
    color: #585858;
    font-weight: bold;
}
.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
    opacity: 1;
}
.ui-datepicker-multi .ui-datepicker-group table {
    width: 100%;
    margin: 0;
}
.ui-datepicker td span, 
.ui-datepicker td a {
    text-align: center;
    padding: .7em .3em;
}
.ui-state-default, 
.ui-widget-content .ui-state-default, 
.ui-widget-header .ui-state-default, .ui-button, 
html .ui-button.ui-state-disabled:hover, 
html .ui-button.ui-state-disabled:active {
    /* border: 1px solid #fff; */
    border: none;
    background: #fff;
    color: #ccc;
}
.ui-state-highlight, 
.ui-widget-content .ui-state-highlight, 
.ui-widget-header .ui-state-highlight {
    background: #fda12b;
    color: #ccc;
    border-color: #fda12b;
}
.ui-state-active, .ui-widget-content .ui-state-active, 
.ui-widget-header .ui-state-active, 
a.ui-button:active, 
.ui-button:active, 
.ui-button.ui-state-active:hover {
    border-color: #fda12b;
    background: #fff;
    font-weight: normal;
    color: #ccc;
}
.ui-datepicker-year {
    display: none;
}

.ui-icon-circle-triangle-w {
    background-position: -95px -30px;
}

.ui-icon-circle-triangle-e {
    background-position: -35px -30px;
}

.ui-widget-header .ui-icon{
    background-image: url(images/ui-icons.png);
}

td > span{
    padding-left: 10px;
}

.ui-select .ui-btn select{
    z-index:1 !important
}

.input-text.error{
    border: 1px solid red;
}

.country_select.error{
    border: 1px solid red;
}

.time.error{
    border: 1px solid red;
}

label.error{
    display: none !important;
}

.form-row .required_label {
    color: red;
    font-weight: 700;
    border: 0 !important;
    text-decoration: none;
}

.payment_button:hover{

    border:1px solid #fda12b !important;
    cursor: pointer;

}

.checked{
    background-color: #fda12b !important;
    color: #ffffff !important;
    
}

.payment_summary{
    font-size: 16px;
    font-weight: 400;
}

.payment_button {
    background: #ffffff;
    font-weight: bold !important;
    color: #000000 !important;
    padding: 20px 0;
    border: 1px solid #cccccc !important;
    height: 80px !important;
    text-align: center;
    font-size: 16px !important;
    font-weight: 400 !important;
}

button.submit:before{
    content: '';
}


    </style>

</head>

<body>

    <!--page start-->
    <div class="page">

        <?php include "common_menubar_2.php" ?>

        <!--site-main start-->
        <div class="site-main">

            <section class="ttm-row checkout-section ttm-bgcolor-grey break-991-colum clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <!-- section title -->
                            <div class="section-title with-desc title-style-center_text mb-55 clearfix">
                                <div class="title-header">
                                    <h2 class="title">Book a Service</h2>
                                </div>
                                <div class="title-desc">We are a team of professional and skilled experts in all domestic spheres. We offer a wide range of services both corporate and residential.</div>
                            </div><!-- section title end -->
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-12">
                            <div id="wizard_container">
                                <!-- <div id="top-wizard">
                                    <div id="progressbar"></div>
                                </div> -->
                                <!-- /top-wizard -->
                                <form id="book-appointment" method="POST" action="form/book-appointment.php" class="checkout row">
                                    <input id="website" name="website" type="text" value="">
                                    <!-- Leave for security protection, read docs for details -->

                                    <div id="middle-wizard">
                                        <div class="step">
                                            <div class="main_question text-center">
                                                <h3 class="main_question text-center">Please fill with your details</h3>
                                            <div class="col-md-6 col-sm-12" style="float:left">
                                                <p class="form-row">
                                                    <label>Full Name&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <input type="text" class="input-text " id="name" name="name" placeholder="" value="" required="required">
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12" style="float:left">
                                                <p class="form-row">
                                                    <label>Mobile Number&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <input type="tel" class="input-text " name="mobile" id="mobile" placeholder="" value="" required="required">
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12" style="float:left">
                                                <p class="form-row">
                                                    <label>Email Address&nbsp;</label>
                                                    <input type="email" class="input-text " name="email" id="email" placeholder="" value="" required="required">
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12" style="float:left">
                                                <p class="form-row">
                                                    <label>Region/Area&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <select class="wide country_select" name="region" id="region" required="required">
                                                        <option value="">Select Region</option>
                                                        <option value="Akoya">Akoya</option>
                                                        <option value="Akoya Oxygen">Akoya Oxygen</option>
                                                        <option value="Al Barsha 1,2,3">Al Barsha 1,2,3</option>
                                                        <option value="Al Barsha South 1,2,3">Al Barsha South 1,2,3</option>
                                                        <option value="Al Furjan">Al Furjan</option>
                                                        <option value="Al Jaddaff">Al Jaddaff</option>
                                                        <option value="Al khawaneej">Al khawaneej</option>
                                                        <option value="Al Khail Gate / Heights">Al Khail Gate / Heights</option>
                                                        <option value="Al Manara">Al Manara</option>
                                                        <option value="Al Safa 1,2,3">Al Safa 1,2,3</option>
                                                        <option value="Al Sufouh">Al Sufouh</option>
                                                        <option value="Al Wasl">Al Wasl</option>
                                                        <option value="Arabian Ranches">Arabian Ranches</option>
                                                        <option value="Arjan">Arjan</option>
                                                        <option value="Business Bay">Business Bay</option>
                                                        <option value="Damac Hills">Damac Hills</option>
                                                        <option value="Damac Suburbia">Damac Suburbia</option>
                                                        <option value="Discovery Gardens">Discovery Gardens</option>
                                                        <option value="Dubai Hills">Dubai Hills</option>
                                                        <option value="Dubai Marina">Dubai Marina</option>
                                                        <option value="Dubailand/ Silicon Oasis">Dubailand/ Silicon Oasis</option>
                                                        <option value="DIP">DIP</option>
                                                        <option value="DIFC">DIFC</option>
                                                        <option value="Downtown">Downtown</option>
                                                        <option value="Emirates Hills">Emirates Hills</option>
                                                        <option value="IBN Batutta">IBN Batutta</option>
                                                        <option value="IMPZ">IMPZ</option>
                                                        <option value="Jebel Ali">Jebel Ali</option>
                                                        <option value="JLT">JLT</option>
                                                        <option value="Jumeirah 1,2,3">Jumeirah 1,2,3</option>
                                                        <option value="Jumeirah Golf Estate">Jumeirah Golf Estate</option>
                                                        <option value="Jumeirah Heights">Jumeirah Heights</option>
                                                        <option value="Jumeirah Island">Jumeirah Island</option>
                                                        <option value="Jumeirah Park">Jumeirah Park</option>
                                                        <option value="Jumeirah Village Circle">Jumeirah Village Circle</option>
                                                        <option value="Jumeirah Village Triangle">Jumeirah Village Triangle</option>
                                                        <option value="Knowledge Village">Knowledge Village</option>
                                                        <option value="Meadows">Meadows</option>
                                                        <option value="Meida City">Meida City</option>
                                                        <option value="Mira">Mira</option>
                                                        <option value="Motor City">Motor City</option>
                                                        <option value="Mudon">Mudon</option>
                                                        <option value="Palm Jumeirah">Palm Jumeirah</option>
                                                        <option value="Reemram">Reemram</option>
                                                        <option value="Sports City / Victory Heights">Sports City / Victory Heights</option>
                                                        <option value="Springs">Springs</option>
                                                        <option value="Silicon Oasis">Silicon Oasis</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Studio City">Studio City</option>
                                                        <option value="Sustainable City">Sustainable City</option>
                                                        <option value="Tecom, Barsha Heights">Tecom, Barsha Heights</option>
                                                        <option value="Tenora">Tenora</option>
                                                        <option value="The Gardens">The Gardens</option>
                                                        <option value="The Lakes">The Lakes</option>
                                                        <option value="Umm Al Sheif">Umm Al Sheif</option>
                                                        <option value="Umm Suqeim 1,2,3">Umm Suqeim 1,2,3</option>
                                                    </select>                                        
                                                </p>
                                            </div>
                                            
                                            <p class="form-row" style="width:100%; padding-right: 15px; padding-left: 15px;">
                                                <label>Address&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                <textarea class="input-text" placeholder="" name="address" id="address" required="required"></textarea>
                                            </p>
                                            

                                            </div>

                                        </div>
                                        <!-- /step-->

                                        <div class="step">
                                            <h3 class="main_question text-center">Select Service Options</h3>
                                            <div class="col-md-6 col-sm-12" style="float:left">
                                                <p class="form-row">
                                                    <label>Select Service&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <select class="wide country_select get_room_price" name="service_type" id="service_type" required="required">
                                                        <option value="Normal Cleaning">Normal Cleaning</option>
                                                        <option value="Deep Cleaning">Deep Cleaning</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12" style="float:left">
                                                <p class="form-row">
                                                    <label>Building Type&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <select class="wide country_select get_room_price" name="building_type" id="building_type" required="required">
                                                        <option value="Apartment">Apartment</option>
                                                        <option value="Villa">Villa</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 normal" style="float:left">
                                                <p class="form-row">
                                                    <label>Number of Hours&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <select class="wide country_select" name="num_hours" id="num_hours" required="required">
                                                        <option value="2" selected>2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 normal" style="float:left">
                                                <p class="form-row">
                                                    <label>Number of Cleaners&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <select class="wide country_select" name="num_cleaners" id="num_cleaners" required="required">
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-12 col-sm-12 deep" style="float:left">
                                                <p class="form-row">
                                                    <label>Number of Bedrooms&nbsp;<abbr class="required_label" title="required">*</abbr></label>
                                                    <select class="wide country_select" name="num_bedroom" id="num_bedroom" required="required">
                                                    <option selected>-</option>                                                       
                                                    </select>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 normal" style="float:left">
                                                <p class="form-row">
                                                    <label>Do you require cleaning material?&nbsp;</label>
                                                    <select class="wide country_select" name="cleaning_material" id="is_material">
                                                        <option value="off" selected>No</option>      
                                                        <option value="on">Yes</option>                       
                                                    </select>
                                                
                                                </p>

                                                <!-- <p class="form-row form-group options clearfix" style="padding-top:10px">
                                                    <div class="col-md-4 col-sm-6 normal">
                                                        <span>Cleaning Materials</span> -->
                                                        <!-- <label class="switch-light switch-ios float-right">
                                                            <input type="checkbox" name="cleaning_material" id="is_material" value="off">
                                                            <span><span>No</span><span>Yes</span></span>
                                                            <a></a>
                                                        </label> -->
                                                    <!-- </div>
                                                    <div class="col-md-8 col-sm-6 normal"></div>        
                                                </p> -->
                                            </div>
                                            <!-- <div class="col-md-6 col-sm-12 normal" style="float:left"></div> -->

                                            <p class="form-row" style="width:100%; padding-right: 15px; padding-left: 15px;">
                                                <label>Special Request&nbsp;</label>
                                                <textarea class="notes" placeholder="Special Request" name="special_req" id="special_req"></textarea>
                                            </p>
                                            

                                        </div>
                                        <!-- /step-->

                                        <div class="step">
                                            <h3 class="main_question text-center" style="text-align:center;">Schedule Your Service</h3>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8 col-sm-12" style="float:none; margin: 0 auto;">
                                                <div class="form-group">
                                                    <div id="datepicker"></div>
                                                        <input type="text" style='visibility:hidden' name="service_date" id="service_date" data-validate="true" value="" required="required"/>
                                                    </div>
                                                <div class="form-group">
                                                    <div class="styled-select clearfix">
                                                        <select class="wide time" name="service_time" id="service_time" required="required">
                                                            <option value="">Preferred time</option>
                                                            <option value="09:00">09:00 AM</option>
                                                            <option value="10:00">10:00 AM</option>
                                                            <option value="11:00">11:00 AM</option>
                                                            <option value="14:00">02:00 PM</option>
                                                            <option value="15:00">03:00 PM</option>
                                                            <option value="17:00">05:00 PM</option>
                                                        </select>
                                                    </div>
                                                </div>  
                                            </div> 
                                            <div class="col-md-2"></div>   

                                        </div>
                                        <!-- /step-->

                                        <div class="submit step">
                                            <h3 class="main_question text-center">Pay and Finish</h3>
                                            <div class="col-md-12" style="width:100%; float:left">
                                            <div class="col-md-6 col-sm-12" style="float:left">

                                                <h5 class="payment_summary">Service Type : <span class="total" id="serviceType" style="color: #000000">Cleaning</span></h5>
                                                <h5 class="payment_summary">Num of Hours : <span class="total" id="display_num_hours" style="color: #000000">0</span></h5>
                                                <h5 class="payment_summary">Num of Cleaners : <span class="total" id="display_num_cleaners" style="color: #000000">0</span></h5>
                                                <h5 class="payment_summary">Sub Total : <span style="color: #000000">AED</span> <span class="total" id="display_sub_total" style="color: #000000">0</span></h5>
                                                <h5 class="payment_summary">Material Charges : <span style="color: #000000">AED</span> <span class="total" id="display_material_charges" style="color: #000000">0</span></h5>
                                                <h5 class="payment_summary">VAT : <span style="color: #000000">AED</span> <span class="total" id="display_vat" style="color: #000000">0</span></h5>
                                                <h5 class="payment_summary">COD Charges : <span style="color: #000000">AED</span> <span class="total" id="display_cod_charges" style="color: #000000">0</span></h5>
                                                <hr>
                                                <h3 class="main_question"><strong><span style="color: #000000">Total Amount : </span><span style="color: #000000">AED</span> <span class="total" id="display_total" style="color: #000000">0</span></strong></h3>
                                                
                                            </div>
                                            <div class="col-md-6 col-sm-12" style="float:left; width:100%">
                                                <div class="row no-gutters pb-1">
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <input type="button" name="cash" class="form-control payment_button payment_summary" placeholder="Schedule your date" id="cash" value="Cash (+5 AED)" data-type="cash">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="button" name="cc" class="form-control payment_button payment_summary" placeholder="Schedule your date" id="cc" value="Pay Online" data-type="cc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            
                                            

                                            <!-- HIDDEN FIELDS -->

                                            <!-- <input type="hidden" name="cleaning_material" id="cleaning_material"> -->
                                            <input type="hidden" name="material_charge" id="material_charge">
                                            <input type="hidden" name="sub_total" id="sub_total">
                                            <input type="hidden" name="vat" id="vat">
                                            <input type="hidden" name="cod" id="cod">
                                            <input type="hidden" name="total" id="total">
                                            <input type="hidden" name="payment_method" id="payment_method" value="" />
                                            <!-- /HIDDEN FIELDS -->

                                    </div>
                                        <!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Prev</button>
                                            <button type="button" name="forward" class="forward">Next</button>
                                            <button type="submit" name="process" class="submit">Finish</button>
                                        </div>
                                        <!-- /bottom-wizard -->
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

                <!-- contact-form-section -->

                <!-- contact-form-section end -->
                <section class="ttm-row pb-160 res-991-pb-100 clearfix contact-row">
                    <div class="clearfix"></div>
                </section>


            </div><!--site-main end-->

            <?php include "common_footer.php" ?>

            <script type="text/javascript">
                var maxPicks = 1;
                var minDate = 1;

                $( '#datepicker' ).multiDatesPicker( {
                        maxPicks: maxPicks,
                        minDate: minDate,
                        maxDate:14,
                        numberOfMonths: 1,
                        dateFormat: 'yy-mm-dd',
                        
                        onSelect: function( date ) {
                            var dates = $( '#datepicker' ).multiDatesPicker( 'getDates' );
                            $('#service_date').val(date);

                        }
                    } );

                   

                $('.deep').hide();
                $('.get_room_price').on('change', function(){

                    var service_type = $('#service_type').val();
                    var building_type = $('#building_type').val();

                    if(service_type == 'Normal Cleaning'){
                        $('.deep').hide();
                        $('.normal').show();
                    }

                    if(service_type == 'Deep Cleaning'){
                        $('.normal').hide();
                        
                        $.ajax({
                        type:"post",
                        url: 'ajax/get_deep_cleaning_price.php',
                        data:'cleaningType='+ service_type+'&buildingType='+ building_type,
                      
                        success: function(msg) {

                            $('#num_bedroom').html(msg); 

                            }

                        });

                        $('.deep').show();
                    
                    }

                });
            </script>

