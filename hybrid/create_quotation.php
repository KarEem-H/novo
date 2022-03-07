<?php include "header.php";
include "config/connection.php";

$rowID = $_REQUEST['rid'];
$qId = $_REQUEST['qid'];

if ($_REQUEST['rid']) {

    $sql = mysqli_query($conn,"SELECT inspection_id,cust_name,cust_email,cust_mobile,area,cust_address,service FROM `table_inspection` WHERE id = '$rowID'");

        $row = mysqli_fetch_assoc($sql);
        $inspection_id      = $row['inspection_id'];
        $customer_name      = $row['cust_name'];
        $customer_email     = $row['cust_email'];
        $customer_mobile    = $row['cust_mobile']; 
        $customer_area      = $row['area']; 
        $customer_address   = $row['cust_address'];
        $selected_service   = $row['service'];

    }
    
if ($_REQUEST['qid']) {

    $sql1 = mysqli_query($conn,"SELECT mid,tenant_full_name,tenant_phone,property_name,property_address FROM `maintenance_jobs` WHERE id = '$qId'");

        $row1 = mysqli_fetch_assoc($sql1);
        $maintenance_id     = $row1['mid'];
        $customer_name      = $row1['tenant_full_name'];
        $customer_mobile    = $row1['tenant_phone']; 
        $customer_area      = $row1['property_name']; 
        $customer_address   = $row1['property_address'];
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

    .add_more_text{
      border: 0 !important;
      border-radius: 0;
      line-height: 18px;
      text-transform: uppercase;
      font-size: 12px;
      min-width: 100px;
      text-align: center;
      color: #2ca8ff !important;
      text-decoration: none
    }

    .add_more_text:hover{
      text-decoration: none;
      cursor: pointer;

    }

    .remove_field{
      border: 0 !important;
      border-radius: 0;
      line-height: 18px;
      text-transform: uppercase;
      font-size: 12px;
      min-width: 100px;
      text-align: center;
      color: #f92e2e !important;
      text-decoration: none
    }

    .remove_field:hover{
      text-decoration: none;
      cursor: pointer;
    }

    .new_row{
        margin-top:15px;
    }

    .note-editor{
        border: 1px solid rgba(0, 0, 0, 0.07);
        border-radius: 3px;
        padding: 5px;
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
                                    <div class="pull-right">
                                        <input class="toggle-switch" id="scope_toggle" type="checkbox" onclick="addScope(this);">
                                        Add Scope of Work <label for="scope_toggle"></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div>
                                            <h3>Create Quotation</h3>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="text-main text-sm text-uppercase text-bold">Name</p>
                                                    <input type="text" placeholder="Name" class="form-control input-lg" id="name" onkeyup="changeName(this);" value="<?php echo $customer_name; ?>">
                                                </div>
                                        
                                                <div class="col-sm-6">
                                                    <p class="text-main text-sm text-uppercase text-bold">Email</p>
                                                    <input type="text" placeholder="Email" class="form-control input-lg" id="email" value="<?php echo $customer_email; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="text-main text-sm text-uppercase text-bold">Mobile</p>
                                                    <input type="text" placeholder="Mobile" class="form-control input-lg" id="mobile" onkeyup="changeMobile(this);" value="<?php echo $customer_mobile; ?>">
                                                </div>
                                        
                                                <div class="col-sm-6">
                                                    <p class="text-main text-sm text-uppercase text-bold">Subject</p>
                                                    <div class="select" style="width: 100%">
                                                        <select class="select form-control input-lg" id="subject" onchange="changeSubject(this);">
                                                            <option value="no-push" selected disabled>Select Subject</option>
                                                            <option value="Normal Cleaning">Normal Cleaning</option>
                                                            <option value="Deep Cleaning">Deep Cleaning</option>
                                                            <option value="Office Cleaning" <?php echo $selected_service == 'Office Cleaning' ? 'selected' : ''; ?>>Office Cleaning</option>
                                                            <option value="Sanitizing and Disinfecting Service" <?php echo $selected_service == 'Sanitizing and Disinfecting Service' ? 'selected' : ''; ?>>Sanitizing and Disinfecting Service</option>
                                                            <option value="Pest Control" <?php echo $selected_service == 'Pest Control' ? 'selected' : ''; ?>>Pest Control</option>
                                                            <option value="Sofa Shampooing" <?php echo $selected_service == 'Sofa Shampooing' ? 'selected' : ''; ?>>Sofa Shampooing</option>
                                                            <option value="Carpet Shampooing" <?php echo $selected_service == 'Carpet Shampooing' ? 'selected' : ''; ?>>Carpet Shampooing</option>
                                                            <option value="Electrical" <?php echo $selected_service == 'Electrical' ? 'selected' : ''; ?>>Electrical</option>
                                                            <option value="Plumbing" <?php echo $selected_service == 'Plumbing' ? 'selected' : ''; ?>>Plumbing</option>
                                                            <option value="Handyman" <?php echo $selected_service == 'Handyman' ? 'selected' : ''; ?>>Handyman</option>
                                                            <option value="General Maintenance" <?php echo $selected_service == 'General Maintenance' ? 'selected' : ''; ?>>General Maintenance</option>
                                                            <option value="Landscaping" <?php echo $selected_service == 'Landscaping' ? 'selected' : ''; ?>>Landscaping</option>
                                                            <option value="Gardening" <?php echo $selected_service == 'Gardening' ? 'selected' : ''; ?>>Gardening</option>
                                                            <option value="Marble Polishing and Floor Scrubbing" <?php echo $selected_service == 'Marble Polishing and Floor Scrubbing' ? 'selected' : ''; ?>>Marble Polishing and Floor Scrubbing</option>
                                                            <option value="Pool Cleaning and Maintenance" <?php echo $selected_service == 'Pool Cleaning and Maintenance' ? 'selected' : ''; ?>>Pool Cleaning & Maintenance</option>
                                                            <option value="AC Maintenance" <?php echo $selected_service == 'AC Maintenance' ? 'selected' : ''; ?>>AC Maintenance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="text-main text-sm text-uppercase text-bold">Address</p>
                                                    <div id="summernote_address"><?php echo $customer_area; ?><?php echo $customer_address ?></div>
                                                    <input type="hidden" id="inspection_id" value="<?php echo $inspection_id ?>">
                                                    <input type="hidden" id="maintenance_id" value="<?php echo $maintenance_id ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group" id="scope_of_work" style="display: none;">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="text-main text-sm text-uppercase text-bold">Scope of Work</p>
                                                    <div id="summernote" style="margin-left:22px;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row select-div" id="select-div">
                                                <div class="col-sm-5">
                                                    <p class="text-main text-sm text-uppercase text-bold">Description</p>
                                                    <input type="text" placeholder="Description" class="form-control input-lg description" id="service" onkeyup="changeScope(this);">
                                                </div>
                                                <div class="col-sm-2">
                                                    <p class="text-main text-sm text-uppercase text-bold">Quantity</p>
                                                    <input type="text" placeholder="Qty" class="form-control input-lg quantity" id="qty-0" onkeyup="changeQty(this);">
                                                </div>
                                                <div class="col-sm-3">
                                                    <p class="text-main text-sm text-uppercase text-bold">Rate</p>
                                                    <input type="text" placeholder="Rate" class="form-control input-lg rate" id="rate-0" onkeyup="changeRate(this);">
                                                </div>
                                                <div class="col-sm-2 add_more">
                                                    <div class="form-group label-floating" style="padding-top: 35px;">
                                                      <a class="add_more_text text-main text-sm text-uppercase text-bold" id="add_more_text">+ Add More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="text-main text-sm text-uppercase text-bold">Quotation Date</p>
                                                    <div>
                                                        <div class="input-group date">
                                                            <input type="text" class="form-control input-lg" id="service_date">
                                                            <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <p class="text-main text-bold text-uppercase">Payment Terms</p>
                                                    <div class="select" style="width: 100%">
                                                        <select class="select form-control input-lg" id="payment_terms" onchange="changePayment(this);">
                                                            <option value="no-push" selected disabled>Select Payment Terms</option>
                                                            <option>Full payment upon confirmation of this quotation</option>
                                                            <option>50% on Confirmation - 50% upon completion</option>
                                                            <option>75% on Confirmation - 25% upon completion</option>
                                                            <option>30 days following submission of invoice</option>
                                                            <option>Full payment at handover</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row pad-top pad-btm">
                                            <div class="col-sm-12 toolbar-center text-center">
                                                <button class="btn btn-primary" id="submit">Create Quotation</button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- QUOTATION PREVIEW  -->
                                    <div class="col-sm-6">
                                        <div class="mar-all">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <div class="invoice-masthead">
                                                        <!-- <div class="invoice-text">
                                                            <h3 class="h3 text-uppercase text-thin mar-no text-primary">INVOICE</h3>
                                                        </div> -->
                                                        <div class="invoice-brand" style="white-space:nowrap; text-align: right">
                                                            <div class="invoice-logo">
                                                                <img src="img/higi-logo-header.png" width="150px">
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="invoice-bill row">
                                                        <div class="col-sm-6 text-xs-center">
                                                            <p>To:</p>
                                                            <address>
                                                                <strong class="text-main" id="client_name"><?php echo $customer_name; ?></strong><br>
                                                                <span id="client_mobile"><?php echo $customer_mobile; ?></span>
                                                                <span id="client_address">
                                                                    <?php echo $customer_area ?><br>
                                                                    <?php echo $customer_address ?>
                                                                </span>
                                                            </address>                 
                                                        </div>
                                                        <div class="col-sm-6 text-xs-center">
                                                            <p>Date:</p>
                                                            <p><strong class="text-main" id="quotationDate">Quotation Date</strong></p>
                                                            <p>Subject:</p>
                                                            <address>
                                                                <strong class="text-main" id="client_subject"><?php echo $selected_service ?></strong>  
                                                            </address>
                                                        </div>
                                                    </div>

                                                    <hr class="new-section-sm bord-no">
                                            
                                                    <div class="row">
                                                        <div class="col-lg-12 table-responsive">
                                                            <table class="table table-bordered invoice-summary">
                                                                <thead>
                                                                    <tr class="bg-trans-dark">
                                                                        <th class="text-uppercase">Description</th>
                                                                        <th class="min-col text-center text-uppercase">Qty</th>
                                                                        <th class="min-col text-center text-uppercase">Price</th>
                                                                        <th class="min-col text-right text-uppercase">Total (AED)</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class='display_row'>
                                                                        <td>
                                                                            <strong class="description service">Service</strong>                   
                                                                        </td>
                                                                        <td class="text-center qty-0">1</td>
                                                                        <td class="text-center rate-0">XXX</td>
                                                                        <td class="text-right price" id="price-0">XXX</td>
                                                                    </tr>                                            
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="clearfix">
                                                        <table class="table invoice-total">
                                                            <tbody>
                                                                <tr>
                                                                    <td>SUB TOTAL :</td>
                                                                    <td class="h5 client_sub_total">XXX.XX</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>VAT(5%) :</td>
                                                                    <td class="h5 client_vat">XXX.XX</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>GRAND TOTAL :</strong></td>
                                                                    <td class="text-bold h4 client_total">XXX.XX</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="col-sm-12 text-xs-center" id="scope_of_work_1" style="display: none">
                                                        <p class="text-bold text-main text-uppercase">SCOPE OF WORK</p>
                                                        <p id="summer_note_scope"></p>
                                                    </div>

                                                    <div class="col-sm-12 text-xs-center">                               
                                                        <p class="text-bold text-main text-uppercase">PAYMENT TERMS</p>
                                                        <ul>
                                                            <li id="client_payment">Full payment upon confirmation of this quotation</li>
                                                            <li>Price quoted is inclusive of 5% VAT</li>
                                                        </ul>
                                                    </div>
                                            
                                                    <!-- <div class="text-right no-print">
                                                        <a href="javascript:window.print()" class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></a>
                                                        <a href="#" class="btn btn-primary">Confirm Payment</a>
                                                    </div> -->
                                                    <hr class="new-section-sm bord-no">
                                                    <hr class="new-section-sm bord-no">        
                                                    <hr class="new-section-sm bord-no">
                                            
                                                    <div class="well well-sm">
                                                        <p class="text-bold text-main text-uppercase">Terms &amp; Conditions</p>
                                                        <ol>
                                                            <li>This offer is valid for 30 days from the date stated on the offer, unless otherwise agreed.</li>
                                                            <li>This proposal and costs are based upon a reasonable assumption that the plan and services for which we are responsible have been properly maintained and are in good condition upon the date we assume responsibility.</li>
                                                            <li>The amount quoted is inclusive of VAT.</li>
                                                            <li>Any additional special tasks outside the scope of the tender document will be considered extra as a variable item and will be quoted as requested.</li>
                                                            <li>This rate includes all required cleaning materials and equipment.</li>
                                                            <li>Any accidental damage to movable or immovable items within the premise, incurred during the normal course of our works, will be covered under the Clients insurance.</li>
                                                            <li>Late cancellation fee is 50% of the quoted rate (24hrs notice is required).</li>
                                                            <li>Any delay due to construction or snagging works will not be the responsibility of Whitespot Cleaning Services.</li>
                                                            <li>DEWA should be connected to execute the job without delay.</li>
                                                            </ol>
                                                        <p>If you have any questions concerning this invoice, please contact <strong class="text-main">info@higi.ae</strong></p>
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
<script src="js/summernote-cleaner.js"></script>
<script src="js/create_quotation_script.js"></script>