<?php 

    include "../config/connection.php";
                        
    $date = $today_date;
    $dateArray = date_parse_from_format('d/m/Y', $date);
    
    $current_month = $dateArray[month];

    $selected_date = $_REQUEST['selected_date'];

     $staff_list = mysqli_query($conn,"SELECT staff_id,staff_name,staff_category FROM table_staffs WHERE staff_status = 'Active' AND staff_category='Cleaning'");

      while ($get_staffs = mysqli_fetch_array($staff_list, MYSQLI_ASSOC))
                              
        {
            $staffList[] = $get_staffs;

        }

        

        // IF ONLY MONTH IS FILTERED
        if($selected_date != ''){

            foreach ($staffList as $staffs) {

                $staff_availability = mysqli_query($conn,"SELECT t1.booking_count,t1.cleaning_date,t1.assigned_staff_name,t1.assigned_staff_id,t2.num_of_hours FROM (SELECT COUNT(id) as booking_count,booking_id,cleaning_date,assigned_staff_name,assigned_staff_id from table_assigned_task WHERE cleaning_date = '$selected_date' AND status ='Assigned' GROUP BY assigned_staff_id) t1 LEFT JOIN (SELECT job_ref,num_of_hours FROM table_booking WHERE cleaning_date = '$selected_date' AND booking_status!='Cancelled') t2 ON (t2.job_ref = t1.booking_id) WHERE t1.assigned_staff_name='".$staffs['staff_name']."'");

                while ($staffBooking = mysqli_fetch_array($staff_availability, MYSQLI_ASSOC))


                    {
                        
                        $db[] = $staffBooking;

                    } 


                }
        }

          


  $tot = count($db);
  $serialno=1;

  if ($tot > 0) {

    foreach ($db as $row)  {

        $total_hours = '8';

         $data[] = array(
           "id"                     =>  $serialno++,
           "cleaning_date"          =>  $row['cleaning_date'],
           "assigned_staff_name"    =>  $row['assigned_staff_name'],
           "booking_count"          =>  $row['booking_count'],
           "booked_hours"           =>  $row['num_of_hours'],
           "available_hours"        =>  $total_hours - $row['num_of_hours']

         );
      }
}

  $output = array(
       "draw"             =>  isset($_POST["draw"]) ? $_POST["draw"] : 1,
       "recordsTotal"     =>  $tot,
       "recordsFiltered"  =>  $tot,
       "data"             =>  $data
      );


  echo json_encode($output);

 

?>