
<style type="text/css">
	.form-horizontal .control-label{
		text-align: left !important;
	}
</style>
<?php 


	include "../config/connection.php";

	$jobID=$_REQUEST['job_ref'];

	$job_details = mysqli_query($conn,"SELECT cust_id,cleaning_date FROM `table_booking` WHERE `job_ref` = '$jobID'");

	$row=mysqli_fetch_assoc($job_details);

	
	$customer_ID = $row['cust_id'];
	$cleaning_Date = $row['cleaning_date'];
	$agent_name = $_SESSION['ADMIN_ID']['NAME'];

	$staff_assigned_list = mysqli_query($conn,"SELECT * FROM table_staffs");

    while ($row2 = mysqli_fetch_array($staff_assigned_list, MYSQLI_ASSOC))
                            
      {
          $staffList[] = $row2;

      }

	echo '<div class="row">
	<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Cleaner Name</label> 
	    <div class="col-md-12"> 
	    <select id="cleaner_name" class="form-control input-md" multiple>';
	    foreach($staffList as $staff_list){
	        echo "<option value='".$staff_list['staff_name']."'>".$staff_list['staff_name']."</option>";
	    }
	   	echo '</select>
	    <input type="hidden" id="cust_id" class="form-control input-md" value="'.$customer_ID.'">
	    <input type="hidden" id="job_id" class="form-control input-md" value="'.$jobID.'">
	    <input type="hidden" id="cleaning_date" class="form-control input-md" value="'.$cleaning_Date.'">
	    </div> 
    </div>
	<div class="col-md-6"> 
	    <form class="form-horizontal">
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Size of Apartment?</label> 
		    <div class="col-md-12"> 
		    <select id="size_of_apartment" class="form-control input-md">
		    <option>Studio</option>
		    <option>1 BR</option>
		    <option>2 BR</option>
		    <option>3 BR</option>
		    <option>4 BR</option>
		    <option>5 BR</option>
		    <option>Penthouse</option>
		    </select>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Cleaner On Time?</label> 
		    <div class="col-md-12"> 
		    <select id="cleaner_on_time" class="form-control input-md">
		    <option>Yes</option>
		    <option>No</option>
		    <option>Client not in home</option>
		    </select>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Good Attitude?(Smiling & approachable)</label> 
		    <div class="col-md-12"> 
		    <select id="attitude" class="form-control input-md">
		    <option>Yes</option>
		    <option>No</option>
		    <option>Client not in home</option>
		    </select>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Completed task within alotted time?</label> 
		    <div class="col-md-12"> 
		    <select id="completed_on_time" class="form-control input-md">
		    <option>Yes</option>
		    <option>No</option>
		    <option>Client not in home</option>
		    </select>
		    </div> 
		    </div>		    
		</form> 
	</div> 

	<div class="col-md-6"> 
	    <form class="form-horizontal">	    	
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Wearing Uniform?</label> 
		    <div class="col-md-12"> 
		    <select id="uniform" class="form-control input-md">
		    <option>Yes</option>
		    <option>No</option>
		    <option>Client not in home</option>
		    </select>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Asked & Followed Instructions?</label> 
		    <div class="col-md-12"> 
		    <select id="followed_instruction" class="form-control input-md">
		    <option>Yes</option>
		    <option>No</option>
		    <option>Client not in home</option>
		    </select>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Regular?</label> 
		    <div class="col-md-12"> 
		    <select id="regular" class="form-control input-md">
		    <option>Yes</option>
		    <option>No</option>
		    <option>Client not in home</option>
		    </select>
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-12 control-label" for="name">Rating(1-5, 5 as the highest)</label> 
		    <div class="col-md-12"> 
		    <input class="form-control input-md" id="rating"></input>
		    </div> 
		    </div>
		</form> 
	</div>

	<div class="col-md-12">
	<form class="form-horizontal">
		<div class="form-group"> 
	    <label class="col-md-12 control-label" for="name">Remarks</label> 
		    <div class="col-md-12"> 
		    	<textarea class="form-control" id="remarks" cols="3" style="width:100%"></textarea>
		    </div> 
	    </div>
    </form>
	</div>
</div>';


?>
<script type="text/javascript">

	$('#cleaner_name').chosen({width:'100%'});
	
</script>