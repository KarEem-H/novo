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
		    <label class="col-md-12 control-label" for="name">Staff ID</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="staff_id" class="form-control input-md">
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Staff Name</label> 
		    <div class="col-md-12"> 
		    <input type="text" id="staff_name" class="form-control input-md">
		    </div> 
		    </div>  
		    		    
		</form> 
	</div> 

	<div class="col-md-12">
	<form class="form-horizontal">

		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">User Role</label> 
	    <div class="col-md-12"> 
	    <select id="staff_category" class="form-control input-md">
	    <option value="Cleaning">Cleaning</option>
        <option value="Maintenance">Maintenance</option>
        <option value="Driver">Driver</option>
        </select>
	    </div> 
	    </div>
    </form>
	</div>
</div>';

?>
