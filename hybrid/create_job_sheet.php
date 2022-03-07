<?php include "header.php";
include "config/connection.php";

$rowID = $_REQUEST['rid'];
$insID = $_REQUEST['jid'];

if ($_REQUEST['rid']) {

    $sql1 = mysqli_query($conn,"SELECT id, quotation_id,job_sheet_id, booking_date, cust_name, cust_mobile, cust_email, cust_address, service, start_date, start_time, end_time,technician, job_sheet_generated ,job_to_do,tools_required,spare_parts,job_amount FROM table_jobs WHERE id = '$rowID'");

    

    $row1 = mysqli_fetch_assoc($sql1);

    $quotation_id       = $row1['quotation_id'];
    $job_sheet_id       = $row1['job_sheet_id'];
    $customer_name      = $row1['cust_name'];
    $customer_email     = $row1['cust_email'];
    $customer_mobile    = $row1['cust_mobile']; 
    $customer_address   = $row1['cust_address'];
    $service            = $row1['service'];
    $technician         = $row1['technician'];
    $job_to_do          = $row1['job_to_do'];
    $job_amount         = $row1['job_amount'];
    $booking_date       = $row1['booking_date'];
    $start_date         = $row1['start_date'];
    $start_time         = $row1['start_time'];
    $end_time           = $row1['end_time'];
    $tools_required     = $row1['tools_required'];
    $spare_parts        = $row1['spare_parts'];

}

if ($_REQUEST['jid']) {

  $sql1 = mysqli_query($conn,"SELECT id FROM table_jobs ORDER BY id DESC LIMIT 1");

  $last_insert_id = mysqli_fetch_row($sql1);

  $job_sheet_id = 'HIGI-JS-100'.$last_insert_id[0];

  $sql = mysqli_query($conn,"SELECT * FROM table_inspection WHERE id='$insID'");

  $row = mysqli_fetch_assoc($sql);

  $inspection_id    = $row['inspection_id'];
  $customer_name    = $row['cust_name'];
  $customer_mobile  = $row['cust_mobile'];
  $customer_email   = $row['cust_email'];
  $customer_address = $row['cust_address'];
  $service          = $row['service'];
  $job_to_do        = $row['notes'];

}

?>

<?php include "menubar.php" ?>
<link href="plugins/summernote/summernote.min.css" rel="stylesheet">
<style type="text/css">
    .bootstrap-select{
        width: 100% !important;
    }
    tr td{
        padding: 5px;
    }

    body .select2-container--default .select2-selection--multiple .select2-selection__choice{
        height: 32px !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
        padding-top: 5px !important;
    }

    .select2-container .select2-selection--multiple{
        height: 46px !important;
    }

    .select2-container .select2-search--inline .select2-search__field{
        height: 46px !important;
        margin-top: 0px !important;
    }

    .new_row{
        margin-top:15px;
    }

    .note-editor{
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 3px;
        padding: 5px;
    }

    .invoice-text{
        padding-top: 15px;
    }

    #container .invoice-masthead{
        margin-bottom: 0px;
    }

    .invoice_body_container{
        border:2px solid;
    }

    .one{
        width: 25%;
    }

    .two{
        width: 25%
    }

    .three{
        width: 25%
    }

    .four{
        width: 35%
    }

    #container .table-bordered, #container .table-bordered td, #container .table-bordered th{
        border:1px solid;
    }

</style>
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <div class="panel">
                <div class="panel-body">
                    <div class="row" id="dashboard_data">
                        <!-- QUOTATION PREVIEW  -->
                        <div class="col-sm-6 col-md-offset-3">
                            <div class="mar-all">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="invoice-masthead">
                                            <div class="invoice-text">
                                                <h3 class="h4 text-uppercase mar-no text-primary">JOB SHEET</h3>
                                            </div>
                                            <div class="invoice-brand" style="white-space:nowrap; text-align: left">
                                                <div class="invoice-logo">
                                                    <img src="img/higi-logo-header.png" width="150px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="invoice_body_container">
                                            <div class="invoice-bill row">
                                                <div class="col-sm-12 text-xs-center" style="padding-right: 0px">
                                                    <table class="table table-bordered invoice-summary" style="width: 98.9%">
                                                        <thead>
                                                            <tr class="top_bar">
                                                                <th class="text-uppercase one text-center">Booking Date</th>
                                                                <th class="text-uppercase two text-center">Technician</th>
                                                                <th class="text-uppercase three text-center">Start</th>
                                                                <th class="text-uppercase four text-center">Expected Finish</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="top_bar">
                                                                <td class="text-center">
                                                                    <input type="text" class="form-control input-lg" id="booking_date" value="<?php echo $booking_date?>">    
                                                                </td>
                                                                <td class="text-center">
                                                                    <input type="text" placeholder="Technician" class="form-control input-lg" id="technician" value="<?php echo $technician ?>">
                                                                </td>
                                                                <td>
                                                                    <strong>Date:</strong> <input type="text" class="form-control input-lg" id="start_date" value="<?php echo $start_date?>">                  
                                                                </td>
                                                                <td>
                                                                    <strong>Date:</strong>
                                                                    <input type="text" class="form-control input-lg" id="end_date" value="<?php echo $start_date?>">
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><strong>Customer Name:</strong><input type="text" placeholder="Name" class="form-control input-lg" id="name" value="<?php echo $customer_name; ?>"></td>
                                                                <td>
                                                                    <strong>Time:</strong>

                                                                    <select class="select form-control input-lg" id="start_time">      
                                                                        <option value="no-push" selected disabled>Select Slot</option>
                                                                        <option value="8:00" <?php echo $start_time == '8:00' ? 'selected' : ''; ?>>8 AM</option>
                                                                        <option value="9:00" <?php echo $start_time == '9:00' ? 'selected' : ''; ?>>9 AM</option>
                                                                        <option value="10:00" <?php echo $start_time == '10:00' ? 'selected' : ''; ?>>10 AM</option>
                                                                        <option value="11:00" <?php echo $start_time == '11:00' ? 'selected' : ''; ?>>11 AM</option>
                                                                        <option value="12:00" <?php echo $start_time == '12:00' ? 'selected' : ''; ?>>12 AM</option>
                                                                        <option value="13:00" <?php echo $start_time == '13:00' ? 'selected' : ''; ?>>1 PM</option>
                                                                        <option value="14:00" <?php echo $start_time == '14:00' ? 'selected' : ''; ?>>2 PM</option>
                                                                        <option value="15:00" <?php echo $start_time == '15:00' ? 'selected' : ''; ?>>3 PM</option>
                                                                        <option value="16:00" <?php echo $start_time == '16:00' ? 'selected' : ''; ?>>4 PM</option>
                                                                        <option value="17:00" <?php echo $start_time == '17:00' ? 'selected' : ''; ?>>5 PM</option>
                                                                        <option value="18:00" <?php echo $start_time == '18:00' ? 'selected' : ''; ?>>6 PM</option>
                                                                        <option value="19:00" <?php echo $start_time == '19:00' ? 'selected' : ''; ?>>7 PM</option>
                                                                        <option value="20:00" <?php echo $start_time == '20:00' ? 'selected' : ''; ?>>8 PM</option>
                                                                    </select>

                                                                </td>
                                                                <td>
                                                                    <strong>Time:</strong>
                                                                    <select class="select form-control input-lg" id="end_time">      
                                                                        <option value="no-push" selected disabled>Select Slot</option>
                                                                        <option value="8:00" <?php echo $end_time == '8:00' ? 'selected' : ''; ?>>8 AM</option>
                                                                        <option value="9:00" <?php echo $end_time == '9:00' ? 'selected' : ''; ?>>9 AM</option>
                                                                        <option value="10:00" <?php echo $end_time == '10:00' ? 'selected' : ''; ?>>10 AM</option>
                                                                        <option value="11:00" <?php echo $end_time == '11:00' ? 'selected' : ''; ?>>11 AM</option>
                                                                        <option value="12:00" <?php echo $end_time == '12:00' ? 'selected' : ''; ?>>12 AM</option>
                                                                        <option value="13:00" <?php echo $end_time == '13:00' ? 'selected' : ''; ?>>1 PM</option>
                                                                        <option value="14:00" <?php echo $end_time == '14:00' ? 'selected' : ''; ?>>2 PM</option>
                                                                        <option value="15:00" <?php echo $end_time == '15:00' ? 'selected' : ''; ?>>3 PM</option>
                                                                        <option value="16:00" <?php echo $end_time == '16:00' ? 'selected' : ''; ?>>4 PM</option>
                                                                        <option value="17:00" <?php echo $end_time == '17:00' ? 'selected' : ''; ?>>5 PM</option>
                                                                        <option value="18:00" <?php echo $end_time == '18:00' ? 'selected' : ''; ?>>6 PM</option>
                                                                        <option value="19:00" <?php echo $end_time == '19:00' ? 'selected' : ''; ?>>7 PM</option>
                                                                        <option value="20:00" <?php echo $end_time == '20:00' ? 'selected' : ''; ?>>8 PM</option>
                                                                    </select>
                                                                </td>
                                                            </tr>  
                                                            <tr>
                                                                <td colspan="2"><strong>Mobile/Phone:</strong><input type="text" placeholder="Mobile" class="form-control input-lg" id="mobile" value="<?php echo $customer_mobile; ?>"></td>
                                                                <td colspan="2"><strong>Email:</strong>
                                                                    <input type="text" placeholder="Email" class="form-control input-lg" id="email" value="<?php echo $customer_email; ?>"></td>
                                                                </tr> 
                                                                <tr>
                                                                    <td colspan="3"><strong>Location:</strong>
                                                                        <div id="summernote_address"><?php echo $customer_address ?></div>
                                                                    </td>
                                                                    <td><strong>Job Amount:</strong>
                                                                        <input type="text" name="job_amount" id='job_amount' placeholder="Job Amount" class="form-control input-lg" value="<?php echo $job_amount; ?>">
                                                                    </td>
                                                                </tr>   

                                                            </tbody>
                                                        </table>                
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="text-center" style="border-bottom: 1px solid">
                                                            <h6><strong>JOB TO DO</strong></h6>

                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div style="padding: 5px 0 5px 0">
                                                                <div id="job_list" style="margin-left:22px;"><?php echo $service ?><br><?php echo $job_to_do ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6" style="border: 1px solid">
                                                            <div>
                                                                <h6><strong>TOOLS REQUIRED:</strong></h6>

                                                                <div id="tools_required" style="margin-left:22px;"><?php echo $tools_required ?></div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6" style="border: 1px solid">
                                                            <div>
                                                                <h6><strong>SPARE PARTS:</strong></h6>

                                                                <div id="spare_parts" style="margin-left:22px;"><?php echo $spare_parts ?></div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6 text-center" style="border: 1px solid">
                                                            <div>
                                                                <p style="min-height:50px"></p>
                                                            </div>
                                                            <div>
                                                                <h6><strong>CLIENT SIGNATURE</strong></h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 text-center" style="border: 1px solid">
                                                            <div>
                                                                <p style="min-height:50px"></p>
                                                            </div>
                                                            <div>
                                                                <h6><strong>TECHNICIAN SIGNATURE</strong></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="">
                                                    <div class="col-lg-12">
                                                        <div class="col-lg-6" style="border:1px solid">
                                                            <div>
                                                                <h6><strong>&nbsp;DATE:</strong></h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6" style="border:1px solid">
                                                            <div>
                                                                <h6><strong>DATE:</strong></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row pad-top pad-btm">
                                                <div class="col-sm-12 toolbar-center text-center">
                                                    <input type="hidden" name="quotation_id" id="quotation_id" value="<?php echo $quotation_id ?>">
                                                    <input type="hidden" name="inspection_id" id="inspection_id" value="<?php echo $inspection_id ?>">
                                                    <input type="hidden" name="job_sheet_id" id="job_sheet_id" value="<?php echo $job_sheet_id ?>">
                                                    <input type="hidden" name="service" id="service" value="<?php echo $service ?>">
                                                    <button class="btn btn-primary" id="submit">Create Job Sheet</button>
                                                </div>
                                            </div>
                                        </div>
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

        <script src="plugins/summernote/summernote.min.js"></script>

        <script type="text/javascript">

        // DATE PICKER

        $("#booking_date").datepicker({
            minDate: '0',
            dateFormat: 'dd-mm-yy',       
            onSelect: function (dateText) {
            // set date
            jQuery('#booking_date').val(dateText);

            }
        });

        $("#start_date").datepicker({
            minDate: '0',
            dateFormat: 'dd-mm-yy',       
            onSelect: function (dateText) {
            // set date
            jQuery('#start_date').val(dateText);

            }
        });

        $("#end_date").datepicker({
            minDate: '0',
            dateFormat: 'dd-mm-yy',       
            onSelect: function (dateText) {
            // set date
            jQuery('#end_date').val(dateText);

            }
        });

</script>

<script type="text/javascript">

    $(document).ready(function (){

        $('#summernote_address').summernote({
            airMode: true,
            cleaner:{
                  action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                  newline: '<br>', // Summernote's default is to use '<p><br></p>'
                  notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                  icon: '<i class="note-icon">[Your Button]</i>',
                  keepHtml: false, // Remove all Html formats
                  keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                  keepClasses: false, // Remove Classes
                  badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                  badAttributes: ['style', 'start'], // Remove attributes from remaining tags
                  limitChars: false, // 0/false|# 0/false disables option
                  limitDisplay: 'both', // text|html|both
                  limitStop: false // true/false
                }
        });

        $('#job_list').summernote({
            airMode: true,
            cleaner:{
                  action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                  newline: '<br>', // Summernote's default is to use '<p><br></p>'
                  notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                  icon: '<i class="note-icon">[Your Button]</i>',
                  keepHtml: false, // Remove all Html formats
                  keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                  keepClasses: false, // Remove Classes
                  badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                  badAttributes: ['style', 'start'], // Remove attributes from remaining tags
                  limitChars: false, // 0/false|# 0/false disables option
                  limitDisplay: 'both', // text|html|both
                  limitStop: false // true/false
                }
        });

        $('#tools_required').summernote({
            airMode: true,
            cleaner:{
                  action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                  newline: '<br>', // Summernote's default is to use '<p><br></p>'
                  notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                  icon: '<i class="note-icon">[Your Button]</i>',
                  keepHtml: false, // Remove all Html formats
                  keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                  keepClasses: false, // Remove Classes
                  badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                  badAttributes: ['style', 'start'], // Remove attributes from remaining tags
                  limitChars: false, // 0/false|# 0/false disables option
                  limitDisplay: 'both', // text|html|both
                  limitStop: false // true/false
                }
        });

        $('#spare_parts').summernote({
            airMode: true,
            cleaner:{
                  action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                  newline: '<br>', // Summernote's default is to use '<p><br></p>'
                  notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                  icon: '<i class="note-icon">[Your Button]</i>',
                  keepHtml: false, // Remove all Html formats
                  keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                  keepClasses: false, // Remove Classes
                  badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                  badAttributes: ['style', 'start'], // Remove attributes from remaining tags
                  limitChars: false, // 0/false|# 0/false disables option
                  limitDisplay: 'both', // text|html|both
                  limitStop: false // true/false
                }
        });

    });

    $(document).on('focus','#name',function(){
        $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
    });

    $(document).on('focus','#mobile',function(){
        $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
    });

    $(document).on('focus','#email',function(){
        $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
    });

    $(document).on('focus','#technician',function(){
        $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
    });

    // FORM SUBMIT

    $('#submit').on('click', function(){

    var job_sheet_id    = $('#job_sheet_id').val();
    var quotation_id    = $('#quotation_id').val();
    var inspection_id   = $('#inspection_id').val();
    var client_name     = $('#name').val();
    var client_mobile   = $('#mobile').val();
    var client_email    = $('#email').val();
    var service         = $('#service').val();
    var client_address  = escape($('#summernote_address').summernote('code'));
    var job_to_do       = escape($('#job_list').summernote('code'));
    var booking_date    = $('#booking_date').val();
    var technician      = $('#technician').val();
    var start_date      = $('#start_date').val();
    var job_amount      = $('#job_amount').val();
    var end_date        = $('#end_date').val();
    var start_time      = $('#start_time').val();
    var end_time        = $('#end_time').val();
    var spare_parts     = escape($('#spare_parts').summernote('code'));
    var tools_required  = escape($('#tools_required').summernote('code'));


if(client_name == "" || client_name == null || client_mobile == "" || client_mobile == null||  client_email == "" || client_email == null ||  job_amount == "" || job_amount == null ){

    if(client_name == "")
    {
        jQuery("#name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
    }

    if(client_mobile == "")
    {
        jQuery("#mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
    }

    if(client_email == "")
    {
        jQuery("#email").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

    }

    if(job_amount == "")
    {
        jQuery("#job_amount").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

    }

    jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

    return false;

}else{

    var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

    $('#dashboard_data').append(Loader);
    $('html').addClass('.no-scroll');            

    $.ajax({
        type:"post",
        url: 'ajax/create_new_job_sheet.php',
        data:'client_name='+ client_name +'&client_mobile='+ client_mobile +'&client_email='+ client_email +'&client_address='+ client_address +'&job_to_do='+ job_to_do + '&booking_date='+ booking_date + '&technician='+ technician +'&start_date='+ start_date +'&end_date='+ end_date +'&start_time='+ start_time +'&end_time='+ end_time + '&spare_parts='+ spare_parts + '&tools_required=' + tools_required + '&quotation_id='+ quotation_id + '&job_sheet_id=' + job_sheet_id + '&job_amount=' + job_amount + '&inspection_id=' + inspection_id + '&service=' + service,

        success: function(response) {

            $("#loaderimg").remove();
            $('html').removeClass('no-scroll');

            $.niftyNoty({
                type: 'success',
                container : 'floating',
                title : 'Jobsheet Created',
                message : 'New Jobsheet has been created successfully!',
                closeBtn : true,
                timer : 500,
                onHide:function(){

                    window.location.href = document.referrer;

                }                       
            });                   
        }
    });
}     

});

</script>