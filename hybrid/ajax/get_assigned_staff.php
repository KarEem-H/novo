<?php


    include "../config/connection.php";

    $row_id=$_REQUEST['row_id'];

    $booking_details = mysqli_query($conn,"SELECT job_ref,cleaning_date,cleaning_time,num_of_cleaners FROM table_booking WHERE id = '$row_id'");

    $bk_details=mysqli_fetch_assoc($booking_details);

    $cleaning_date = $bk_details['cleaning_date'];
    $cleaning_time = $bk_details['cleaning_time'];
    $job_ref = $bk_details['job_ref'];
    $num_of_cleaners = $bk_details['num_of_cleaners'];

    $staff_assigned_list = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs LEFT OUTER JOIN table_assigned_task ON (table_staffs.staff_id = table_assigned_task.assigned_staff_id AND table_assigned_task.cleaning_date ='$cleaning_date' AND table_assigned_task.cleaning_slot ='$cleaning_time' AND table_assigned_task.status = 'Assigned') WHERE table_staffs.staff_category = 'Cleaning' AND table_assigned_task.assigned_staff_id IS NULL");

    while ($get_staffs = mysqli_fetch_array($staff_assigned_list, MYSQLI_ASSOC))
                            
      {
          $staffList[] = $get_staffs;

      }

      

      $drivers = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs WHERE staff_category = 'Driver'");

      while ($get_drivers = mysqli_fetch_array($drivers, MYSQLI_ASSOC))
                            
      {
          $driverList[] = $get_drivers;

      }

    //SENDING RESULT AS OPTION HTML LINE

    $data = "<div class='row'> <div class='col-md-12'> 
      <form class='form-horizontal'> <div class='form-group'> 
      <label class='col-md-3 control-label' for='name'>Crew</label> 
      <div class='col-md-8'> 
      <select id='staff_list' class='form-control input-md' multiple>";

        foreach($staffList as $staff_list){
            $data.= "<option value='".$staff_list['staff_id']."'>".$staff_list['staff_name']."</option>";
        }

      $data.= "</select>
      <input type='hidden' id='bookingid' class='form-control input-md' value='$job_ref'>
      <input type='hidden' id='num_of_crew' class='form-control input-md' value='$num_of_cleaners'>
      </div> 
      </div>

      <div class='form-group'> 
      <label class='col-md-3 control-label' for='name'>Driver</label> 
      <div class='col-md-8'> 
      <select id='driver_list' class='form-control input-md' multiple>";

        foreach($driverList as $driver_list){
            $data.= "<option value='".$driver_list['staff_id']."'>".$driver_list['staff_name']."</option>";
        }

      $data.= "</select>
      </div> 
      </div>

      </form>
      </div> 
      </div>";

echo $data;
   

?>
<script type="text/javascript">

  $('#staff_list').chosen({width:'100%'});
  $('#driver_list').chosen({width:'100%'});

// SELECT STAFF VALIDATION
  $("#staff_list").change(function(event) {
  var selectedValue = $(this).find('option:selected').val();
    $num_crew = $('#num_of_crew').val();
    $staff_count = $("#staff_list").val().length;
    if ($num_crew == $staff_count) {
      $("#staff_list").find('option:not(:selected)').attr('disabled','disabled');
      $("#staff_list").trigger("chosen:updated");
    }       
});

  // REMOVE SELECTED STAFF VALIDATION

   $("#staff_list").chosen().change(function(e, params){
    if(params.deselected){
      $("#staff_list").find('option:not(:selected)').attr("disabled",false);
      $("#staff_list").trigger("chosen:updated");      
    }
   });


// SELECT DRIVER VALIDATION
  $("#driver_list").change(function(event) {
  var selectedValue = $(this).find('option:selected').val();
    $num_crew = '1';
    $staff_count = $("#driver_list").val().length;
    if ($num_crew == $staff_count) {
      $("#driver_list").find('option:not(:selected)').attr('disabled','disabled');
      $("#driver_list").trigger("chosen:updated");
    }       
});

  // REMOVE SELECTED DRIVER VALIDATION

   $("#driver_list").chosen().change(function(e, params){
    if(params.deselected){
      $("#driver_list").find('option:not(:selected)').attr("disabled",false);
      $("#driver_list").trigger("chosen:updated");      
    }
   });

  
</script>