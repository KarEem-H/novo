<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>

<?php 

include "../config/connection.php";
include "../config/technician_list.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$callout_id = $_REQUEST['id'];

$booking_details = mysqli_query($conn,"SELECT * FROM `table_callouts` WHERE id='$callout_id'");

$row = mysqli_fetch_assoc($booking_details);

$servicedate 		= $row['service_date'];
$start_time 		= $row['start_time'];
$unit 				= $row['unit'];
$building 			= $row['building'];
$source 			= $row['source'];
$status 			= $row['status'];
// $selected_technician = $row['technician'];

if( $row['technician'] ):

	$all_tech =  explode(',', $row['technician']);

endif;

$agent_name 		= $row['agent_name'];
$details 		    = $row['details'];


echo '<div class="row">
	<div class="col-md-6"> 
	    <form class="form-horizontal">

	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Date of Service</label> 
		    <div class="col-md-12 date"> 
		    <input type="text" class="form-control input-lg" id="service_date" value="'.$servicedate.'">
		    </div> 
		    </div>
		    
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Source</label> 
		    <div class="col-md-12"> 
		    <select id="source" class="form-control input-md">
            <option value="Staycae"'; echo $source == 'Staycae' ? 'selected' : ''; echo '>Staycae</option>
            <option value="Damac Leasing"'; echo $source == 'Damac Leasing' ? 'selected' : ''; echo '>Damac Leasing</option>
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
    		    <option value="no-push" disabled>Start</option>
    			<option value="8:00"'; echo $start_time == '8:00' ? 'selected' : ''; echo '>8 AM</option>
    			<option value="8:30"'; echo $start_time == '8:30' ? 'selected' : ''; echo '>8:30 AM</option>
    			<option value="9:00"'; echo $start_time == '9:00' ? 'selected' : ''; echo '>9 AM</option>
    			<option value="9:30"'; echo $start_time == '9:30' ? 'selected' : ''; echo '>9:30 AM</option>
    			<option value="10:00"'; echo $start_time == '10:00' ? 'selected' : ''; echo '>10 AM</option>
    			<option value="10:30"'; echo $start_time == '10:30' ? 'selected' : ''; echo '>10:30 AM</option>
    			<option value="11:00"'; echo $start_time == '11:00' ? 'selected' : ''; echo '>11 AM</option>
    			<option value="11:30"'; echo $start_time == '11:30' ? 'selected' : ''; echo '>11:30 AM</option>
    			<option value="12:00"'; echo $start_time == '12:00' ? 'selected' : ''; echo '>12 PM</option>
    			<option value="12:30"'; echo $start_time == '12:30' ? 'selected' : ''; echo '>12:30 PM</option>
    			<option value="13:00"'; echo $start_time == '13:00' ? 'selected' : ''; echo '>1 PM</option>
    			<option value="13:30"'; echo $start_time == '13:30' ? 'selected' : ''; echo '>1:30 PM</option>
    			<option value="14:00"'; echo $start_time == '14:00' ? 'selected' : ''; echo '>2 PM</option>
    			<option value="14:30"'; echo $start_time == '14:30' ? 'selected' : ''; echo '>2:30 PM</option>
    			<option value="15:00"'; echo $start_time == '15:00' ? 'selected' : ''; echo '>3 PM</option>
    			<option value="15:30"'; echo $start_time == '15:30' ? 'selected' : ''; echo '>3:30 PM</option>
    			<option value="16:00"'; echo $start_time == '16:00' ? 'selected' : ''; echo '>4 PM</option>
    			<option value="16:30"'; echo $start_time == '16:30' ? 'selected' : ''; echo '>4:30 PM</option>
    			<option value="17:00"'; echo $start_time == '17:00' ? 'selected' : ''; echo '>5 PM</option>
    			<option value="17:30"'; echo $start_time == '17:30' ? 'selected' : ''; echo '>5:30 PM</option>
    			<option value="18:00"'; echo $start_time == '18:00' ? 'selected' : ''; echo '>6 PM</option>
    			<option value="18:30"'; echo $start_time == '18:30' ? 'selected' : ''; echo '>6:30 PM</option>
    			<option value="19:00"'; echo $start_time == '19:00' ? 'selected' : ''; echo '>7 PM</option>
    			<option value="19:30"'; echo $start_time == '19:30' ? 'selected' : ''; echo '>7:30 PM</option>
    			<option value="20:00"'; echo $start_time == '20:00' ? 'selected' : ''; echo '>8 PM</option>
		    </select>
		    </div> 
		    </div>	

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Unit Number</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="unit_number" class="form-control input-md" value="'. $unit .'">
		    </div> 
		    </div>

	    </form>
    </div>

	<div class="col-md-12">
	<form class="form-horizontal">

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Building</label> 
	    <div class="col-md-12"> 
	    <input type="text" id="building_name" class="form-control input-md" value="'.$building.'">
	    </div> 
	    </div>

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Staff Name</label> 
	    <div class="col-md-12"> 
	    <select id="technician" class="form-control input-lg" multiple>';
	    foreach($all_tech as $val){
	    
	    	echo "<option value='".$val."' selected>".$val."</option>";
		
		}

	    foreach($technicians as $technician){


	        echo "<option value='".$technician."'>".$technician."</option>";
	    }
	   	echo '</select>
	    <input type="hidden" id="Id" class="form-control input-md" value="'.$callout_id.'">
	    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
	    <input type="hidden" id="status" class="form-control input-md" value="'.$status.'">
	    </div> 
	    </div>
		    
		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Remarks/Comments</label> 
		    <div class="col-md-12"> 
		    	<textarea class="form-control" id="details" cols="3" style="width:100%">'.$details.'</textarea>
		    </div> 
	    </div>
    </form>
	</div>
</div>';

?>

<script type="text/javascript">

	var start = jQuery('#service_date').val();

	$("#service_date").datepicker({
		dateFormat: 'dd-mm-yy',      
        onSelect: function (dateText) {
            // set date
            jQuery('#service_date').val(dateText);

        }
    });

    var date = new Date();
    date.setDate(date.getDate());

    var $datepicker = jQuery('#service_date');
    $datepicker.datepicker();
    $datepicker.datepicker('setDate', start);
</script>

<script type="text/javascript">

	$('#technician').chosen({width:'100%'});
	
</script>
