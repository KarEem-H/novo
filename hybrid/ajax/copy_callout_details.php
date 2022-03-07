<?php 

	include "../config/connection.php";

	$Id=$_REQUEST['id'];

	$booking_details = mysqli_query($conn,"SELECT * FROM `table_callouts` WHERE id='$Id'");

	$row = mysqli_fetch_assoc($booking_details);
	
	$servicedate 		= $row['service_date'];
	$start_time 		= $row['start_time'];
	$unit 				= $row['unit'];
	$building 			= $row['building'];
	$source 			= $row['source'];
	$technician 		= $row['technician'];
	$agent_name 		= $row['agent_name'];
	$details 		    = $row['details'];

	echo '<div class="row">
	<div class="col-md-6"> 
	    <form class="form-horizontal">
	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Unit</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$unit.'" readonly></input>
		    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
		    <input type="hidden" id="Id" class="form-control input-md" value="'.$id.'">
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Callout Date</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$servicedate.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Source</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$source.'" readonly></input>
		    </div> 
		    </div>	    
		</form> 
	</div> 

	<div class="col-md-6"> 
	    <form class="form-horizontal">	    	
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Building</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$building.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Start Time</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$start_time.'" readonly></input>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Technician</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" value="'.$technician.'" readonly></input>
		    </div> 
		    </div>
			
		</form> 
	</div>
	<div class="form-group"> 
			<label class="col-md-12 control-label" for="name">Comments</label> 
		    <div class="col-md-12"> 
			<textarea class="form-control" cols="3" style="width:100%" readonly>'.$details.'</textarea>
		    </div> 
			</div>
	<textarea id="copy_text" style="height:0;position:absolute;z-index: -1;opacity: .01;">DATE OF CALLOUT: '.$servicedate.'
TIME: '.$start_time.'
SOURCE: '.$source.'
UNIT: '.$unit.'
BUILDING: '.$building.'
TECHNICIAN: '.$technician.'
NOTES: '.$details.'
</textarea> 
</div>';


?>