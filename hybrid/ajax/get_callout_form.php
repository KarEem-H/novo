<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>

<?php 

include "../config/connection.php";
include "../config/technician_list.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];

// $staff_assigned_list = mysqli_query($conn,"SELECT * FROM table_staffs");

// while ($row2 = mysqli_fetch_array($staff_assigned_list, MYSQLI_ASSOC))
                        
// {
//   $staffList[] = $row2;
// }


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
		    <label class="col-md-12 control-label" for="name">Source</label> 
		    <div class="col-md-12"> 
		    <select id="source" class="form-control input-md">
            <option value="Staycae">Staycae</option>
            <option value="Damac Leasing">Damac Leasing</option>
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
	    <label class="col-md-12 control-label" for="name">Staff Name</label> 
	    <div class="col-md-12"> 
	    <select id="technician" class="form-control input-lg" multiple>';
	    foreach($technicians as $technician){
	        echo "<option value='".$technician."'>".$technician."</option>";
	    }
	   	echo '</select>
	    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
	    </div> 
	    </div>
		    
		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Remarks/Comments</label> 
		    <div class="col-md-12"> 
		    	<textarea class="form-control" id="details" cols="3" style="width:100%"></textarea>
		    </div> 
	    </div>
    </form>
	</div>
</div>';

?>

<script type="text/javascript">
	$("#service_date").datepicker({
        // minDate: '0',
       
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
