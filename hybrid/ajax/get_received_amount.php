<?php 


	include "../config/connection.php";

	$job_id=$_REQUEST['job_id'];

	$receipt_details = mysqli_query($conn,"SELECT job_ref,total FROM table_booking WHERE `job_ref` = '$job_id'");

	$row1=mysqli_fetch_assoc($receipt_details);

	
	$total_amount_received = $row1['total'];
	$job_ref = $row1['job_ref'];

	echo '<div class="row">
	<div class="col-md-12"> 
	    <form class="form-horizontal">
	    	<div class="form-group"> 
		    <label class="col-md-4 control-label" for="name">Receipt Amount</label> 
		    <div class="col-md-6"> 
		    <input type="text" id="receipt_amount" class="form-control input-md" value="'.$total_amount_received.'">
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-4 control-label" for="name">Payment Mode</label> 
		    <div class="col-md-6"> 
		    <select id="payment_type" class="form-control input-md">
		    <option>Cash</option>
		    <option>Card</option>
		    <option>Bank Transfer</option>
		    <option>Payfort Link</option>
		    </select>
		    <input type="hidden" id="job_ref" class="form-control input-md" value="'.$job_ref.'">
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-4 control-label" for="name">Date of Payment</label> 
		    <div class="col-md-4 date"> 
		    <input type="text" class="form-control input-lg" id="payment_date">
		    </div> 
		    </div> 
		    <div class="form-group"> 
		    <label class="col-md-4 control-label" for="name">Receipt ID/Transaction ID</label> 
		    <div class="col-md-6"> 
		    <input type="text" id="receipt_ref" class="form-control input-md" value="">
		    </div> 
		    </div>
		    <div class="form-group"> 
		    <label class="col-md-4 control-label" for="name">Remarks/Notes</label> 
		    <div class="col-md-6"> 
		    <textarea id="finance_remarks" cols="3" style="width:100%"></textarea>
		    </div> 
		    </div>
		</form> 
	</div> 
</div>';


?>

<script type="text/javascript">
	$("#payment_date").datepicker({
       
        onSelect: function (dateText) {
            // set date
            jQuery('#payment_date').val(dateText);

        }
    });

    var date = new Date();
    date.setDate(date.getDate());

    var $datepicker = jQuery('#payment_date');
    $datepicker.datepicker();
    $datepicker.datepicker('setDate', date);
</script>