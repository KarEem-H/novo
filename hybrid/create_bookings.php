<?php include "header.php";

include "config/connection.php";





if ($_SESSION['ADMIN_ID']['ID'] == "") {

    echo "<script type='text/javascript'>location.href = 'login.php';</script>";

}



if ($_REQUEST['number']) {



    $customer_mobile = $_REQUEST['number'];

    $customer_name = $_REQUEST['name'];

    $customer_email = $_REQUEST['email'];

    $customer_area = $_REQUEST['region'];

    $customer_address = mysqli_real_escape_string($conn,$_REQUEST['address']);

    $lead_status = $_REQUEST['lead_status'];

    $lead_source = $_REQUEST['source'];

    if($lead_source == ''){

        $lead_source = 'Landing Page';

    }

    $row_id = $_REQUEST['rowid'];



}



if ($_REQUEST['phone_no']) {

    

    $lead_source = 'Auto Dialer';

    $search_mobile = $_REQUEST['phone_no'];

    

    // $sql1 = mysqli_query($conn,"SELECT id as contactid, customer_name as firstname, customer_mobile as phonemobile FROM `table_contacts` WHERE customer_mobile = '$search_mobile'");

    

        $sql1 = mysqli_query($conn,"SELECT name,mobile FROM auto_dialer WHERE mobile = '$search_mobile'");



        $row1 = mysqli_fetch_assoc($sql1);

        $customer_name = $row1['name'];

        $customer_mobile = $row1['mobile']; 

        

        $sql2 = mysqli_query($conn,"SELECT id FROM auto_dialer WHERE mobile = '$search_mobile' ORDER BY id DESC;");



        $autodialer_number = mysqli_fetch_row($sql2);

        $mobile_number_id = $autodialer_number[0];

        

        if($mobile_number_id !=""){

            

            $sql3 = mysqli_query($conn,"UPDATE auto_dialer SET `status` = '1', `call_date` = '$today_date',`call_time` = '$current_time' WHERE id = '$mobile_number_id'");

            

        }    

    

}





if ($_REQUEST['customer_id']) {



        $customer_id = $_REQUEST['customer_id'];



        $sql1 = mysqli_query($conn,"SELECT id as contactid, customer_name as firstname, customer_mobile as phonemobile FROM `table_contacts` WHERE id = '$customer_id'");



        $row1 = mysqli_fetch_assoc($sql1);

        $customer_name = $row1['firstname'];

        $customer_mobile = $row1['phonemobile']; 

        

        $sql2 = mysqli_query($conn,"SELECT id FROM auto_dialer WHERE mobile = '$customer_mobile' ORDER BY id DESC;");



        $autodialer_number = mysqli_fetch_row($sql2);

        $mobile_number_id = $autodialer_number[0];

        

        if($mobile_number_id !=""){

            

            $sql3 = mysqli_query($conn,"UPDATE auto_dialer SET `status` = '1', `call_date` = '$today_date',`call_time` = '$current_time' WHERE id = '$mobile_number_id'");

            

        }   

            

}



 

?>



<?php include "menubar.php" ?>

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



</style>

        <div class="boxed">



            <!--CONTENT CONTAINER-->

            <!--===================================================-->c

            <div id="content-container">

                             

                <!--Page content-->

                <!--===================================================-->

                <div id="page-content">

                    

                    <div class="fixed-fluid">

                            <div class="fixed-sm-300 pull-sm-right" style="margin-left: 10px">

                                <div class="panel">

                                    <div class="panel-body" id="dashboard_data">



                                        <div class="form-horizontal call_status">

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Date of Birth</label>

                                                <div class="col-sm-5">

                                                    <div style="width: 100%">

                                                        <input type="text" placeholder="dd/mm/yy" class="form-control input-lg" id="DOB">

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Gender</label>

                                                <div class="col-sm-5">

                                                    <div class="select" style="width: 100%">

                                                        <select class="select form-control input-lg" id="gender">

                                                            <option value="Male">Male</option>

                                                            <option value="Female">Female</option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Ownership</label>

                                                <div class="col-sm-5">

                                                    <div class="select" style="width: 100%">

                                                        <select class="select form-control input-lg" id="ownership">

                                                            <option value="Rented">Rented</option>

                                                            <option value="Own">Own</option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            

                                        </div>



                                        <hr>



                                        <div class="form-horizontal call_status" id="cleaner_details">

                                        <p class="text-main text-bold text-uppercase">Cleaner Details</p>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Num of Hours</label>

                                                <div class="col-sm-5">

                                                    <div class="select" style="width: 100%">

                                                        <select class="select form-control input-lg" id="num_hours">

                                                            <option value="2">2</option>

                                                            <option value="3">3</option>

                                                            <option value="4">4</option>

                                                            <option value="5">5</option>

                                                            <option value="6">6</option>

                                                            <option value="7">7</option>

                                                            <option value="8">8</option>

                                                            <option value="9">9</option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Num of Cleaners</label>

                                                <div class="col-sm-5">

                                                    <div class="select" style="width: 100%">

                                                        <select class="select form-control input-lg" id="num_cleaners">

                                                            <option value="1">1</option>

                                                            <option value="2">2</option>

                                                            <option value="3">3</option>

                                                            <option value="4">4</option>

                                                            <option value="5">5</option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Rate Per Hour <span style="color:red">*</span></label>

                                                <div class="col-sm-5">

                                                    <input type="text" placeholder="Rate" class="form-control input-lg" id="rate" value="10">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Extra Charges</label>

                                                <div class="col-sm-5">

                                                    <input type="text" placeholder="Extras" class="form-control input-lg" id="extra_charges">

                                                </div>

                                            </div>

                                        </div>

                                        

                                        <!--Technician Details-->

                                        

                                        <div class="form-horizontal call_status" id="technician_details" style="display: none">

                                        <p class="text-main text-bold text-uppercase">Technician Details</p>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Num of Hours</label>

                                                <div class="col-sm-5">

                                                    <div class="select" style="width: 100%">

                                                        <select class="select form-control input-lg num_hours_tech" id="num_hours_tech">

                                                            <option value="1">1</option>

                                                            <option value="2">2</option>

                                                            <option value="3">3</option>

                                                            <option value="4">4</option>

                                                            <option value="5">5</option>

                                                            <option value="6">6</option>

                                                            <option value="7">7</option>

                                                            <option value="8">8</option>

                                                            <option value="9">9</option>

                                                        </select>
                                                        

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Num of Technicians</label>

                                                <div class="col-sm-5">

                                                    <div class="select" style="width: 100%">

                                                        <select class="select form-control input-lg" id="num_technician">

                                                            <option value="1">1</option>

                                                            <option value="2">2</option>

                                                            <option value="3">3</option>

                                                            <option value="4">4</option>

                                                            <option value="5">5</option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Rate Per Hour <span style="color:red">*</span></label>

                                                <div class="col-sm-5">

                                                    <input type="text" placeholder="Rate" class="form-control input-lg" id="rate_tech">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-7 control-label text-left" for="demo-hor-inputpass">Extra Charges</label>

                                                <div class="col-sm-5">

                                                    <input type="text" placeholder="Extras" class="form-control input-lg" id="extra_charges">

                                                </div>

                                            </div>

                                        </div>



                                        <hr>

                                        <p class="text-main text-bold text-uppercase call_status">Payment Details</p>

                                        <table width="100%" class="call_status">

                                            <tr>

                                                <td>Total Charge :</td>

                                                <td>AED <span class="total-charges"></span></td>

                                            </tr>

                                            <tr>

                                                <td>Material Charge :</td>

                                                <td>AED <span class="total-materialcharges"></span></td>

                                            </tr>

                                            <tr>

                                                <td>Extra Charges :</td>

                                                <td>AED <span class="total-extras"></span></td>

                                            </tr>

                                            <tr style="border-bottom:1px solid #ccc">

                                                <td>VAT :</td>

                                                <td>AED <span class="total-vat"></span></td>

                                            </tr>

                                            <tr>

                                                <td class="text-main text-bold">Amount Payable :</td>

                                                <td class="text-main text-bold">AED <span class="total-payable"></span></td>

                                            </tr>

                                        </table> 

                                        

                                        <div class="row pad-top pad-btm">

                                            <div class="col-sm-12 toolbar-center text-center">

                                                <button class="btn btn-primary" id="submit">Submit</button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="fluid" style="background-color: #fff; padding: 15px">

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <p class="text-main text-sm text-uppercase text-bold">Name <span style="color:red">*</span></p>

                                            <input type="text" placeholder="Name" class="form-control input-lg" id="cust_name" value="<?php echo $customer_name; ?>">

                                        </div>

                                

                                        <div class="col-sm-6">

                                            <p class="text-main text-sm text-uppercase text-bold">Email</p>

                                            <input type="text" placeholder="Email" class="form-control input-lg" id="cust_email" value="<?php echo $customer_email; ?>">

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-sm-6">

                                            <p class="text-main text-sm text-uppercase text-bold">Mobile <span style="color:red">*</span></p>

                                            <input type="text" placeholder="Mobile" class="form-control input-lg" id="cust_mobile" value="<?php echo $customer_mobile; ?>" maxlength="12" minlength="9">

                                        </div>

                                

                                        <div class="col-sm-6">

                                            <p class="text-main text-sm text-uppercase text-bold">Call Status <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="call_status">

                                                    <option value="no-push" disabled>Select Call Status</option>   

                                                    <option value="Booked" selected>Booked</option>

                                                    <option value="Active">Active</option>

                                                    <option value="Call Back">Call Back</option>

                                                    <option value="Not Interested">Not Interested</option>

                                                    <option value="Already have a Maid">Already have a Maid</option>

                                                    <option value="Send Whatsapp Message">Send Whatsapp Message</option>

                                                    <option value="Potential Lead">Potential Lead</option>

                                                    <option value="Booked with other cleaning company">Booked with other cleaning company</option>

                                                    <option value="Call Dropped">Call Dropped</option>

                                                    <option value="Invalid Contact Details">Unreachable - Invalid Contact Details</option>

                                                    <option value="Budget Constraint">Budget Constraint</option>

                                                    <option value="Do Not Disturb">Do Not Disturb</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-sm-6">

                                        <p class="text-main text-bold text-uppercase">Call Type <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="call_type">      

                                                    <option value="no-push" disabled>Select Type</option>

                                                    <option value='Inbound'>Inbound</option>

                                                    <option value='Outbound' selected>Outbound</option>

                                                    <option value='Whatsapp'>Whatsapp</option>

                                                    

                                                </select>

                                                

                                            </div>

                                        </div>

                                        <div class="col-sm-6">

                                        <p class="text-main text-bold text-uppercase">Source <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="source">

                                                    <option value="no-push" disabled>Select Source</option>

                                                    <?php 

                                                        if($lead_source != 'Auto Dialer' && $lead_source != 'Landing Page'){ ?>



                                                        <option>Existing Customer</option>

                                                        <option>Google</option>      

                                                        <option>Website</option>

                                                        <option>Website Whatsapp</option>

                                                        <option>Facebook</option>

                                                        <option>Referral</option>

                                                        <option>Email</option>

                                                        <option>Agents Client</option>

                                                        <option>Unknown</option>

                                                    <?php } ?>

                                                    <option <?php echo $lead_source == 'Landing Page' ? 'selected' : ''; ?>>Landing Page</option>

                                                    

                                                    <option <?php echo $lead_source == 'Auto Dialer' ? 'selected' : 'disabled'; ?>>Auto Dialer</option>

                                                </select>

                                                <input type="hidden" id="lead_id" value="<?php echo $row_id ?>">

                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group call_status">

                                    <div class="row">                                

                                        <div class="col-sm-12">

                                            <p class="text-main text-sm text-uppercase text-bold">Services <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="cleaning_type">

                                                    <option value="no-push" disabled>Cleaning Type</option>      

                                                    <option value="Normal Cleaning" selected>Normal Cleaning</option>

                                                    <option value="Deep Cleaning">Deep Cleaning</option>

                                                    <option value="AMC">Annual Maintenance Contract</option>

                                                    <option value="Electrician">Electrician</option>

                                                    <option value="Plumber">Plumber</option>

                                                    <option value="Handyman">Handyman</option>

                                                    <option value="General Maintenance">General Maintenance</option>

                                                    <!--<option value="Air Conditioning">Air Conditioning</option>-->

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group call_status">



                                    <div class="row">

                                        <div class="col-sm-6" id="normal-bed">

                                            <p class="text-main text-sm text-uppercase text-bold">Bedrooms</p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="normal_bedroom">      

                                                    <option value="no-push" selected disabled>Num of Bedrooms</option>

                                                    <option value="Studio">Studio</option>          

                                                    <option value="1 BR">1 BR</option>

                                                    <option value="2 BR">2 BR</option>

                                                    <option value="3 BR">3 BR</option>

                                                    <option value="4 BR">4 BR</option>

                                                    <option value="Penthouse">Penthouse</option>        

                                                </select>

                                            </div>

                                        </div>

                                    <div class="col-sm-6 form-horizontal" id="extras">

                                    <p class="text-main text-sm text-uppercase text-bold">Extras</p>

                                            <div class="col-sm-4 extras_normal">

                                                <input class="magic-checkbox" id="is_material" type="checkbox" checked>

                                                <label for="is_material" class="control-label text-left">Cleaning Material</label>

                                            </div>

                                        

                                            <div class="col-sm-4 extras_normal">

                                                <input class="magic-checkbox" id="is_balcony" type="checkbox">

                                                <label for="is_balcony" class="control-label text-left">Balcony</label>

                                            </div>

                                       

                                            <div class="col-sm-4 extras_normal">

                                                <input class="magic-checkbox" id="is_linen" type="checkbox">

                                                <label for="is_linen" class="control-label text-left">Linen</label>

                                            </div> 

                                            <!--EXTRAS ELECTRICIAN/PLUMBER/HANDYMAN-->

                                            <div class="col-sm-4 extras_electrician" style="display: none">

                                                <input class="magic-checkbox" id="is_material_electrician" type="checkbox" >

                                                <label for="is_material_electrician" class="control-label text-left">Material</label>

                                            </div>

                                        </div>

                                        

                                        

                                    <!--    <div class="col-sm-6 form-horizontal extras_container_2" id="">-->

                                    <!--<p class="text-main text-sm text-uppercase text-bold">Extras</p>-->

                                    <!--        <div class="col-sm-4 extras_electrician">-->

                                    <!--            <input class="magic-checkbox" id="is_material" type="checkbox" checked>-->

                                    <!--            <label for="is_material" class="control-label text-left">Material</label>-->

                                    <!--        </div>-->

                                        

                                    <!--        <div class="col-sm-4 extras_electrician">-->

                                    <!--            <input class="magic-checkbox" id="is_balcony" type="checkbox">-->

                                    <!--            <label for="is_balcony" class="control-label text-left">Balcony</label>-->

                                    <!--        </div>-->

                                       

                                    <!--        <div class="col-sm-4">-->

                                    <!--            <input class="magic-checkbox" id="is_linen" type="checkbox">-->

                                    <!--            <label for="is_linen" class="control-label text-left">Linen</label>-->

                                    <!--        </div>                                            -->

                                    <!--    </div>-->

                                    </div>

                                    

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                    <div class="col-sm-6" id="building-type" style="display: none">

                                        <p class="text-main text-sm text-uppercase text-bold">Building Type <span style="color:red">*</span></p>

                                        <div class="select" style="width: 100%">

                                            <select class="select form-control input-lg" id="building_type">      

                                                <option value="no-push" selected disabled>Select Building Type</option>

                                                <option value="apartment">Apartment</option>

                                                <option value="villa">Villa</option>
                                                
                                                <option value="townhouse">Townhouse</option>

                                            </select>

                                        </div>                                            

                                    </div>

                                    

                                        <div class="col-sm-6" style="display: none" id="bedrooms">

                                            <p class="text-main text-sm text-uppercase text-bold">Bedrooms <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="rooms_price">      

                                                    <option value="no-push" selected disabled>Num of Bedrooms</option>

                                                    

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                                <div class="form-group service_bar">

                                    <div class="row">

                                        <div class="col-sm-6 service_date">

                                            <p class="text-main text-sm text-uppercase text-bold">Service Date <span style="color:red">*</span></p>

                                            <div>

                                                <div class="input-group date">

                                                    <input type="text" class="form-control input-lg" id="service_date">

                                                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>

                                                </div>

                                            </div>

                                        </div>

                                        

                                        

                                

                                        <div class="col-sm-6 service_slot_container">

                                            <p class="text-main text-sm text-uppercase text-bold">Service Slot <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="service_slot">      

                                                    <option value="no-push" selected disabled>Select Slot</option>

                                                    <option value="8:00">8 AM</option>

                                                    <option value="9:00">9 AM</option>

                                                    <option value="10:00">10 AM</option>

                                                    <option value="11:00">11 AM</option>

                                                    <option value="12:00">12 AM</option>

                                                    <option value="13:00">1 PM</option>

                                                    <option value="14:00">2 PM</option>

                                                    <option value="15:00">3 PM</option>

                                                    <option value="16:00">4 PM</option>

                                                    <option value="17:00">5 PM</option>

                                                    <option value="18:00">6 PM</option>

                                                    <option value="19:00">7 PM</option>

                                                    <option value="20:00">8 PM</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                </div>                               



                                 <div class="form-group service_bar">

                                    <div class="row">  

                                    

                                        <div class="col-sm-12">

                                        <p class="text-main text-bold text-uppercase">Area <span style="color:red">*</span></p>

                                            <div class="select" style="width: 100%">

                                                <select class="select form-control input-lg" id="area">      

                                                <option value="no-push" selected disabled>Select Area</option>

                                                <option value="Akoya" <?php echo $customer_area == 'Akoya' ? 'selected' : ''; ?>>Akoya</option>

                                                <option value="Akoya Oxygen" <?php echo $customer_area == 'Akoya Oxygen' ? 'selected' : ''; ?>>Akoya Oxygen</option>

                                                <option value="Al Barsha 1,2,3" <?php echo $customer_area == 'Al Barsha 1,2,3' ? 'selected' : ''; ?>>Al Barsha 1,2,3</option>

                                                <option value="Al Barsha South 1,2,3" <?php echo $customer_area == 'Al Barsha South 1,2,3' ? 'selected' : ''; ?>>Al Barsha South 1,2,3</option>

                                                <option value="Al Furjan" <?php echo $customer_area == 'Al Furjan' ? 'selected' : ''; ?>>Al Furjan</option>

                                                <option value="Al Jaddaff" <?php echo $customer_area == 'Al Jaddaff' ? 'selected' : ''; ?>>Al Jaddaff</option>

                                                <option value="Al khawaneej" <?php echo $customer_area == 'Al khawaneej' ? 'selected' : ''; ?>>Al khawaneej</option>

                                                <option value="Al Khail Gate / Heights" <?php echo $customer_area == 'Al Khail Gate / Heights' ? 'selected' : ''; ?>>Al Khail Gate / Heights</option>

                                                <option value="Al Manara" <?php echo $customer_area == 'Al Manara' ? 'selected' : ''; ?>>Al Manara</option>

                                                <option value="Al Safa 1,2,3" <?php echo $customer_area == 'Al Safa 1,2,3' ? 'selected' : ''; ?>>Al Safa 1,2,3</option>

                                                <option value="Al Sufouh" <?php echo $customer_area == 'Al Sufouh' ? 'selected' : ''; ?>>Al Sufouh</option>

                                                <option value="Al Wasl" <?php echo $customer_area == 'Al Wasl' ? 'selected' : ''; ?>>Al Wasl</option>

                                                <option value="Arabian Ranches" <?php echo $customer_area == 'Arabian Ranches' ? 'selected' : ''; ?>>Arabian Ranches</option>

                                                <option value="Arjan" <?php echo $customer_area == 'Arjan' ? 'selected' : ''; ?>>Arjan</option>

                                                <option value="Business Bay" <?php echo $customer_area == 'Business Bay' ? 'selected' : ''; ?>>Business Bay</option>

                                                <option value="Damac Hills" <?php echo $customer_area == 'Damac Hills' ? 'selected' : ''; ?>>Damac Hills</option>

                                                <option value="Damac Suburbia" <?php echo $customer_area == 'Damac Suburbia' ? 'selected' : ''; ?>>Damac Suburbia</option>

                                                <option value="Discovery Gardens" <?php echo $customer_area == 'Discovery Gardens' ? 'selected' : ''; ?>>Discovery Gardens</option>

                                                <option value="Dubai Hills" <?php echo $customer_area == 'Dubai Hills' ? 'selected' : ''; ?>>Dubai Hills</option>

                                                <option value="Dubai Marina" <?php echo $customer_area == 'Dubai Marina' ? 'selected' : ''; ?>>Dubai Marina</option>

                                                <option value="Dubailand/ Silicon Oasis" <?php echo $customer_area == 'Dubailand/ Silicon Oasis' ? 'selected' : ''; ?>>Dubailand/ Silicon Oasis</option>

                                                <option value="DIP" <?php echo $customer_area == 'DIP' ? 'selected' : ''; ?>>DIP</option>

                                                <option value="DIFC" <?php echo $customer_area == 'DIFC' ? 'selected' : ''; ?>>DIFC</option>

                                                <option value="Downtown" <?php echo $customer_area == 'Downtown' ? 'selected' : ''; ?>>Downtown</option>

                                                <option value="Emirates Hills" <?php echo $customer_area == 'Emirates Hills' ? 'selected' : ''; ?>>Emirates Hills</option>

                                                <option value="IBN Batutta" <?php echo $customer_area == 'IBN Batutta' ? 'selected' : ''; ?>>IBN Batutta</option>

                                                <option value="IMPZ" <?php echo $customer_area == 'IMPZ' ? 'selected' : ''; ?>>IMPZ</option>

                                                <option value="JBR" <?php echo $customer_area == 'JBR' ? 'selected' : ''; ?>>JBR</option>

                                                <option value="Jebel Ali" <?php echo $customer_area == 'Jebel Ali' ? 'selected' : ''; ?>>Jebel Ali</option>

                                                <option value="JLT" <?php echo $customer_area == 'JLT' ? 'selected' : ''; ?>>JLT</option>

                                                <option value="Jumeirah 1,2,3" <?php echo $customer_area == 'Jumeirah 1,2,3' ? 'selected' : ''; ?>>Jumeirah 1,2,3</option>

                                                <option value="Jumeirah Golf Estate" <?php echo $customer_area == 'Jumeirah Golf Estate' ? 'selected' : ''; ?>>Jumeirah Golf Estate</option>

                                                <option value="Jumeirah Heights" <?php echo $customer_area == 'Jumeirah Heights' ? 'selected' : ''; ?>>Jumeirah Heights</option>

                                                <option value="Jumeirah Island" <?php echo $customer_area == 'Jumeirah Island' ? 'selected' : ''; ?>>Jumeirah Island</option>

                                                <option value="Jumeirah Park" <?php echo $customer_area == 'Jumeirah Park' ? 'selected' : ''; ?>>Jumeirah Park</option>

                                                <option value="Jumeirah Village Circle" <?php echo $customer_area == 'Jumeirah Village Circle' ? 'selected' : ''; ?>>Jumeirah Village Circle</option>

                                                <option value="Jumeirah Village Triangle" <?php echo $customer_area == 'Jumeirah Village Triangle' ? 'selected' : ''; ?>>Jumeirah Village Triangle</option>

                                                <option value="Knowledge Village" <?php echo $customer_area == 'Knowledge Village' ? 'selected' : ''; ?>>Knowledge Village</option>

                                                <option value="Meadows" <?php echo $customer_area == 'Meadows' ? 'selected' : ''; ?>>Meadows</option>

                                                <option value="Meida City" <?php echo $customer_area == 'Meida City' ? 'selected' : ''; ?>>Meida City</option>

                                                <option value="Meydan" <?php echo $customer_area == 'Meydan' ? 'selected' : ''; ?>>Meydan</option>

                                                <option value="Mira" <?php echo $customer_area == 'Mira' ? 'selected' : ''; ?>>Mira</option>

                                                <option value="Mirdiff" <?php echo $customer_area == 'Mirdiff' ? 'selected' : ''; ?>>Mirdiff</option>

                                                <option value="Motor City" <?php echo $customer_area == 'Motor City' ? 'selected' : ''; ?>>Motor City</option>

                                                <option value="Mudon" <?php echo $customer_area == 'Mudon' ? 'selected' : ''; ?>>Mudon</option>

                                                <option value="Nad AL Shiba" <?php echo $customer_area == 'Nad AL Shiba' ? 'selected' : ''; ?>>Nad AL Shiba</option>

                                                <option value="Palm Jumeirah" <?php echo $customer_area == 'Palm Jumeirah' ? 'selected' : ''; ?>>Palm Jumeirah</option>

                                                <option value="Reemram" <?php echo $customer_area == 'Reemram' ? 'selected' : ''; ?>>Reemram</option>

                                                <option value="Sports City / Victory Heights" <?php echo $customer_area == 'Sports City / Victory Heights' ? 'selected' : ''; ?>>Sports City / Victory Heights</option>

                                                <option value="Springs" <?php echo $customer_area == 'Springs' ? 'selected' : ''; ?>>Springs</option>

                                                <option value="Silicon Oasis" <?php echo $customer_area == 'Silicon Oasis' ? 'selected' : ''; ?>>Silicon Oasis</option>

                                                <option value="Studio City" <?php echo $customer_area == 'Studio City' ? 'selected' : ''; ?>>Studio City</option>

                                                <option value="Sustainable City" <?php echo $customer_area == 'Sustainable City' ? 'selected' : ''; ?>>Sustainable City</option>

                                                <option value="Tecom, Barsha Heights" <?php echo $customer_area == 'Tecom, Barsha Heights' ? 'selected' : ''; ?>>Tecom, Barsha Heights</option>

                                                <option value="Tenora" <?php echo $customer_area == 'Tenora' ? 'selected' : ''; ?>>Tenora</option>

                                                <option value="The Gardens" <?php echo $customer_area == 'The Gardens' ? 'selected' : ''; ?>>The Gardens</option>

                                                <option value="The Lakes" <?php echo $customer_area == 'The Lakes' ? 'selected' : ''; ?>>The Lakes</option>

                                                <option value="Townsquare" <?php echo $customer_area == 'Townsquare' ? 'selected' : ''; ?>>Townsquare</option>

                                                <option value="Umm Al Sheif" <?php echo $customer_area == 'Umm Al Sheif' ? 'selected' : ''; ?>>Umm Al Sheif</option>

                                                <option value="Umm Suqeim 1,2,3" <?php echo $customer_area == 'Umm Suqeim 1,2,3' ? 'selected' : ''; ?>>Umm Suqeim 1,2,3</option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                     



                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-sm-6 service_bar">

                                            <p class="text-main text-sm text-uppercase text-bold">Customer Address</p>

                                            <textarea class="form-control" rows="5" style="width: 100%" id="cust_address"><?php echo $customer_address; ?></textarea>

                                        </div>

                                        <div class="col-sm-6">

                                            <p class="text-main text-sm text-uppercase text-bold">Special Request/ Agent Remarks <span style="color:red">*</span></p>

                                            <textarea class="form-control" rows="5" style="width: 100%" id="special_req"></textarea>

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



    $(document).ready(function() {



        $('#available_staff_list').select2();



     



        $(document).on('change', '#call_status', function(){

       

            var call_status = $('#call_status').val();



            if (call_status == 'Booked') {

                $('.call_status').show();

                

                $('.service_bar').show();



            }else{

                $('.call_status').hide();

                

                $('.service_bar').hide();

            }



            



        });



        // $("#cust_mobile").keydown(function (e) {

        //     // Allow: backspace, delete, tab, escape, enter and .

        //     if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||

        //          // Allow: Ctrl+A, Command+A

        //         (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 

        //          // Allow: home, end, left, right, down, up

        //         (e.keyCode >= 35 && e.keyCode <= 40)) {

        //              // let it happen, don't do anything

        //              return;

        //     }

        //     // Ensure that it is a number and stop the keypress

        //     if ((e.shiftKey || (e.keyCode <= 48 || e.keyCode >= 57)) && (e.keyCode <= 96 || e.keyCode >= 105)) {

        //         e.preventDefault();

        //     }

        // });



     $("#service_date").datepicker({

        minDate: '0',

       

        onSelect: function (dateText) {

            // set date

            jQuery('#service_date').val(dateText);



        }

    });



    var date = new Date();

    date.setDate(date.getDate());



    var $datepicker = jQuery('#service_date');

    $datepicker.datepicker();

    $datepicker.datepicker('setDate', date);

    

    $("#DOB").datepicker({

       

        onSelect: function (dateText) {

            // set date

            jQuery('#DOB').val(dateText);



        }

    });



    var mydate = new Date();

    mydate.setDate(mydate.getDate());



    var $datepicker1 = jQuery('#DOB');

    $datepicker1.datepicker();

    $datepicker1.datepicker('setDate', mydate);



    $(document).on('change', '#cleaning_type', function(){



        var cleaning_type = $('#cleaning_type').val();

        // var building_type = $('#building_type').val();

        

        if(cleaning_type == 'Deep Cleaning'){

            $('.extras_normal').hide();

            $('#cleaner_details').hide();

            $('#technician_details').hide();

            $('#bedrooms').show();

            $('#building-type').show();

            $('#normal-bed').hide();

            $('.extras_electrician').hide();

            $('.service_date').show();

            

        }

        

        if(cleaning_type == 'Normal Cleaning'){

            $('.extras_normal').show();

            $('#cleaner_details').show();

            $('#technician_details').hide();

            $('#bedrooms').hide();

            $('#building-type').hide();

            $('#normal-bed').show();

            $('.extras_electrician').hide();

            $('.service_date').show();

            

        }

        

        if (cleaning_type == 'AMC'){

            $('.extras_normal').hide();

            $('#cleaner_details').hide();

            $('#technician_details').hide();

            $('#bedrooms').show();

            $('#building-type').show();

            $('#normal-bed').hide();

            $('.extras_electrician').hide();

            $('.service_date').show();

            $('.service_slot_container').hide();
            
            

        }

        

        if (cleaning_type == 'Electrician'){

            $('.extras_electrician').show();

            $('#cleaner_details').hide();

            $('#technician_details').show();

            $('#bedrooms').hide();

            $('#building-type').hide();

            $('#normal-bed').hide();

            $('.extras_normal').hide();

            $('.service_date').show();
            
                       

        }

        

        if (cleaning_type == 'Plumber'){

            $('.extras_electrician').show();

            $('#cleaner_details').hide();

            $('#technician_details').show();

            $('#bedrooms').show();

            $('#building-type').hide();

            $('#normal-bed').hide();

            $('.extras_normal').hide();

            $('.service_date').show();

            

        }

        

        if (cleaning_type == 'Handyman'){

            $('.extras_electrician').show();

            $('#cleaner_details').hide();

            $('#technician_details').show();

            $('#bedrooms').show();

            $('#building-type').hide();

            $('#normal-bed').hide();

            $('.extras_normal').hide();

            $('.service_date').show();

            

        }

        

        if (cleaning_type == 'General Maintenance'){

            $('.extras_electrician').show();

            $('#cleaner_details').hide();

            $('#technician_details').show();

            $('#bedrooms').show();

            $('#building-type').hide();

            $('#normal-bed').hide();

            $('.extras_normal').hide();

            $('.service_date').show();

            

        }



    });

    



    $('#building_type').on('change',function(){



        var cleaning_type = $('#cleaning_type').val();

        var building_type = $('#building_type').val();



        get_deep_cleaning_details();

        show_summary2();



        $.ajax({

            type:"post",

            url: 'ajax/get_cleaning_price.php',

            data:'cleaningType='+ cleaning_type+'&buildingType='+ building_type,

          

            success: function(msg) {



                $('#rooms_price').html(msg); 



                }



            });



        });



    });    



</script>



<script type="text/javascript">



    $('#rooms_price').on('change',function(){

        get_deep_cleaning_details();

        show_summary2();

    });


    
    
    $('#num_hours').on('change',function(){

        get_normal_cleaning_details();

        show_summary();

    });



    $('#num_cleaners').on('change',function(){

        get_normal_cleaning_details();

        show_summary();

    });
    
    $(document).on('change click blur keyup keydown', '#num_hours_tech', function(){
   
            get_electrician_details();

            show_summary3();

    });
    
   $(document).on('change click blur keyup keydown', '#num_technician', function(){ 

        get_electrician_details();

        show_summary3();

    });



    $('#normal_bedroom').on('change',function(){

        get_normal_cleaning_details();

        show_summary();

    });



    



    function get_normal_cleaning_details() {



        if($("#is_material").prop('checked') == true){

          var materials = 'Yes';

        }



        if($("#is_balcony").prop('checked') == true){

          var balcony = 'Yes';

        }



        if($("#is_linen").prop('checked') == true){

          var linen = 'Yes';

        }



        var num_hours = parseInt(jQuery('#num_hours').val());

        var num_cleaners = parseInt(jQuery('#num_cleaners').val());

        var num_beds = jQuery('#normal_bedroom').val();

        var has_material = (materials == "Yes" ? true : false);

        var has_balcony = (balcony == "Yes" ? true : false);

        var has_linen = (linen == "Yes" ? true : false);

        var rate = parseFloat(jQuery('#rate').val());

        var extra = parseInt(jQuery('#extra_charges').val());

        var extra_charges = extra > 0 ? extra : 0;



        var balcony_rate = 35;

        var linen_rate = 35;



        if(num_beds == 'Studio' || num_beds == '1 BR'){

            balcony_rate = 35;

            linen_rate = 35;

        }



        if(num_beds == '2 BR'){

            balcony_rate = 45;

            linen_rate = 45;

        }



        if(num_beds == '3 BR' || num_beds == '4 BR' || num_beds == 'Penthouse'){

            balcony_rate = 65;

            linen_rate = 65;

        }



        var balcony_charges = (has_balcony ? balcony_rate : 0);

        var linen_charges = (has_linen ? linen_rate : 0);

        var rate_material = 10;

        var material_charges = (has_material ? rate_material * num_hours * num_cleaners : 0);

        var subtotal = num_hours > 0 && num_cleaners > 0 ? (rate * num_hours * num_cleaners) : 0;

        var vat_rate = 0.05;

        var vat = (subtotal + material_charges + balcony_charges + linen_charges + extra_charges) * 0.05;

        var total = subtotal + vat + material_charges + balcony_charges + linen_charges + extra_charges;



        var get_normal_cleaning_details = {

            'rate': rate,

            'material_charges': material_charges,

            'vat_rate': vat_rate,

            'vat': vat,

            'extra_charges': extra_charges,

            'subtotal': subtotal,

            'total': total

        };



        return get_normal_cleaning_details;



        

    }



    function show_summary() {



        var details = get_normal_cleaning_details();

        jQuery('.total-charges').html(details.subtotal.toFixed(2));

        jQuery('.total-materialcharges').html(details.material_charges);

        jQuery('.total-vat').html(details.vat.toFixed(2));

        jQuery('.total-extras').html(details.extra_charges);

        jQuery('.total-payable').html(details.total.toFixed(2));



    }



    show_summary();



   // DEEP CLEANING



        function get_deep_cleaning_details() {



        var obj_num_beds = jQuery('#rooms_price option:checked');

        var num_beds_price = obj_num_beds.data('price');

        var num_beds_rooms = obj_num_beds.attr('value');

        var subtotal = num_beds_price;

        // var vat_rate = 0.05;

        // var vat = num_beds_price * vat_rate;

        var total = subtotal;

        

        // 2 digits vat

        // if(vat >= 0) {

        //     vat = vat.toFixed(2);

        // }



        if($("#is_linen").prop('checked') == true){

          var linen = 'Yes';

        }



        var has_linen = (linen == "Yes" ? true : false);



        var linen_rate = 35;



        if(num_beds_rooms == 'Studio' || num_beds_rooms == '1 BR'){

           

            linen_rate = 35;

        }



        if(num_beds_rooms == '2 BR'){

           

            linen_rate = 45;

        }



        if(num_beds_rooms == '3 BR' || num_beds_rooms == '4 BR'){

           

            linen_rate = 65;

        }



        var linen_charges = (has_linen ? linen_rate : 0);



        var get_deep_cleaning_details = {

            'num_beds_rooms': num_beds_rooms,

            'num_beds_price': num_beds_price,

            'extra_charges': linen_charges,

            'subtotal': subtotal,

            'total': total + linen_charges

        };



        return get_deep_cleaning_details;

        

    }



    function show_summary2() {



        var details = get_deep_cleaning_details();

        jQuery('.total-charges').html(details.subtotal);

        jQuery('.total-materialcharges').html('0');

        jQuery('.total-vat').html('0');

        jQuery('.total-extras').html(details.extra_charges);

        jQuery('.total-payable').html(details.total);



    }

   

    
    $(document).on('change click blur keyup keydown', '#rate_tech', function(){
        
        var cleaning_type = $('#cleaning_type').val();
         
        // alert(cleaning_type);
        if (cleaning_type == 'Electrician') {
           
            get_electrician_details();

            show_summary3();



        }
        
    });

    $('#rate').on('change click blur keyup keydown',function(){

        var cleaning_type = $('#cleaning_type').val();
              

        if (cleaning_type == 'Normal Cleaning') {
            
            
            get_normal_cleaning_details();

            show_summary();



        }else {

            get_deep_cleaning_details();

            show_summary2();

        }
        
        



    });





    $('#extra_charges').on('change click blur keyup keydown',function(){

        var cleaning_type = $('#cleaning_type').val();



        if (cleaning_type == 'Normal Cleaning') {

            get_normal_cleaning_details();

            show_summary();



        }
        
        if (cleaning_type == 'Deep Cleaning') {

            get_deep_cleaning_details();

            show_summary2();

        }
        
        if (cleaning_type == 'Electrician') {
            
            
            get_electrician_details();

            show_summary3();



        }

    });



    $('#is_material').on('change click blur keyup keydown',function(){

        

            get_normal_cleaning_details();

            show_summary();

        

    });



    $('#is_balcony').on('change click blur keyup keydown',function(){

        

            get_normal_cleaning_details();

            show_summary();

        

    });



    $('#is_linen').on('change click blur keyup keydown',function(){

        

        if (cleaning_type == 'Normal Cleaning') {

            get_normal_cleaning_details();

            show_summary();



        }
        
        if (cleaning_type == 'Deep Cleaning') {

            get_deep_cleaning_details();

            show_summary2();

        }
        
        if (cleaning_type == 'Electrician') {
            
            
            get_electrician_details();

            show_summary3();



        }

        

    });



// Annual Maintenance



        function get_amc_details() {



        var obj_num_beds = jQuery('#rooms_price option:checked');

        var num_beds_price = obj_num_beds.data('price');

        var num_beds_rooms = obj_num_beds.attr('value');

        var subtotal = num_beds_price;
        
        // var vat_rate = 0.05;

        // var vat = (subtotal + material_charges + balcony_charges + linen_charges + extra_charges) * 0.05;

        // var total = subtotal + vat + material_charges + balcony_charges + linen_charges + extra_charges;

        var vat_rate = 0.05;

        var vat = num_beds_price * vat_rate;

        var total = subtotal;

        

        // 2 digits vat

        // if(vat >= 0) {

        //     vat = vat.toFixed(2);

        // }



        if($("#is_linen").prop('checked') == true){

          var linen = 'Yes';

        }



        var has_linen = (linen == "Yes" ? true : false);



        var linen_rate = 0;



        if(num_beds_rooms == 'Studio' || num_beds_rooms == '1 BR'){

           

            linen_rate = 0;

        }



        if(num_beds_rooms == '2 BR'){

           

            linen_rate = 0;

        }



        if(num_beds_rooms == '3 BR' || num_beds_rooms == '4 BR'){

           

            linen_rate = 0;

        }



        var linen_charges = (has_linen ? linen_rate : 0);



        var get_amc_details = {

            'num_beds_rooms': num_beds_rooms,

            'num_beds_price': num_beds_price,

            'extra_charges': linen_charges,

            'subtotal': subtotal,

            'total': total 

        };



        return get_amc_details;

        

    }
    

// Electrician

function get_electrician_details() {



        if($("#is_material_electrician").prop('checked') == true){

          var electric_materials = 'Yes';

        }



        // if($("#is_balcony").prop('checked') == true){

        //   var balcony = 'Yes';

        // }



        // if($("#is_linen").prop('checked') == true){

        //   var linen = 'Yes';

        // }

    


        var num_hours = parseInt(jQuery('#num_hours_tech').val());

        var num_technician = parseInt(jQuery('#num_technician').val());

        // var num_beds = jQuery('#normal_bedroom').val();

        var has_material = (electric_materials == "Yes" ? true : false);

        // var has_balcony = (balcony == "Yes" ? true : false);

        // var has_linen = (linen == "Yes" ? true : false);

        var rate = parseFloat(jQuery('#rate_tech').val());
        
        // alert(rate);

        var extra = parseInt(jQuery('#extra_charges').val());

        var extra_charges = extra > 0 ? extra : 0;

        console.log(rate);

        // var balcony_rate = 35;

        // var linen_rate = 35;



        // if(num_beds == 'Studio' || num_beds == '1 BR'){

        //     balcony_rate = 35;

        //     linen_rate = 35;

        // }



        // if(num_beds == '2 BR'){

        //     balcony_rate = 45;

        //     linen_rate = 45;

        // }



        // if(num_beds == '3 BR' || num_beds == '4 BR' || num_beds == 'Penthouse'){

        //     balcony_rate = 65;

        //     linen_rate = 65;

        // }



        // var balcony_charges = (has_balcony ? balcony_rate : 0);

        // var linen_charges = (has_linen ? linen_rate : 0);

        var rate_material = 0;

        var material_charges = (has_material ? rate_material * num_hours * num_technician : 0);

        var subtotal = num_hours > 0 && num_technician > 0 ? (rate * num_hours * num_technician) : 0;

        var vat_rate = 0.05;

        var vat = (subtotal + material_charges + extra_charges) * 0.05;

        var total = subtotal + vat + material_charges + extra_charges;



        var get_electrician_details = {

            'rate': rate,

            'material_charges': material_charges,

            'vat_rate': vat_rate,

            'vat': vat,

            'extra_charges': extra_charges,

            'subtotal': subtotal,

            'total': total

        };



        return get_electrician_details;

                

    }
    
     function show_summary3() {



        var details = get_electrician_details();

        jQuery('.total-charges').html(details.subtotal.toFixed(2));

        jQuery('.total-materialcharges').html(details.material_charges);

        jQuery('.total-vat').html(details.vat.toFixed(2));

        jQuery('.total-extras').html(details.extra_charges);

        jQuery('.total-payable').html(details.total.toFixed(2));



    }



    



</script>



<script type="text/javascript">



    $('#submit').on('click',function(){



        var cleaning_type   = $('#cleaning_type').val();

        var cust_name       = $('#cust_name').val();

        var cust_mobile     = $('#cust_mobile').val();

        var cust_email      = $('#cust_email').val();

        var DOB             = $('#DOB').val();

        var gender          = $('#gender').val();

        var ownership       = $('#ownership').val();

        var call_status     = $('#call_status').val();

        var call_type       = $('#call_type').val();

        var service_type    = $('#service_type').val();

        var service_date    = $('#service_date').val();

        var service_slot    = $('#service_slot').val();

        var slot            = service_slot;

        var source          = $('#source').val();

        var area            = $('#area').val();

        var building_type   = $('#building_type').val();

        var special_req     = escape($('#special_req').val());

        var cust_address    = escape($('#cust_address').val());

        var lead_id         = $('#lead_id').val();



        $(document).on('focus','#cust_name',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#cust_mobile',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#cleaning_type',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#service_date',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#service_slot',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#source',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });

        $(document).on('focus','#call_type',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#area',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });



        $(document).on('focus','#building_type',function(){

            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});

        });





        if(call_status != 'Booked'){



            if (cust_name == "" || cust_name == null || cust_mobile == "" || cust_mobile == null||  source == "" || source == null ||  call_type == "" || call_type == null ||  special_req == "" || special_req == null ){

                 if(cust_name == "")

                {

                    jQuery("#cust_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(cust_mobile == "")

                {

                    jQuery("#cust_mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                

                if(source == "" || source == null)

                {

                    jQuery("#source").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#source_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(call_type == "" || call_type == null)

                {

                    jQuery("#call_type").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#call_type_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(special_req == "" || special_req == null)

                {

                    jQuery("#special_req").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    

                }

                

                jQuery('html,body').animate({ scrollTop: 200 }, 'slow');



                return false;

            } else {



            var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";



            $('#dashboard_data').append(Loader);

            $('html').addClass('.no-scroll');



            $.ajax({

                type:"post",

                url: 'ajax/create_new_outbound.php',

                data:'cust_name='+ cust_name +'&cust_mobile='+ cust_mobile +'&cust_email='+ cust_email+'&cust_address='+ cust_address+'&area='+ area +'&call_status='+ call_status +'&call_source='+ source +'&call_type='+ call_type +'&special_req='+ special_req +'&lead_id='+ lead_id + '&service_type=' + service_type +'&service_date='+ service_date+'&service_slot='+ slot,

                success:function(msg){



                    $.niftyNoty({

                    type: 'success',

                    container : 'floating',

                    title : 'Call Status Updated',

                    message : 'The Call Status has been Updated successfully!',

                    closeBtn : true,

                    timer : 5500,

                    onHide:function(){  



                        $("#loaderimg").remove();

                        $('html').removeClass('no-scroll'); 



                            if (document.referrer === "https://higi.ae/hybrid/landing_page_leads.php" || document.referrer === "https://higi.ae/hybrid/follow_up.php") {

                                window.location.href = document.referrer;

                            }else{

                                window.location.href='create_bookings.php';

                            }

                        }

                   

                    });



                }

            });

        }



        }



        if(call_status == 'Booked'){            



            if (cust_name == "" || cust_name == null || cust_mobile == "" || cust_mobile == null|| cleaning_type == "" || cleaning_type == null || service_date == "" || service_date == null || service_slot == "" || service_slot == null || source == "" || source == null ||  call_type == "" || call_type == null || area == "" || area == null ){

                 if(cust_name == "")

                {

                    jQuery("#cust_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(cust_mobile == "")

                {

                    jQuery("#cust_mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(cleaning_type == "" || cleaning_type == null)

                {

                    jQuery("#cleaning_type").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#cleaning_type_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(area == "" || area == null)

                {

                    jQuery("#area").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#area_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(service_date == "")

                {

                    jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(service_slot == "" || service_slot == null)

                {

                    jQuery("#service_slot").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#service_slot_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(source == "" || source == null)

                {

                    jQuery("#source").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#source_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }



                if(call_type == "" || call_type == null)

                {

                    jQuery("#call_type").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                    jQuery("#call_type_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                }

                

                jQuery('html,body').animate({ scrollTop: 200 }, 'slow');



                return false;

            } else {



        



            var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";



            $('#dashboard_data').append(Loader);

            $('html').addClass('.no-scroll');   



             $.ajax({

                type:"post",

                url: 'ajax/create_new_outbound.php',

                data:'cust_name='+ cust_name+'&cust_mobile='+ cust_mobile+'&call_status='+ call_status+'&call_source='+ source+'&call_type='+ call_type+'&lead_id='+lead_id +'&special_req='+ special_req,

            });

            

        // NORMAL CLEANING SHIT



        if(cleaning_type == 'Normal Cleaning'){



            if($("#is_material").prop('checked') == true){

              var materials = 'Yes';

            }else{

                var materials = 'No';

            }



            if($("#is_balcony").prop('checked') == true){

              var balcony = 'Yes';

            }else{

                var balcony = 'No';

            }

            



            if($("#is_linen").prop('checked') == true){

              var linen = 'Yes';

            }else {

                var linen = 'No';

            }

        

        var num_hours = parseInt(jQuery('#num_hours').val());

        var num_cleaners = parseInt(jQuery('#num_cleaners').val());

        var num_beds = jQuery('#normal_bedroom').val();

        var has_material = (materials == "Yes" ? true : false);

        var has_balcony = (balcony == "Yes" ? true : false);

        var has_linen = (linen == "Yes" ? true : false);

        var rate = jQuery('#rate').val();

        var Rate= parseFloat(rate).toFixed(2);

        var extra = parseInt(jQuery('#extra_charges').val());

        var extra_charges = extra > 0 ? extra : 0;

        var balcony_rate = 35;

        var linen_rate = 35;



        if(num_beds == 'Studio' || num_beds == '1 BR'){

            balcony_rate = 35;

            linen_rate = 35;

        }

        if(num_beds == '2 BR'){

            balcony_rate = 45;

            linen_rate = 45;

        }

        if(num_beds == '3 BR' || num_beds == '4 BR' || num_beds == 'Penthouse'){

            balcony_rate = 65;

            linen_rate = 65;

        }

        var balcony_charges = (has_balcony ? balcony_rate : 0);

        var linen_charges = (has_linen ? linen_rate : 0);

        var rate_material = 10;

        var material_charges = (has_material ? rate_material * num_hours * num_cleaners : 0);

        var subtotal = num_hours > 0 && num_cleaners > 0 ? (Rate * num_hours * num_cleaners) : 0;

        var vat_rate = 0.05;

        var vat = (subtotal + material_charges + balcony_charges + linen_charges + extra_charges) * 0.05;

        var Total = subtotal + vat + material_charges + balcony_charges + linen_charges + extra_charges;

        var total= parseFloat(Total).toFixed(2);



         $.ajax({

            type:"post",

            url: 'ajax/create_new_booking.php',

            data:'cust_name='+ cust_name+'&cust_mobile='+ cust_mobile+'&cust_email='+ cust_email+'&cust_address='+ cust_address+'&area='+ area+'&special_req='+ special_req+'&cleaningType='+ cleaning_type+'&num_bedrooms='+ num_beds+'&num_hours='+ num_hours+'&num_cleaners='+ num_cleaners+'&rate='+ rate+'&material='+ materials+'&material_charges='+ material_charges+'&source='+ source+'&extra_charges='+ extra_charges+'&cod='+ ''+'&vat='+ vat+'&sub_total='+ subtotal+'&total='+ total+'&service_date='+ service_date+'&service_slot='+ slot+'&balcony='+ balcony+'&linen='+ linen+'&call_status='+ call_status+'&call_type='+ call_type+'&DOB='+ DOB+'&gender='+ gender+'&ownership='+ ownership,

          

            success: function(msg) {



                $.niftyNoty({

                    type: 'success',

                    container : 'floating',

                    title : 'Booking Confirmation',

                    message : 'New Booking has been created successfully!',

                    closeBtn : true,

                    timer : 750,

                    onHide:function(){



                        $("#loaderimg").remove();

                        $('html').removeClass('no-scroll');

                        if (document.referrer === "https://higi.ae/hybrid/landing_page_leads.php" || document.referrer === "https://higi.ae/hybrid/follow_up.php") {

                                window.location.href = document.referrer;

                            }else{

                                window.location.href='create_bookings.php';

                        }

                    }

                   

                });

            }



        });



        }



        // DEEP CLEANING SHIT



        if(cleaning_type == 'Deep Cleaning'){

            

            var materials = 'Yes';

            var has_linen = (linen == "Yes" ? true : false);

            var obj_num_beds = jQuery('#rooms_price option:checked');

            var num_beds_price = obj_num_beds.data('price');

            var num_beds_rooms = obj_num_beds.attr('value');

            var subtotal = num_beds_price;

            var linen_charges = (has_linen ? linen_rate : 0);

            var extra = parseInt(jQuery('#extra_charges').val());

            var extra_charges = linen_charges;

            var vat_rate = 0.05;

            var vat = '0';

            var Total = subtotal + extra_charges;

            var total= parseFloat(Total).toFixed(2);

            

            var num_hours;

            var num_cleaners;



            if($("#is_linen").prop('checked') == true){

              var linen = 'Yes';

            }else {

                var linen = 'No';

            }



            var linen_rate = 35;



            if(num_beds_rooms == 'Studio' || num_beds_rooms == '1 BR'){

               

                linen_rate = 35;

            }



            if(num_beds_rooms == '2 BR'){

               

                linen_rate = 45;

            }



            if(num_beds_rooms == '3 BR' || num_beds_rooms == '4 BR'){

               

                linen_rate = 65;

            }

            

            



        if(building_type == 'apartment'){

            // alert(num_beds_rooms);

            if(num_beds_rooms == '1 BR' || num_beds_rooms == 'Studio'){

                num_hours = 4;

                num_cleaners = 1;

            }

            if(num_beds_rooms == '2 BR' ){

                num_hours = 4;

                num_cleaners = 2;

            }

            if(num_beds_rooms == '3 BR' ){

                num_hours = 4;

                num_cleaners = 2;

            }

            if(num_beds_rooms == '4 BR' ){

                num_hours = 8;

                num_cleaners = 3;

            }

            if(num_beds_rooms == '5 BR' ){

                num_hours = 8;

                num_cleaners = 4;

            }



        }

        if(building_type == 'villa'){



            // VILLA

            if(num_beds_rooms == '1 BR' ){

                num_hours = 4;

                num_cleaners = 2;

            }

            if(num_beds_rooms == '2 BR' ){

                num_hours = 4;

                num_cleaners = 3;

            }

            if(num_beds_rooms == '3 BR' ){

                num_hours = 8;

                num_cleaners = 5;

            }

            if(num_beds_rooms == '4 BR' ){

                num_hours = 8;

                num_cleaners = 5;

            }

            if(num_beds_rooms == '5 BR' ){

                num_hours = 8;

                num_cleaners = 6;

            }



        }



            $.ajax({

            type:"post",

            url: 'ajax/create_new_booking.php',

            data:'cust_name='+ cust_name+'&cust_mobile='+ cust_mobile +'&cust_email='+ cust_email +'&cust_address='+ cust_address+'&area='+ area+'&special_req='+ special_req+'&cleaningType='+ cleaning_type+'&buildingType='+ building_type+'&material='+ materials+'&source='+ source+'&num_bedrooms='+ num_beds_rooms+'&num_hours=' + num_hours + '&num_cleaners=' + num_cleaners + '&extra_charges='+ extra_charges+'&vat='+ vat+'&sub_total='+ subtotal+'&total='+ total+'&service_date='+ service_date+'&service_slot='+ slot+'&call_status='+ call_status+'&call_type='+ call_type+'&DOB='+ DOB+'&gender='+ gender+'&ownership='+ ownership+'&linen='+ linen,

          

            success: function(msg) {



                $.niftyNoty({

                    type: 'success',

                    container : 'floating',

                    title : 'Booking Confirmation',

                    message : 'New Booking has been created successfully!',

                    closeBtn : true,

                    timer : 750,

                    onHide:function(){



                        $("#loaderimg").remove();

                        $('html').removeClass('no-scroll');



                      if (document.referrer === "https://higi.ae/hybrid/landing_page_leads.php" || document.referrer === "https://higi.ae/hybrid/follow_up.php") {

                                window.location.href = document.referrer;

                            }else{

                                window.location.href='create_bookings.php';

                                }

                            }

                   

                        });



                    }



                });



            }
            
        
        // Annual Maintainence
        
        if(cleaning_type == 'AMC'){

            

            var materials = 'Yes';

            var has_linen = (linen == "Yes" ? true : false);

            var obj_num_beds = jQuery('#rooms_price option:checked');

            var num_beds_price = obj_num_beds.data('price');

            var num_beds_rooms = obj_num_beds.attr('value');

            var subtotal = num_beds_price;

            // var linen_charges = (has_linen ? linen_rate : 0);
            
            var linen_charges = 0;

            var extra = parseInt(jQuery('#extra_charges').val());

            var extra_charges = linen_charges;

            var vat_rate = 0.05;

            var vat = '0';

            var Total = subtotal + extra_charges;

            var total= parseFloat(Total).toFixed(2);

            

            var num_hours;

            var num_cleaners;



            if($("#is_linen").prop('checked') == true){

              var linen = 'Yes';

            }else {

                var linen = 'No';

            }



            var linen_rate = 35;



            if(num_beds_rooms == 'Studio' || num_beds_rooms == '1 BR'){

               

                linen_rate = 35;

            }



            if(num_beds_rooms == '2 BR'){

               

                linen_rate = 45;

            }



            if(num_beds_rooms == '3 BR' || num_beds_rooms == '4 BR'){

               

                linen_rate = 65;

            }

            

            



        if(building_type == 'apartment'){

            // alert(num_beds_rooms);

            if(num_beds_rooms == '1 BR' || num_beds_rooms == 'Studio'){

                num_hours = 4;

                num_cleaners = 1;

            }

            if(num_beds_rooms == '2 BR' ){

                num_hours = 4;

                num_cleaners = 2;

            }

            if(num_beds_rooms == '3 BR' ){

                num_hours = 4;

                num_cleaners = 2;

            }

            if(num_beds_rooms == '4 BR' ){

                num_hours = 8;

                num_cleaners = 3;

            }

            if(num_beds_rooms == '5 BR' ){

                num_hours = 8;

                num_cleaners = 4;

            }



        }

        if(building_type == 'villa'){



            // VILLA

            if(num_beds_rooms == '1 BR' ){

                num_hours = 4;

                num_cleaners = 2;

            }

            if(num_beds_rooms == '2 BR' ){

                num_hours = 4;

                num_cleaners = 3;

            }

            if(num_beds_rooms == '3 BR' ){

                num_hours = 8;

                num_cleaners = 5;

            }

            if(num_beds_rooms == '4 BR' ){

                num_hours = 8;

                num_cleaners = 5;

            }

            if(num_beds_rooms == '5 BR' ){

                num_hours = 8;

                num_cleaners = 6;

            }



        }



            $.ajax({

            type:"post",

            url: 'ajax/create_new_booking.php',

            data:'cust_name='+ cust_name+'&cust_mobile='+ cust_mobile +'&cust_email='+ cust_email +'&cust_address='+ cust_address+'&area='+ area+'&special_req='+ special_req+'&cleaningType='+ cleaning_type+'&buildingType='+ building_type+'&material='+ materials+'&source='+ source+'&num_bedrooms='+ num_beds_rooms+'&num_hours=' + num_hours + '&num_cleaners=' + num_cleaners + '&extra_charges='+ extra_charges+'&vat='+ vat+'&sub_total='+ subtotal+'&total='+ total+'&service_date='+ service_date+'&service_slot='+ slot+'&call_status='+ call_status+'&call_type='+ call_type+'&DOB='+ DOB+'&gender='+ gender+'&ownership='+ ownership+'&linen='+ linen,

          

            success: function(msg) {



                $.niftyNoty({

                    type: 'success',

                    container : 'floating',

                    title : 'Booking Confirmation',

                    message : 'New Booking has been created successfully!',

                    closeBtn : true,

                    timer : 750,

                    onHide:function(){



                        $("#loaderimg").remove();

                        $('html').removeClass('no-scroll');



                      if (document.referrer === "https://higi.ae/hybrid/landing_page_leads.php" || document.referrer === "https://higi.ae/hybrid/follow_up.php") {

                                window.location.href = document.referrer;

                            }else{

                                window.location.href='create_bookings.php';

                                }

                            }

                   

                        });



                    }



                });



            }
            
    
        // Electrician
        
         if(cleaning_type == 'Electrician'){



            if($("#is_material_electrician").prop('checked') == true){

              var materials = 'Yes';

            }else{

                var materials = 'No';

            }



            // if($("#is_balcony").prop('checked') == true){

            //   var balcony = 'Yes';

            // }else{

            //     var balcony = 'No';

            // }

            



            // if($("#is_linen").prop('checked') == true){

            //   var linen = 'Yes';

            // }else {

            //     var linen = 'No';

            // }

        

        var num_hours = parseInt(jQuery('#num_hours_tech').val());

        var num_cleaners = parseInt(jQuery('#num_technician').val());

        var num_beds = jQuery('#normal_bedroom').val();

        var has_material = (materials == "Yes" ? true : false);

        // var has_balcony = (balcony == "Yes" ? true : false);

        // var has_linen = (linen == "Yes" ? true : false);

        var rate = jQuery('#rate_tech').val();

        var Rate= parseFloat(rate).toFixed(2);

        var extra = parseInt(jQuery('#extra_charges').val());

        var extra_charges = extra > 0 ? extra : 0;

        // var balcony_rate = 35;

        // var linen_rate = 35;



        // if(num_beds == 'Studio' || num_beds == '1 BR'){

        //     balcony_rate = 35;

        //     linen_rate = 35;

        // }

        // if(num_beds == '2 BR'){

        //     balcony_rate = 45;

        //     linen_rate = 45;

        // }

        // if(num_beds == '3 BR' || num_beds == '4 BR' || num_beds == 'Penthouse'){

        //     balcony_rate = 65;

        //     linen_rate = 65;

        // }

        // var balcony_charges = (has_balcony ? balcony_rate : 0);

        // var linen_charges = (has_linen ? linen_rate : 0);

        var rate_material = 0;

        var material_charges = (has_material ? rate_material * num_hours * num_cleaners : 0);

        var subtotal = num_hours > 0 && num_cleaners > 0 ? (Rate * num_hours * num_cleaners) : 0;

        var vat_rate = 0.05;

        var vat = (subtotal + material_charges + extra_charges) * 0.05;

        var Total = subtotal + vat + material_charges + extra_charges;

        var total= parseFloat(Total).toFixed(2);



         $.ajax({

            type:"post",

            url: 'ajax/create_new_booking.php',

            data:'cust_name='+ cust_name+'&cust_mobile='+ cust_mobile+'&cust_email='+ cust_email+'&cust_address='+ cust_address+'&area='+ area+'&special_req='+ special_req+'&cleaningType='+ cleaning_type+'&num_bedrooms='+ num_beds+'&num_hours='+ num_hours+'&num_cleaners='+ num_cleaners+'&rate='+ rate+'&material='+ materials+'&material_charges='+ material_charges+'&source='+ source+'&extra_charges='+ extra_charges+'&cod='+ ''+'&vat='+ vat+'&sub_total='+ subtotal+'&total='+ total+'&service_date='+ service_date+'&service_slot='+ slot+'&balcony='+ balcony+'&linen='+ linen+'&call_status='+ call_status+'&call_type='+ call_type+'&DOB='+ DOB+'&gender='+ gender+'&ownership='+ ownership,

          

            success: function(msg) {



                $.niftyNoty({

                    type: 'success',

                    container : 'floating',

                    title : 'Booking Confirmation',

                    message : 'New Booking has been created successfully!',

                    closeBtn : true,

                    timer : 750,

                    onHide:function(){



                        $("#loaderimg").remove();

                        $('html').removeClass('no-scroll');

                        if (document.referrer === "https://higi.ae/hybrid/landing_page_leads.php" || document.referrer === "https://higi.ae/hybrid/follow_up.php") {

                                window.location.href = document.referrer;

                            }else{

                                window.location.href='create_bookings.php';

                        }

                    }

                   

                });

            }



        });



        }



        }         



    }      



    });



</script>