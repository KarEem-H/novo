<?php 

include "../config/connection.php";

 header('Content-Type: application/vnd.ms-excel'); 
 $filename = 'Driver Schedule -'. $today_date;
 header('Content-disposition: attachment; filename='.$filename.'.xls'); 

error_reporting(1);

$agent_name = $_SESSION['ADMIN_ID']['NAME'];
$admin_role = $_SESSION['ADMIN_ID']['ROLE'];

$my_date = $_REQUEST['selected_date'];

	$data = '<div class="panel">
                <div class="panel-body">
                    <table id="driver_schedule" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr style="background-color:#ccc; font-weight:bold">
                              <th class="min-desktop">S.No</th>
                              <th class="min-desktop">Service Date</th>                              
                              <th class="min-desktop">Driver</th>                              
                              <th class="min-desktop">Cleaner Name</th>
                              <th class="min-desktop">Location</th>                              
                              <th class="min-desktop">Job Amount</th>                              
                              <th class="min-desktop">Start Time</th>                              
                              <th class="min-desktop">End Time</th>    
                              
                              <th class="min-desktop">Materials</th> 
                              
                              <th class="min-desktop">Notes</th> 
                          </tr>
                      </thead>
                      <tbody>'; 

                          $booking_details = mysqli_query($conn,"SELECT cleaners,cleaning_date,cleaning_time,num_of_hours,driver,address,total,special_req,materials FROM table_booking WHERE cleaning_date = '$my_date' AND cleaner_allocated='Yes'");
						    
                          
                          $tot = count($booking_details);
                          $serialno=1;
                          if ( $tot > 0) {

                          while ($row = mysqli_fetch_array($booking_details, MYSQLI_ASSOC))
                            
                              {
                                  $db[] = $row;
                              }   
                                  
                                  foreach ($db as $row1) {

                                  	$cleaning_date = $row1['cleaning_date'];
								    $cleaning_slot = $row1['cleaning_time'];
								    $num_of_hours = $row1['num_of_hours'];
								    $cleaners = $row1['cleaners'];
								    $driver = $row1['driver'];
								    $address = $row1['address'];
								    $total = $row1['total'];
								    $remarks = $row1['special_req'];
								    $materials = $row1['materials'];

								    $trim_tail = str_replace(":00", "",$cleaning_slot);
								              
								    $add_duration = $trim_tail + $num_of_hours . ":00";
								    $start_time = date("h:i A", strtotime($cleaning_slot));
								    $end_time = date("h:i A", strtotime($add_duration));

                                  $data .= '<tr style="text-align:center">
                                      <td>'. $serialno++ .'</td>
                                      <td>'. $cleaning_date .'</td>
                                      <td>'. $driver .'</td>
                                      <td>'. $cleaners .'</td>
                                      <td>'. $address .'</td>
                                      <td>'. $total .'</td>
                                      <td>'. $start_time .'</td>
                                      <td>'. $end_time .'</td>
                                      <td>'. $materials .'</td>
                                      <td>'. $remarks .'</td>
                                  </tr>';  
                                      
                                 }  

                         }                        
                                               
                      $data .= '</tbody>
                  </table>
                </div>
            </div>';

          echo $data;

		?>



 