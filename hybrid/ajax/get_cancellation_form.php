<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>

<?php 

include "../config/connection.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];


$staff_assigned_list = mysqli_query($conn,"SELECT * FROM table_staffs");

while ($row2 = mysqli_fetch_array($staff_assigned_list, MYSQLI_ASSOC))
                        
{
  $staffList[] = $row2;
}


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
		    <input type="text" id="customer_name" class="form-control input-md">
		    </div> 
		    </div>
		    
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Customer Mobile</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="customer_mobile" class="form-control input-md">
		    </div> 
		    </div>

		    <div class="form-group">
		    <label class="col-md-12 control-label" for="name">Customer Type</label> 
		    <div class="col-md-12 date"> 
		    <select id="customer_type" class="form-control input-md">
            <option value="Recurring" selected>Recurring</option>
            <option value="Damac">Damac</option>
            <option value="WS Contract">WS Contract</option>
		    </select>
		    </div> 
		    </div>
		    		    
		</form> 
	</div> 

	<div class="col-md-6"> 
	    <form class="form-horizontal">

	    	<div class="col-md-12"> 
	    	<div class="col-md-6">
	    	<div class="form-group">
		    <label class="col-md-12 control-label" for="name">Start Time</label> 
		    <div class="col-md-12 date"> 
		    <select id="start_time" class="form-control input-md">
		    <option value="no-push" selected disabled>Start</option>
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
		    <div class="col-md-6">
		    <div class="form-group">		     
		    <label class="col-md-12 control-label" for="name">End Time</label> 
		    <div class="col-md-12 date"> 
		    <select id="end_time" class="form-control input-md">
		    <option value="no-push" selected disabled>End</option>
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

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Location</label> 
		    <div class="col-md-12"> 
		    <textarea class="form-control" id="customer_address" cols="3" style="width:100%"></textarea>
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Job Amount</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="job_amount" class="form-control input-md">
		    </div> 
		    </div>

		    <div class="form-group">
		    <label class="col-md-12 control-label" for="name">Rescheduled?</label> 
		    <div class="col-md-12 date"> 
		    <select id="rescheduled" class="form-control input-md">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
		    </select>
		    </div> 
		    </div>

	    </form>
    </div>

	<div class="col-md-12">
	<form class="form-horizontal">

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Staff Name</label> 
	    <div class="col-md-12"> 
	    <select id="cleaner_name" class="form-control input-md" multiple>';
	    foreach($staffList as $staff_list){
	        echo "<option value='".$staff_list['staff_name']."'>".$staff_list['staff_name']."</option>";
	    }
	   	echo '</select>
	    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
	    </div> 
	    </div>
		    
		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Reason/Remarks</label> 
		    <div class="col-md-12"> 
		    	<textarea class="form-control" id="reason" cols="3" style="width:100%"></textarea>
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

	$('#cleaner_name').chosen({width:'100%'});
	
</script>
