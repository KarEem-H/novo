<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>

<?php 

include "../config/connection.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$row_id = $_REQUEST['id'];

$sql = mysqli_query($conn,"SELECT quotation_id FROM `table_quotations` WHERE id = '$row_id'");

$row = mysqli_fetch_assoc($sql);
	
$quotation_id 	= $row['quotation_id'];

$sql1 = mysqli_query($conn,"SELECT start_date,start_time,end_time FROM `table_jobs` WHERE quotation_id = '$quotation_id'");

$row1 = mysqli_fetch_assoc($sql1);
	
$start_date = $row1['start_date'];
$start_time = $row1['start_time'];
$end_time = $row1['end_time'];



echo '<div class="row">
	<div class="col-md-12"> 
	    <form class="form-horizontal">
	    	<div class="col-md-12">
	    	<div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Date of Service</label> 
		    <div class="col-md-12 date"> 
		    <input type="text" class="form-control input-lg" id="start_date" value="'.$start_date.'">
		    <input type="hidden" class="form-control input-lg" id="Id" value="'.$row_id.'">
		    <input type="hidden" class="form-control input-lg" id="quotation_id" value="'.$quotation_id.'">
		    </div> 
		    </div>
	    	</div>
	    	<div class="col-md-12"> 
	    	<div class="col-md-6">
	    	<div class="form-group">
		    <label class="col-md-12 control-label" for="name">Start Time</label> 
		    <div class="col-md-12 date"> 
		    <select id="start_time" class="form-control input-md">
		    <option value="no-push" selected disabled>Start</option>
            <option value="8:00"'; echo $start_time == '8:00' ? 'selected' : ''; echo '>8 AM</option>
            <option value="9:00"'; echo $start_time == '9:00' ? 'selected' : ''; echo '>9 AM</option>
            <option value="10:00"'; echo $start_time == '10:00' ? 'selected' : ''; echo '>10 AM</option>
            <option value="11:00"'; echo $start_time == '11:00' ? 'selected' : ''; echo '>11 AM</option>
            <option value="12:00"'; echo $start_time == '12:00' ? 'selected' : ''; echo '>12 AM</option>
            <option value="13:00"'; echo $start_time == '13:00' ? 'selected' : ''; echo '>1 PM</option>
            <option value="14:00"'; echo $start_time == '14:00' ? 'selected' : ''; echo '>2 PM</option>
            <option value="15:00"'; echo $start_time == '15:00' ? 'selected' : ''; echo '>3 PM</option>
            <option value="16:00"'; echo $start_time == '16:00' ? 'selected' : ''; echo '>4 PM</option>
            <option value="17:00"'; echo $start_time == '17:00' ? 'selected' : ''; echo '>5 PM</option>
            <option value="18:00"'; echo $start_time == '18:00' ? 'selected' : ''; echo '>6 PM</option>
            <option value="19:00"'; echo $start_time == '19:00' ? 'selected' : ''; echo '>7 PM</option>
            <option value="20:00"'; echo $start_time == '20:00' ? 'selected' : ''; echo '>8 PM</option>
		    </select>
		    </div> 
		    </div>
		    </div>
		    <div class="col-md-6">
		    <div class="form-group">		     
		    <label class="col-md-12 control-label" for="name">End Time</label> 
		    <div class="col-md-12 date"> 
		    <select id="end_time" class="form-control input-md">
		    <option value="no-push" selected disabled>End</option>
            <option value="8:00"'; echo $start_time == '8:00' ? 'selected' : ''; echo '>8 AM</option>
            <option value="9:00"'; echo $start_time == '9:00' ? 'selected' : ''; echo '>9 AM</option>
            <option value="10:00"'; echo $start_time == '10:00' ? 'selected' : ''; echo '>10 AM</option>
            <option value="11:00"'; echo $start_time == '11:00' ? 'selected' : ''; echo '>11 AM</option>
            <option value="12:00"'; echo $start_time == '12:00' ? 'selected' : ''; echo '>12 AM</option>
            <option value="13:00"'; echo $start_time == '13:00' ? 'selected' : ''; echo '>1 PM</option>
            <option value="14:00"'; echo $start_time == '14:00' ? 'selected' : ''; echo '>2 PM</option>
            <option value="15:00"'; echo $start_time == '15:00' ? 'selected' : ''; echo '>3 PM</option>
            <option value="16:00"'; echo $start_time == '16:00' ? 'selected' : ''; echo '>4 PM</option>
            <option value="17:00"'; echo $start_time == '17:00' ? 'selected' : ''; echo '>5 PM</option>
            <option value="18:00"'; echo $start_time == '18:00' ? 'selected' : ''; echo '>6 PM</option>
            <option value="19:00"'; echo $start_time == '19:00' ? 'selected' : ''; echo '>7 PM</option>
            <option value="20:00"'; echo $start_time == '20:00' ? 'selected' : ''; echo '>8 PM</option>
		    </select>
		    </div> 
		    </div>
		    </div>
		    </div>
	    </form>
    </div>

</div>';

?>

<script type="text/javascript">

	var start = jQuery('#start_date').val();

	$("#start_date").datepicker({
       	dateFormat: 'dd-mm-yy', 
        onSelect: function (dateText) {
        	jQuery('#start_date').val(dateText);
        }
    });

    var date = new Date();
    date.setDate(date.getDate());

    var $datepicker = jQuery('#start_date');
    $datepicker.datepicker();
    $datepicker.datepicker('setDate', start);
</script>
