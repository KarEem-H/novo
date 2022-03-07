<?php


    include "../config/connection.php";

    $row_id=$_REQUEST['row_id'];

    $booking_details = mysqli_query($conn,"SELECT job_ref,cleaning_date,cleaning_time,num_of_cleaners,num_of_hours FROM table_booking WHERE id = '$row_id'");

    $row1=mysqli_fetch_assoc($booking_details);

    $cleaning_date = $row1['cleaning_date'];
    $cleaning_time = $row1['cleaning_time'];
    $job_ref = $row1['job_ref'];
    $num_of_cleaners = $row1['num_of_cleaners'];

    $num_of_hours = $row1['num_of_hours'];

    $trim_tail = str_replace(":00", "",$cleaning_time);
              
    $add_duration = $trim_tail + $num_of_hours . ":00";
    
    $start_time = date("g:i", strtotime($cleaning_time));
    $end_time = date("g:i", strtotime($add_duration));

    $task_start_time = date("G:i:s", strtotime($cleaning_time));
    $task_end_time = date("G:i:s", strtotime($add_duration));


    //$staff_assigned_list = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs LEFT OUTER JOIN table_assigned_task ON (table_staffs.staff_id = table_assigned_task.assigned_staff_id AND table_assigned_task.cleaning_date ='$cleaning_date' AND table_assigned_task.status = 'Assigned' AND table_assigned_task.start_time >= '$start_time' AND table_assigned_task.end_time <= '$end_time') WHERE table_staffs.staff_category = 'Cleaning' AND table_assigned_task.assigned_staff_id IS NULL");
    $staff_assigned_list = mysqli_query($conn,"SELECT DISTINCT staff_id,staff_name,staff_category FROM table_staffs LEFT OUTER JOIN table_assigned_task ON (table_staffs.staff_id = table_assigned_task.assigned_staff_id AND table_assigned_task.cleaning_date ='$cleaning_date' AND table_assigned_task.status = 'Assigned' AND table_assigned_task.start_time >= '$task_start_time' AND table_assigned_task.end_time <= '$task_end_time') WHERE table_staffs.staff_category = 'Cleaning'");

    
    while ($row2 = mysqli_fetch_array($staff_assigned_list, MYSQLI_ASSOC))
                            
      {
          $staffList[] = $row2;

      }

      $drivers = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs WHERE staff_category = 'Driver'");

      while ($row3 = mysqli_fetch_array($drivers, MYSQLI_ASSOC))
                            
      {
          $driverList[] = $row3;

      }

    //SENDING RESULT AS OPTION HTML LINE

    $data = "<div class='row'> <div class='col-md-12'> 
      <form class='form-horizontal'> <div class='form-group'> 
      <label class='col-md-3 control-label' for='name'>Crew</label> 
      <div class='col-md-8'> 
      <select id='staff_list' class='form-control input-md' multiple>";

        foreach($staffList as $staff_list){

          //$check_validation =  mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$cleaning_date' AND assigned_staff_id = '".$staff_list['staff_id']."' AND (start_time <= '$task_start_time' AND end_time >= '$task_end_time')");
         //$check_validation =  mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$cleaning_date' AND assigned_staff_id = '".$staff_list['staff_id']."' AND (start_time < '$task_start_time' AND end_time > '$task_start_time' OR start_time < '$task_end_time' AND end_time > '$task_end_time' OR start_time > '$task_start_time' AND start_time < '$task_end_time' OR end_time > '$task_start_time' AND end_time < '$task_end_time' OR start_time = '$task_start_time' AND end_time = '$task_end_time')  And status = 'assigned'");

         $check_validation =  mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$cleaning_date' AND assigned_staff_id = '".$staff_list['staff_id']."' AND (start_time < CAST('$task_start_time' AS time) AND end_time > CAST('$task_start_time' AS time) OR start_time < '$task_end_time' AND end_time > CAST('$task_end_time' AS time) OR start_time > CAST('$task_start_time' AS time) AND start_time < CAST('$task_end_time' AS time) OR end_time > CAST('$task_start_time' AS time) AND end_time < CAST('$task_end_time' AS time) OR start_time = CAST('$task_start_time' AS time) AND end_time = CAST('$task_end_time' AS time) OR start_time < CAST('$task_start_time' AS time) AND end_time = CAST('$task_end_time' AS time) OR start_time = CAST('$task_start_time' AS time) AND end_time > CAST('$task_end_time' AS time))  And status = 'assigned'");

          $validation_pass =  mysqli_num_rows($check_validation);
          if($validation_pass > 0){
             $disabled = 'disabled';
          }else{
            $disabled = '';
          }

            $data.= "<option value='".$staff_list['staff_id']."' ".$disabled.">".$staff_list['staff_name']."</option>";
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