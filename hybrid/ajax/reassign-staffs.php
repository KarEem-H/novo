<?php 

include "../config/connection.php";

$bookingID=$_REQUEST['booking_id'];
$staffId=$_REQUEST['staff_list'];
$driver_name = $_REQUEST['driver_list']; 
$old_crew = $_REQUEST['old_crew']; 

if($staffId != $old_crew){

   $delete_old_staff = mysqli_query($conn,"DELETE FROM table_assigned_task WHERE booking_id = '$bookingID'");

    $booking_details = mysqli_query($conn,"SELECT cleaning_date,cleaning_time,num_of_hours FROM table_booking WHERE job_ref = '$bookingID'");

    $row1=mysqli_fetch_assoc($booking_details);

    $cleaning_date = $row1['cleaning_date'];
    $cleaning_slot = $row1['cleaning_time'];
    $num_of_hours = $row1['num_of_hours'];

    $trim_tail = str_replace(":00", "",$cleaning_slot);
              
    $add_duration = $trim_tail + $num_of_hours . ":00";
    $start_time = date("G:i:s", strtotime($cleaning_slot));
    $end_time = date("G:i:s", strtotime($add_duration));
    $final_slot = $start_time .' - '. $end_time;

    $status = 'Assigned';

    $staff_list = explode(',',$staffId);

    foreach($staff_list as $staffs){

     $staff_details = mysqli_query($conn,"SELECT * FROM table_staffs WHERE staff_id = '$staffs'");

     $row2=mysqli_fetch_assoc($staff_details);

     $staff_name = $row2['staff_name'];

     $start = strtotime($cleaning_date);
     $start_date= date('Y-m-d', $start);

     $sql = mysqli_query($conn,"INSERT INTO table_assigned_task(`booking_id`,`assigned_staff_name`,`assigned_staff_id`,`cleaning_date`,`cleaning_slot`,`start_time`,`end_time`,`status`,`reason`) VALUE ('$bookingID','$staff_name','$staffs','$start_date','$cleaning_slot','$start_time','$end_time','$status',NULL)");

     $my_staff_name[] = $staff_name;

    }

    $final_names = implode(",",$my_staff_name);

    $sql2 = mysqli_query($conn,"UPDATE table_booking SET  `cleaners` = '$final_names', `driver` = '$driver_name' WHERE job_ref = '$bookingID'");

}else{

     $sql2 = mysqli_query($conn,"UPDATE table_booking SET `driver` = '$driver_name' WHERE job_ref = '$bookingID'");

}
    

?>