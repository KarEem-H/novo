<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>
<?php 


	include "../config/connection.php";

	$jobID=$_REQUEST['row_id'];

	$booking_details = mysqli_query($conn,"SELECT * from maintenance_jobs WHERE id='$jobID'");

	$row = mysqli_fetch_assoc($booking_details);
	
	$mid = $row['mid'];
	$customer_name = $row['tenant_full_name'];
	$customer_mobile = $row['tenant_phone'];
	$customer_email = $row['tenant_email'];
	$title = $row['title'];	
	$service_date = $row['available_date'];
	$service_time = $row['time_slot'];
	$property_name = $row['property_name'];
	$property_address = $row['property_address'];
	$job_desc = $row['details'];
	$source = $row['source'];
	$agent_name = $row['agent_name'];


	echo '<div class="row">
	<div class="col-md-6"> 
	    <form class="form-horizontal">

	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Client Name</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$customer_name.'" readonly></input>
		    <input type="hidden" id="job_id" class="form-control input-md" value="'.$jobID.'">
		    </div> 
		    </div>		    

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Available Date</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$service_date.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Source</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$source.'" readonly></input>
		    </div> 
		    </div>


		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Property Name</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$property_name.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Address</label> 
		    <div class="col-md-12"> 
		    <textarea class="form-control input-md" cols="3" style="width:100%" readonly>'.$property_address.'</textarea>
		    </div> 
		    </div>		    
		</form> 
	</div> 

	<div class="col-md-6"> 
	    <form class="form-horizontal">	    	
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Mobile</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$customer_mobile.'" readonly></input>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Time of Service</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$service_time.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Agent Name</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$agent_name.'" readonly></input>
		    </div> 
		    </div>		    

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Job Title</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$title.'" readonly></input>
		    </div> 
		    </div>		    

		    <div class="form-group"> 
    		<label class="col-md-12 control-label" for="name">Job Details</label> 
		    <div class="col-md-12"> 
	    	<textarea class="form-control" cols="3" style="width:100%" readonly>'.$job_desc.'</textarea>
		    </div> 
	    </div>

<textarea id="copy_me" style="height:0;position:absolute;z-index: -1;opacity: .01;">DATE OF SERVICE: '.$service_date.'
CLIENT NAME: '.$customer_name.'
CONTACT: '.$customer_mobile.'
PROPERTY NAME: '.$property_name.'
ADDRESS: '.$property_address.'
TIME: '.$service_time.'
JOB TITLE: '.$title.'
JOB DETAILS: '.$job_desc.'
</textarea>

		    
		</form> 
	</div>
</div>';



?>