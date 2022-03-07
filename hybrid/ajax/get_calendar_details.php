<?php 

include "../config/connection.php";

$row_id = $_REQUEST['row_id'];
$staff = $_REQUEST['staff_id'];

$sql2 = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE id = '$row_id' and assigned_staff_id='$staff'");
$row2=mysqli_fetch_assoc($sql2);

$booking = $row2['booking_id'];
$staff_name = $row2['assigned_staff_name'];
$assign_date = $row2['cleaning_date'];
$assign_slot = $row2['cleaning_slot'];

// GET ASSIGNED CLEANERS


$start_time = $row['start_time'];
$end_time = $row['end_time'];
$cleaning_date = $assign_date;



$get_asg_staffs = mysqli_query($conn,"SELECT assigned_staff_id,assigned_staff_name FROM table_assigned_task WHERE booking_id = '$booking' AND status = 'Assigned'");

 while ($get_assigned_staffs = mysqli_fetch_array($get_asg_staffs, MYSQLI_ASSOC))
                            
      {
          $old_c_list[] = $get_assigned_staffs;

      }
$old_crew_names = array();
foreach($old_c_list as $old_staff_list){

  

    $fck .= "<option selected value='".$old_staff_list['assigned_staff_id']."'>".$old_staff_list['assigned_staff_name']."</option>";

    $old_crew_names[] = $old_staff_list['assigned_staff_id'];
}

    $old_crew = implode(",",$old_crew_names);
// END ASSIGNED CLEANERS


$sql1 = mysqli_query($conn,"SELECT t2.customer_name,t2.customer_mobile,t1.area,t1.address,t1.total,t1.cleaners,t1.driver,t1.service_type,t1.num_of_hours,t1.num_of_cleaners,t1.cleaning_date,t1.cleaning_time FROM (SELECT cust_id,area,address,total,cleaners,driver,service_type,num_of_hours,num_of_cleaners,cleaning_date,cleaning_time FROM table_booking WHERE job_ref = '$booking') t1 LEFT JOIN (SELECT customer_id,customer_name,customer_mobile FROM table_contacts) t2 ON (t2.customer_id = t1.cust_id)");

$row1=mysqli_fetch_assoc($sql1);

    $cust_mob = $row1['customer_mobile'];
    $cust_name = $row1['customer_name'];
    $cust_address = $row1['address'];
    $cust_region = $row1['area'];
    $total = $row1['total'];
    $cleaners = $row1['cleaners'];
    $driver_name = $row1['driver'];
    $service_type = $row1['service_type'];
    $num_of_hours = $row1['num_of_hours'];
    $num_of_cleaners = $row1['num_of_cleaners'];
    $cleaning_date = $row1['cleaning_date'];
    $cleaning_time = $row1['cleaning_time'];

    $trim_tail = str_replace(":00", "",$cleaning_time);
              
    $add_duration = $trim_tail + $num_of_hours . ":00";
    $start_time = date("g:i", strtotime($cleaning_time));
    $end_time = date("g:i", strtotime($add_duration));

    $task_start_time = date("G:i:s", strtotime($cleaning_time));
    $task_end_time = date("G:i:s", strtotime($add_duration));

    $final_slot = $start_time .' - '. $end_time;


    $staff_assigned_list = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs LEFT OUTER JOIN table_assigned_task ON (table_staffs.staff_id = table_assigned_task.assigned_staff_id AND table_assigned_task.cleaning_date ='$cleaning_date' AND table_assigned_task.status = 'Assigned' AND table_assigned_task.start_time >= '$start_time' AND table_assigned_task.end_time <= '$end_time') WHERE table_staffs.staff_category = 'Cleaning'");

    while ($get_staffs = mysqli_fetch_array($staff_assigned_list, MYSQLI_ASSOC))
                            
      {
          $staffList[] = $get_staffs;

      }

      $drivers = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs WHERE staff_category = 'Driver' AND staff_name !='$driver_name'");

      while ($get_drivers = mysqli_fetch_array($drivers, MYSQLI_ASSOC))
                            
      {
          $driverList[] = $get_drivers;

      }

$data = '<style>.chosen-container-multi .chosen-choices{min-height:42px;}.chosen-container-multi .chosen-choices li.search-choice{min-height: 29px;padding-top: 6px;}.vertical-center{position:absolute;left:45%}</style><div class="tab-base">
                      <ul class="nav nav-tabs">
                          <li class="active">
                              <a data-toggle="tab" href="#demo-lft-tab-1">Customer Details</a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#demo-lft-tab-2">Service Details</a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#demo-lft-tab-3">Reschedule</a>
                          </li>
                      </ul>
          
                      <!--Tabs Content-->
                      <div class="tab-content">
                          <div id="demo-lft-tab-1" class="tab-pane fade active in">
                              <div class="row">                                
                                <div class="list-group bg-trans mar-no">
                                    <div class="col-sm-4">
                                      <a class="list-group-item" href="#"> <strong>Name: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Mobile: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Area: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Address: </strong></a>
                                    </div>
                                    <div class="col-sm-8">
                                      <a class="list-group-item" href="#">'.$cust_name.'</a>
                                      <a class="list-group-item" href="#">'.$cust_mob.'</a>
                                      <a class="list-group-item" href="#">'.$cust_region.'</a>
                                      <a class="list-group-item" href="#">'.$cust_address.'</a>
                                    </div>                                      
                                  </div>
                              </div>
                          </div>
                          <div id="demo-lft-tab-2" class="tab-pane fade">
                          <div class="row">
                              <div class="list-group bg-trans mar-no">
                                    <div class="col-sm-4">
                                      <a class="list-group-item" href="#"> <strong>Service Type: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Cleaning Date: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Cleaning Slot: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Num of Hours: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Assigned Cleaners: </strong></a>
                                      <a class="list-group-item" href="#"> <strong>Assigned Driver: </strong></a>
                                    </div>
                                    <div class="col-sm-8">
                                      <a class="list-group-item" href="#">'.$service_type.'</a>
                                      <a class="list-group-item" href="#" id="cleaning_date">'.$cleaning_date.'</a>
                                      <a class="list-group-item" href="#" id="final_slot">'.$final_slot.'</a>
                                      <a class="list-group-item" href="#">'.$num_of_hours.'</a>
                                      <a class="list-group-item" href="#">'.$cleaners.'</a>
                                      <a class="list-group-item" href="#">'.$driver_name.'</a>
                                    </div>                                      
                                  </div>
                                </div>
                          </div>
                          <div id="demo-lft-tab-3" class="tab-pane fade">
                              <div class="row">
                                <div class="list-group bg-trans mar-no">';
                                  $data .= "<form class='form-horizontal'> <div class='form-group'> 
                                      <label class='col-md-2 control-label' for='name'>Crew</label> 
                                      <div class='col-md-10'> 
                                      <input type='hidden' id='old_crew' value='".$old_crew."'>
                                      <select id='staff_list' class='form-control input-md' multiple>
                                      ".$fck."";
                                        $disabled_ids = array();
                                        foreach($staffList as $staff_list){
                                          
                                        // $check_validation = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$assign_date' AND assigned_staff_id = '".$staff_list['staff_id']."' AND (start_time < '$task_start_time' AND end_time > '$task_start_time' OR start_time < '$task_end_time' AND end_time > '$task_end_time' OR start_time > '$task_start_time' AND start_time < '$task_end_time' OR end_time > '$task_start_time' AND end_time < '$task_end_time' OR start_time = '$task_start_time' AND end_time = '$task_end_time')  And status = 'assigned' AND booking_id != '$booking'");

                                         $check_validation = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$assign_date' AND assigned_staff_id = '".$staff_list['staff_id']."' AND (start_time < CAST('$task_start_time' AS time) AND end_time > CAST('$task_start_time' AS time) OR start_time < '$task_end_time' AND end_time > CAST('$task_end_time' AS time) OR start_time > CAST('$task_start_time' AS time) AND start_time < CAST('$task_end_time' AS time) OR end_time > CAST('$task_start_time' AS time) AND end_time < CAST('$task_end_time' AS time) OR start_time = CAST('$task_start_time' AS time) AND end_time = CAST('$task_end_time' AS time) OR start_time < CAST('$task_start_time' AS time) AND end_time = CAST('$task_end_time' AS time) OR start_time = CAST('$task_start_time' AS time) AND end_time > CAST('$task_end_time' AS time))  And status = 'assigned' AND booking_id != '$booking'");
                                            
                                         // echo "SELECT * FROM table_assigned_task WHERE cleaning_date = '$assign_date' AND assigned_staff_id = '".$staff_list['staff_id']."' AND (start_time < '$task_start_time' AND end_time > '$task_start_time' OR start_time < '$task_end_time' AND end_time > '$task_end_time' OR start_time > '$task_start_time' AND start_time < '$task_end_time' OR end_time > '$task_start_time' AND end_time < '$task_end_time' OR start_time = '$task_start_time' AND end_time = '$task_end_time')  And status = 'assigned' AND booking_id != '$booking'";
                                                                                 
                                          $validation_pass =  mysqli_num_rows($check_validation);
                                        
                                          if($validation_pass > 0){
                                            $disabled = 'disabled';
                                            $disabled_ids[] = $staff_list['staff_id'];
                                          }else{
                                            $disabled = '';
                                          }
                                            $data.= "<option value='".$staff_list['staff_id']."' ".$disabled.">".$staff_list['staff_name']."</option>";
                                        }

                                      $data.= "</select>
                                      <input type='hidden' id='disabled_ids' class='form-control input-md' value='".implode(',',$disabled_ids)."'>
                                      <input type='hidden' id='bookingid' class='form-control input-md' value='$booking'>
                                      <input type='hidden' id='num_of_crew' class='form-control input-md' value='$num_of_cleaners'>
                                      </div> 
                                      </div>

                                      <div class='form-group'> 
                                      <label class='col-md-2 control-label' for='name'>Driver</label> 
                                      <div class='col-md-10'> 
                                      <select id='driver_list' class='form-control input-md' multiple>

                                      <option selected value='".$driver_name."'>".$driver_name."</option>";

                                        foreach($driverList as $driver_list){
                                            $data.= "<option value='".$driver_list['staff_name']."'>".$driver_list['staff_name']."</option>";
                                        }

                                      $data.= "</select>
                                      </div> 
                                      </div>
                                      <div class='text-center my_btn vertical-center'>
                                        <button type='button' class='btn btn-info' id='re-assign-btn'>Re-Assign</button>
                                      </div>

                                      </form>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>";
      echo $data;


?>

<script type="text/javascript">

  $('#staff_list').chosen({width:'100%'});
  $('#driver_list').chosen({width:'100%'});

  $('#re-assign-btn').css('display','none');


  $("#staff_list").chosen().on('chosen:showing_dropdown', function() {
      $num_crew = $('#num_of_crew').val();
      $staff_count = $("#staff_list").val().length;
   
      if ($num_crew == $staff_count) {
        $("#staff_list").find('option:not(:selected)').attr('disabled','disabled');
        $("#staff_list").trigger("chosen:updated");
      }       
  });
  

// SELECT STAFF VALIDATION
  $("#staff_list").change(function(event) {
    $('#re-assign-btn').css('display','block');
    // $('.my_btn').css('position','absolute':'left','');
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
      let dis_ids = $('#disabled_ids').val();
      var ids = dis_ids.split(',');
    if(params.deselected){

      $("#staff_list").find('option:not(:selected)').attr("disabled",false);
        $(ids).each(function( index,value) {
       
          $("select option[value='"+ value + "']").attr('disabled', true);
        });
      $("#staff_list").trigger("chosen:updated");      
    }
   });


// SELECT DRIVER VALIDATION

$("#driver_list").chosen().on('chosen:showing_dropdown', function() {
  $('#re-assign-btn').css('display','block');
    $num_crew = '1';
    $staff_count = $("#driver_list").val().length;
    
    if ($num_crew == $staff_count) {
      $("#driver_list").find('option:not(:selected)').attr('disabled','disabled');
      $("#driver_list").trigger("chosen:updated");
    }       
});


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


  $('#re-assign-btn').on('click',function(){

    var booking_id  = $('#bookingid').val();
    var staff_list  = $('#staff_list').val();
    var driver_list = $('#driver_list').val();
    var old_crew    = $('#old_crew').val();

    $num_crew = $('#num_of_crew').val();
    $staff_count = $("#staff_list").val().length;    

    if($num_crew == $staff_count){

     

       $.ajax({
            type:"post",
            url: 'ajax/reassign-staffs.php',   
            data:'booking_id='+ booking_id +'&staff_list='+ staff_list +'&driver_list='+ driver_list+ '&old_crew=' + old_crew,
            success: function(msg) {                
                 $.niftyNoty({
                      type: 'success',
                      container : 'floating',
                      title : 'Re-Assigned!',
                      message : 'The booking has been Re-Assigned!',
                      closeBtn : true,
                      timer : 1000,
                      onHide:function(){
                          $('#re-assign-btn').css('display','none');
                          window.location.reload(); 
                      }
                  });               
              }
          });

     }else{

        jQuery("#staff_list").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
        jQuery("#staff_list_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

     }

   });

  
</script>