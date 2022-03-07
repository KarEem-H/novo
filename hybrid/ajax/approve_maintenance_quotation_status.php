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
$mid 	= $_REQUEST['mid'];


echo '<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal">		
			<div class="col-md-12"> 			
			<div class="form-group"> 
				<label class="col-md-10 control-label" for="name">Date of Service</label> 
				<div class="col-md-12 date"> 
					<input type="text" class="form-control input-lg" id="service_date">
				</div> 
			</div>
			</div>
			<div class="col-md-12"> 
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-12 control-label" for="name">Start Time</label> 
						<div class="col-md-12 date"> 
							<select id="start_time" class="form-control input-md">
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
				</div>
				<div class="col-md-6">
					<div class="form-group">		     
						<label class="col-md-12 control-label" for="name">End Time</label> 
						<div class="col-md-12 date"> 
							<select id="end_time" class="form-control input-md">
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
				</div>
				<div class="form-group">
					<label class="col-md-10 control-label" for="name">Remark</label>
					<div class="col-md-12">
						<textarea id="agent_remarks" class="form-control input-md"></textarea>
					</div>
				</div>
				<input type="hidden" id="Id" class="form-control input-md" value="'.$row_id.'">
				<input type="hidden" id="mid" class="form-control input-md" value="'.$mid.'">
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
