<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>
<?php 


	include "../config/connection.php";

	$jobID=$_REQUEST['job_ref'];

	$booking_details = mysqli_query($conn,"SELECT t2.customer_mobile,t2.customer_id,t2.customer_name,t2.customer_email,t1.id,t1.cust_id,t1.job_ref,t1.cleaning_date,t1.cleaning_time,t1.num_of_hours,t1.num_of_cleaners,t1.service_type,t1.address,t1.area,t1.agent_name,t1.total,t1.materials,t1.special_req,t1.num_bedrooms,t1.source,t1.balcony,t1.building_type FROM (SELECT id, cust_id, job_ref, cleaning_date, cleaning_time, num_of_hours, num_of_cleaners, service_type, address, area, special_req, materials,num_bedrooms,balcony, source, agent_name,building_type, total FROM table_booking WHERE id = '$jobID') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile, customer_email FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");

	$row = mysqli_fetch_assoc($booking_details);
	
	$customer_ID = $row['cust_id'];
	$customer_name = $row['customer_name'];
	$customer_mobile = $row['customer_mobile'];
	$customer_email = $row['customer_email'];
	$service_type = $row['service_type'];
	$building_type = $row['building_type'];
	$service_date = $row['cleaning_date'];
	$service_time = $row['cleaning_time'];
	$area = $row['area'];
	$address = $row['address'];
	$materials = $row['materials'];
	$balcony = $row['balcony'];
	$source = $row['source'];
	$num_of_hours = $row['num_of_hours'];
	$num_of_cleaners = $row['num_of_cleaners'];
	$num_bedrooms = $row['num_bedrooms'];
	$special_req = $row['special_req'];
	$total = $row['total'];
	$agent_name = $row['agent_name'];

	if($source != 'Damac Living'){
	
		$timeslot = explode( ':', $service_time );
		$start_time = $timeslot[0].':00';
		$end_time = $start_time + $num_of_hours.':00';
		$final_slot = $start_time .' - '. $end_time;

	}else{

		$final_slot = $service_time;
	}


	echo '<div class="row">
	<div class="col-md-6"> 
	    <form class="form-horizontal">
	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Client Name</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$customer_name.'" readonly></input>
		    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
		    <input type="hidden" id="job_id" class="form-control input-md" value="'.$jobID.'">
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
		    <label class="col-md-12 control-label" for="name">Num of Hours</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$num_of_hours.'" readonly></input>
		    </div> 
		    </div>';
		    
			if($service_type == 'Deep Cleaning'){

		    echo '<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Building Type</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$building_type.'" readonly></input>
		    </div> 
		    </div>';

			}

		    echo '<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Material</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$materials.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Balcony</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$balcony.'" readonly></input>
		    </div> 
		    </div>
		    
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Linen</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$linen.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Area</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$area.'" readonly></input>
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
		    <label class="col-md-12 control-label" for="name">Num of Cleaners</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$num_of_cleaners.'" readonly></input>
		    </div> 
		    </div>
			    
			<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Num of Bedrooms</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$num_bedrooms.'" readonly></input>
		    </div> 
		    </div>
			<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Source</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$source.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Total</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$total.'" readonly></input>
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
	    
<textarea id="copy_me" style="height:0;position:absolute;z-index: -1;opacity: .01;">DATE OF SERVICE: '.$service_date.'
CLIENT NAME: '.$customer_name.'
CONTACT: '.$customer_mobile.'
LOCATION: '.$area.'
ADDRESS: '.$address.'
TIME: '.$final_slot.'
AMOUNT: '.$total.'
NO. OF CLEANERS: '.$num_of_cleaners.'
CLEANING MATERIALS: '.$materials.'
NOTES: '.$special_req.'
</textarea>
		    
		</form> 
	</div>
</div>';


?>