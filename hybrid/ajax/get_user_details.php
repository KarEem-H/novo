<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>

<?php 

include "../config/connection.php";

$agent_name = $_SESSION['ADMIN_ID']['NAME'];


echo '<div class="row">
	<div class="col-md-12"> 
	    <form class="form-horizontal">
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">User Name</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="agent_name" class="form-control input-md">
		    </div> 
		    </div>

		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Password</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="agent_password" class="form-control input-md">
		    </div> 
		    </div>
		    
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Agent Extension</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="agent_extension" class="form-control input-md">
		    </div> 
		    </div>
		    		    
		</form> 
	</div> 

	<div class="col-md-12">
	<form class="form-horizontal">

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">User Role</label> 
	    <div class="col-md-12"> 
	    <select id="agent_role" class="form-control input-md">
	    <option value="Administrator">Administrator</option>
        <option value="Telesales">Telesales</option>
        <option value="Scheduler">Scheduler</option>
        <option value="Coordinator">Coordinator</option>
        <option value="Payment Collector">Payment Collector</option>
        <option value="Staycae">Staycae</option>
        </select>
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
