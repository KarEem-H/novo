<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>
<link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css" rel="stylesheet">

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
		    <label class="col-md-12 control-label" for="name">Customer Name</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="customer_name" class="form-control input-md">
		    </div> 
		    </div>

		    <div class="form-group">
		    <label class="col-md-12 control-label" for="name">Service Type</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="service_type" class="form-control input-md">
		    </div> 
		    </div>		    

		    <div class="form-group">
		    <label class="col-md-12 control-label" for="name">Department</label> 
		    <div class="col-md-12 select"> 
		    <select id="department" class="select form-control input-md">
	            <option value="Telesales" selected>Telesales</option>
	            <option value="Driver">Driver</option>
	            <option value="Cleaners">Cleaners</option>
	            <option value="Scheduler">Scheduler</option>
	            <option value="Coordinator">Coordinator</option>
	            <option value="Techinician">Techinician</option>
		    </select>
		    </div> 
		    </div>	    
		</form> 
	</div> 

	<div class="col-md-6"> 
	    <form class="form-horizontal">
    	<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Customer Mobile</label> 
	    <div class="col-md-12"> 
	    <input type="text" id="customer_mobile" class="form-control input-md">
	    </div> 
	    </div>  

	    <div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Job Amount</label> 
	    <div class="col-md-12"> 
	    <input type="text" id="job_amount" class="form-control input-md">
	    </div> 
	    </div>

	    <div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Date of Service</label> 
	    <div class="col-md-12 date"> 
	    <input type="text" class="form-control input-lg" id="service_date">
	    </div> 
	    </div>

	    </form>
    </div>

    <div class="col-md-12">
	<form class="form-horizontal">
	<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Staff Name</label> 
	    <div class="col-md-12"> 
	    <input type="text" class="form-control input-lg" id="staff_name" data-role="tagsinput">
	    <input type="hidden" id="agent_name" class="form-control input-md" value="'.$agent_name.'">
	    
	    </div> 
    </div>
    </form>
    </div>

	<div class="col-md-12">
	<form class="form-horizontal">
	<div class="form-group"> 
    <label class="col-md-12 control-label" for="name">Issue</label> 
    <div class="col-md-12"> 
    <textarea class="form-control" id="issue" cols="3" style="width:100%"></textarea>
    </div> 
    </div>
	</form>
	</div>

	<div class="col-md-12">
	<form class="form-horizontal">
		<div class="form-group">
	    <label class="col-md-12 control-label" for="name">Action Taken/Comments</label> 
	    <div class="col-md-12"> 
	    <textarea class="form-control" id="comments" cols="3" style="width:100%"></textarea>
	    </div> 
	    </div>
    </form>
	</div>
</div>';

?>
<script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
	$("#service_date").datepicker({
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
