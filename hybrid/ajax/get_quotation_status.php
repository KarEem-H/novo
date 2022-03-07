<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}

	.only_won{
		display: none;
	}
</style>

<?php 

include "../config/connection.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$row_id = $_REQUEST['id'];


echo '<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal">
		<div class="col-md-12"> 
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Status</label>
				<div class="col-md-6">
					<select id="quotation_status" class="form-control input-md">
						<option>Open</option>
						<option>Sent to Customer</option>
						<option>First Follow up</option>
						<option>Second Follow up</option>
						<option>Won</option>
						<option>Lost</option>
						<option>Cancelled</option>
					</select>
					<input type="hidden" id="Id" class="form-control input-md" value="'.$row_id.'">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Remark</label>
				<div class="col-md-6">
					<textarea id="agent_remarks" class="form-control input-md"></textarea>
				</div>
			</div>
			</div>
<div class="col-md-12 only_won"> 			
<div class="form-group"> 
	<label class="col-md-10 control-label" for="name">Date of Service</label> 
	<div class="col-md-10 date"> 
		<input type="text" class="form-control input-lg" id="service_date">
	</div> 
</div>
</div>
<div class="col-md-12 only_won"> 
	<div class="col-md-5">
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
	<div class="col-md-5">
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
		</form>
	</div>
	
</div>';

?>

<script type="text/javascript">
	$("#service_date").datepicker({
       
        onSelect: function (dateText) {
            // set date
            jQuery('#service_date').val(dateText);

        }
    });

    $('#quotation_status').on('change',function(){

    	var quotation_status = $('#quotation_status').val();

    	if(quotation_status == 'Won'){
    		$('.only_won').show();
    	}else{    		
    		$('.only_won').hide();
    	}

    });

    var date = new Date();
    date.setDate(date.getDate());

    var $datepicker = jQuery('#service_date');
    $datepicker.datepicker();
    $datepicker.datepicker('setDate', date);
</script>
