<?php 

	include "../config/connection.php";

	$inspection_id=$_REQUEST['inspection_id'];

	$booking_details = mysqli_query($conn,"SELECT id, inspection_id, created_date, cust_name, cust_mobile, cust_email, area, cust_address, service, service_date, start_time, technician, notes, agent_name, inspection_status FROM `table_inspection` WHERE id='$inspection_id'");

	$row = mysqli_fetch_assoc($booking_details);
	
	$customer_name = $row['cust_name'];
	$customer_mobile = $row['cust_mobile'];
	$customer_email = $row['cust_email'];
	$service_type = $row['service'];
	$service_date = $row['service_date'];
	$service_time = $row['start_time'];
	$address = $row['cust_address'];
	$special_req = $row['notes'];
	$technician = $row['technician'];
	$agent_name = $row['agent_name'];

	echo '<div class="row">
	<div class="col-md-6"> 
	    <form class="form-horizontal">
	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Client Name</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$customer_name.'" readonly></input>
		    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
		    <input type="hidden" id="row_id" class="form-control input-md" value="'.$inspection_id.'">
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Email</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$customer_email.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Cleaning Date</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$service_date.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Technician</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$technician.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Address</label> 
		    <div class="col-md-12"> 
		    <textarea class="form-control input-md" cols="3" style="width:100%" readonly>'.$address.'</textarea>
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
		    <label class="col-md-12 control-label" for="name">Service Type</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$service_type.'" readonly></input>
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
    		<label class="col-md-12 control-label" for="name">Additional Remark</label> 
		    <div class="col-md-12"> 
	    	<textarea class="form-control" cols="3" style="width:100%" readonly>'.$special_req.'</textarea>
		    </div> 
	    </div>
	    
<textarea id="copy_text" style="height:0;position:absolute;z-index: -1;opacity: .01;">DATE OF INSPECTION: '.$service_date.'
CLIENT NAME: '.$customer_name.'
CONTACT: '.$customer_mobile.'
ADDRESS: '.$address.'
TIME: '.$service_time.'
SERVICE: '.$service_type.'
NOTES: '.$special_req.'
</textarea> 
		</form> 
	</div>
</div>';


?>