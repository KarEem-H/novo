<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>

<?php 

include "../config/connection.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];

echo '<div class="row">
	<div class="col-md-6"> 
	    <form class="form-horizontal">

	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Date of Service</label> 
		    <div class="col-md-12 date"> 
		    <input type="text" class="form-control input-lg" id="service_date">
		    </div> 
		    </div> 

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Customer Name</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="cust_name" class="form-control input-md">
		    </div> 
		    </div>  

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Email</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="cust_email" class="form-control input-md">
		    </div> 
		    </div>   	
		    
		    
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Source</label> 
		    <div class="col-md-12"> 
		    <select id="source" class="form-control input-md">
            <option value="External Customer">External Customer</option>
            <option value="Staycae"'; echo $agent_name == 'Purple' ? 'selected' : ''; echo '>Staycae</option>
            <option value="Damac Leasing"'; echo $agent_name == 'Gina' ? 'selected' : ''; echo '>Damac Leasing</option>
		    </select>
		    </div> 
		    </div>
		    		    
		</form> 
	</div> 

	<div class="col-md-6"> 
	    <form class="form-horizontal">
	    	<div class="form-group">
		    <label class="col-md-12 control-label" for="name">Start Time</label> 
		    <div class="col-md-12 date"> 
		    <select id="start_time" class="form-control input-lg">
            <option value="Any Time" selected>Any Time</option>
            <option value="8:00" selected>8 AM</option>
            <option value="8:30">8:30 AM</option>
            <option value="9:00">9 AM</option>
            <option value="9:30">9:30 AM</option>
            <option value="10:00">10 AM</option>
            <option value="10:30">10:30 AM</option>
            <option value="11:00">11 AM</option>
            <option value="11:30">11:30 AM</option>
            <option value="12:00">12 PM</option>
            <option value="12:30">12:30 PM</option>
            <option value="13:00">1 PM</option>
            <option value="13:30">1:30 PM</option>
            <option value="14:00">2 PM</option>
            <option value="14:30">2:30 PM</option>
            <option value="15:00">3 PM</option>
            <option value="15:30">3:30 PM</option>
            <option value="16:00">4 PM</option>
            <option value="16:30">4:30 PM</option>
            <option value="17:00">5 PM</option>
            <option value="17:30">5:30 PM</option>
            <option value="18:00">6 PM</option>
            <option value="18:30">6:30 PM</option>
            <option value="19:00">7 PM</option>
            <option value="19:30">7:30 PM</option>
            <option value="20:00">8 PM</option>
		    </select>
		    </div> 
		    </div>	

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Mobile</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="cust_mobile" class="form-control input-md">
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Category</label> 
		    <div class="col-md-12"> 
		    <select id="category" class="form-control input-md">
		    <option value="General Maintenance">General Maintenance</option>
            <option value="Air Conditioner">Air Conditioner</option>
            <option value="Plumbing">Plumbing</option>
            <option value="Electrical">Electrical</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Gardening/Landscaping">Gardening/Landscaping</option>
            <option value="Masonry">Masonry</option>
            <option value="Appliances">Appliances</option>
            <option value="Joinery">Joinery</option>
            <option value="Others">Others</option>
		    </select>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Unit Number</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="unit_number" class="form-control input-md">
		    </div> 
		    </div>

	    </form>
    </div>

	<div class="col-md-12">
	<form class="form-horizontal">

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Building</label> 
	    <div class="col-md-12"> 
	    <input type="text" id="building_name" class="form-control input-md">
	    </div> 
	    </div>

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Address</label> 
	    <div class="col-md-12"> 
	    <textarea class="form-control input-md" cols="3" style="width:100%" id="address"></textarea>
	    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
	    </div> 
	    </div>

	    <div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Title (Short Description of your problem)</label> 
	    <div class="col-md-12"> 
	    <input type="text" id="job_title" class="form-control input-md">
	    </div> 
	    </div>
		    
		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Job Description</label> 
		    <div class="col-md-12"> 
		    	<textarea class="form-control" id="job_description" cols="3" style="width:100%"></textarea>
		    </div> 
	    </div>
    </form>
	</div>
</div>';

?>

<script type="text/javascript">
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
</script>

<script type="text/javascript">

	$('#technician').chosen({width:'100%'});
	
</script>
